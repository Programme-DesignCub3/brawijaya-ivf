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
                <h2 class="text-4xl font-black">{{ $service->title }}</h2>
                <p class="text-center">{{ $service->subtitle }}
                </p>
                <div class="list-disc pl-10">
                    {!! $service->content !!}
                </div>

                <a class="font-button rounded-[4px] border-2 border-white py-1 px-4 font-mono text-xl uppercase text-white"
                    href="#">Read
                    More</a>
            </div>
        </div>
    </section>


    <section class="bg-g-wood-gold" id="why">
        <div class="container flex flex-col items-center gap-8 py-20 text-lg md:flex-row">
            <div class="flex flex-col items-center gap-6 text-center">

                <h2 class="text-4xl font-black">{{ $why->title }}</h2>

                {!! $why->content !!}

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
            <h2 class="text-4xl font-bold uppercase">{{ $faq_section->title }}</h2>
            <p class="text-xl">{{ $faq_section->content }}</p>
        </div>

        <div class="flex flex-col items-start justify-center gap-4 px-12 text-black md:flex-row lg:px-24">
            <img class="h-auto w-full md:w-1/3" src="{{ asset('assets/faq.webp') }}" alt="">

            <div class="mx-auto w-full max-w-xl border border-gray-200 bg-white" x-data="{ selected: null }">
                <ul class="shadow-box">
                    @foreach ($faqs as $faq)
                        <li class="relative border-b border-gray-200">

                            <button class="w-full px-8 py-6 text-left" type="button"
                                @click="selected !=={{ $loop->iteration }} ? selected = {{ $loop->iteration }} : selected = null">
                                <div class="flex items-center justify-between">
                                    <span>
                                        {{ $faq->question }} </span>
                                    <svg class="h-6 w-6 rotate-0 transition duration-700 ease-in-out"
                                        x-bind:class="selected == {{ $loop->iteration }} ? 'h-6 w-6 rotate-180' : 'h-6 w-6'"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                    </svg>

                                </div>
                            </button>

                            <div class="relative max-h-0 overflow-hidden transition-all duration-700" style=""
                                x-ref="container{{ $loop->iteration }}"
                                x-bind:style="selected == {{ $loop->iteration }} ? 'max-height: ' + $refs
                                    .container{{ $loop->iteration }}.scrollHeight +
                                    'px' : ''">
                                <div class="p-6">
                                    {{ $faq->answer }}
                                </div>
                            </div>

                        </li>
                    @endforeach


                    {{-- <div class="flex flex-col gap-2 rounded-sm bg-white p-4">
                    <p class="text-2xl">SAFETY FIRST</p>
                    <p class="font-sans font-bold text-red-600">Rigorously Tested</p>
                    <p class="font-sans font-bold">We spare no expense to make sure everything runs smoothly.</p>
                </div> --}}

                </ul>
            </div>
        </div>

    </section>
@endsection
