@extends('layouts.app')
@section('content')
    <header class="bg-g-dark-blue" id="service">
        <div class="bright-arrow">
            <div class="bright-arrow-1" style="border-color: rgb(71, 82, 102);"></div>
            <div class="bright-arrow-2" style="border-color: rgb(71, 82, 102);"></div>
        </div>

        <div class="container flex flex-col items-center justify-center gap-8 py-20 text-lg text-white md:flex-row">
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
                <a class="font-button rounded-[4px] border-2 border-white py-1 px-4 font-mono text-xl uppercase text-white"
                    href="#">Read
                    More</a>
            </div>
        </div>
    </header>
@endsection
