<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        // 🔒 Anti spam (honeypot)
        if ($request->website) {
            return $request->expectsJson()
                ? response()->json(['success' => false, 'message' => 'Spam detected.'], 400)
                : back();
        }

        // ✅ Validasi
        $data = $request->validate([
            'nama'  => 'required|min:3',
            'email' => 'required|email',
            'jenis' => 'required',
            'pesan' => 'required|min:10',
        ]);

        try {
            // 📩 Kirim email
            Mail::to('emailkamu@gmail.com')
                ->send(new ContactMail($data));

            // ✅ AJAX → JSON | Non-AJAX → redirect
            if ($request->expectsJson()) {
                return response()->json([
                    'success' => true,
                    'message' => 'Pesan berhasil dikirim!',
                ]);
            }

            return back()->with('success', 'Pesan berhasil dikirim!');

        } catch (\Exception $e) {

            if ($request->expectsJson()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Gagal mengirim email. Coba lagi.',
                ], 500);
            }

            return back()->with('error', 'Gagal mengirim email. Coba lagi.');
        }
    }
}