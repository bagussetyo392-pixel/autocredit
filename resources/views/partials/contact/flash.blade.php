{{-- contact/partials/_flash.blade.php --}}

@if (session('success'))
    <div class="mb-6 flex items-center gap-3 bg-green-500/10 border border-green-500/20 text-green-400 text-sm px-4 py-3 rounded-lg">
        <span>✓</span>
        <span>{{ session('success') }}</span>
    </div>
@endif

@if ($errors->any())
    <div class="mb-6 flex items-center gap-3 bg-red-500/10 border border-red-500/20 text-red-400 text-sm px-4 py-3 rounded-lg">
        <span>✕</span>
        <span>{{ $errors->first() }}</span>
    </div>
@endif