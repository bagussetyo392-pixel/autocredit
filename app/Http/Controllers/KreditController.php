<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KreditController extends Controller
{
    public function index()
    {
        return view('pages.home');
    }

    public function hitung(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'harga_mobil' => 'required|numeric|min:1',
            'dp'          => 'required|numeric|min:1|max:99',
            'tenor'       => 'required|numeric|min:1',
        ]);

        $hargaMobil = $request->harga_mobil;
        $dpPersen   = $request->dp;
        $tenorTahun = $request->tenor;

        // Perhitungan
        $bunga      = $hargaMobil * 0.20;
        $dpNominal  = $hargaMobil * ($dpPersen / 100);
        $tenorBulan = $tenorTahun * 12;
        $angsuran   = (($hargaMobil + $bunga) - $dpNominal) / $tenorBulan;

        // Kembalikan JSON (untuk AJAX)
        return response()->json([
            'success'    => true,
            'hargaMobil' => $hargaMobil,
            'dpPersen'   => $dpPersen,
            'dpNominal'  => $dpNominal,
            'tenorTahun' => $tenorTahun,
            'tenorBulan' => $tenorBulan,
            'bunga'      => $bunga,
            'angsuran'   => $angsuran,
        ]);
    }
    // Tambahkan method ini
    public function about()
    {
        return view('pages.about');
    }

    public function contact()
    {
        return view('pages.contact');
    }
}