@extends('layouts.app')
@section('content')
    <header class="home relative flex h-screen max-h-[90vh] flex-col items-center justify-center align-middle">
        <div class="container py-40">
            <h1 class="mb-6 text-4xl tracking-wide text-[#886b88] md:text-5xl lg:mb-12 lg:text-6xl xl:text-7xl">
                Hope is real,
                make your
                dreams with your loved one come true!
            </h1>
            <a class="font-button rounded-sm border-2 border-white py-1 px-4 font-mono uppercase text-white"
                href="#">Explore More...</a>
        </div>
    </header>

    <section class="bg-g-dark-blue" id="service">
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
    </section>

    <section class="bg-g-wood-gold" id="why">
        <div class="container flex flex-col items-center gap-8 py-20 text-lg md:flex-row">
            <div class="flex flex-col items-center gap-6 text-center">
                <h2 class="text-4xl font-black">Why Brawijaya IVF Center</h2>

                <p>
                    Brawijaya IVF Center brings new hope for a baby. This service is supported by obstetrics and
                    gynecology (obstetrics and gynecology) specialists, fertility consultants and reproductive
                    endocrinologists who are experienced in their fields. The clinic handles in vitro fertilization
                    (IVF), artificial insemination, sperm disorders, and all causes of fertility problems.
                </p>
                <a class="font-button rounded-[4px] border-2 border-white py-1 px-4 font-mono text-xl uppercase text-white"
                    href="#">Read
                    More</a>
            </div>
            <img class="w-1/2 object-contain object-top max-md:order-first" src="{{ asset('assets/why.webp') }}"
                alt="">
        </div>

    </section>

    <section class="flex flex-col items-center justify-center bg-g-dark-blue py-14 text-white max-xl:h-screen"
        id="faq">

        <div class="mb-10 flex flex-col items-center justify-center gap-4">
            <h2 class="text-4xl font-bold uppercase">FAQ</h2>
            <p class="text-xl">Safe, reliable, and unique.</p>
        </div>

        <div class="flex flex-col items-start justify-center gap-4 px-12 text-black md:flex-row lg:px-24">
            <img class="h-auto w-full md:w-1/3" src="{{ asset('assets/faq.webp') }}" alt="">
            <div class="flex flex-col gap-2 rounded-sm bg-white p-4">
                <p class="text-2xl">SAFETY FIRST</p>
                <p class="font-sans font-bold text-red-600">Rigorously Tested</p>
                <p class="font-sans font-bold">We spare no expense to make sure everything runs smoothly.</p>
            </div>
        </div>

    </section>
@endsection
