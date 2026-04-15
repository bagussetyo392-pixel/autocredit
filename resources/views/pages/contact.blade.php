@extends('layouts.app')

@section('content')

    {{-- Toast Notification --}}
    @include('partials.contact.toast')

    <section class="max-w-4xl mx-auto px-6 py-20">

        {{-- Header --}}
        @include('partials.contact.header')

        {{-- Flash Session (fallback non-AJAX) --}}
        @include('partials.contact.flash')

        {{-- Grid: Form + Sidebar --}}
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-start">
            @include('partials.contact.form')
            @include('partials.contact.sidebar')
        </div>

        {{-- FAQ --}}
        @include('partials.contact.faq')

        {{-- CTA --}}
        @include('partials.contact.cta')

    </section>

    {{-- Scripts --}}
    @include('partials.contact.script')

@endsection