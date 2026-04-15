@extends('layouts.app')

@section('content')
    @include('partials.contact.toast')

    <section class="max-w-4xl mx-auto px-6 py-20">

        @include('partials.contact.header')

        @include('partials.contact.flash')

        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-start">
            @include('partials.contact.form')
            @include('partials.contact.sidebar')
        </div>

        @include('partials.contact.faq')

        @include('partials.contact.cta')

    </section>

    @include('partials.contact.script')
@endsection
