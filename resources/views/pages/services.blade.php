@extends('layouts.app')
@section('content')
    <header class="bg-g-dark-blue" id="service">
        <div class="container flex flex-col items-center justify-center gap-8 py-20 pt-40 text-lg text-white">
            <img class="w-1/2 object-contain object-top" src="{{ asset('assets/service.webp') }}" alt="">
            <div class="flex flex-col items-center gap-6">
                <h2 class="text-4xl font-black">Our Services</h2>
                <p class="text-center">We provide various services to help you realize your dream of having a baby.
                </p>
                <ul class="list-disc pl-10">
                    <li>Consultation</li>
                    <li>IVF Services</li>
                    <li>Pregnancy Program and Other Fertility Check-ups</li>
                    <li>Infertility Treatment</li>
                </ul>
            </div>
        </div>
    </header>
@endsection
