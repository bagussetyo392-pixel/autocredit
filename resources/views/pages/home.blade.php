@extends('layouts.app')

@section('content')

    @include('partials.home.slider')

    <section class="max-w-5xl mx-auto px-6 py-16">

        <div class="text-center mb-10">
            <p class="text-[#E8FF47] text-xs font-bold uppercase tracking-widest mb-2">Kalkulator</p>
            <h2 style="font-family:'Syne',sans-serif" class="text-3xl font-black tracking-tight">
                Simulasi Kredit Mobil
            </h2>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">
            @include('partials.home.form-kredit')

            @include('partials.home.hasil-kredit')
        </div>

    </section>

@endsection
