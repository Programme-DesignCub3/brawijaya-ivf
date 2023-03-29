<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>MCU Brawijaya Hospital</title>

    <!-- Fonts -->
    {{-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Mono:ital,wght@0,300;0,400;0,500;1,300;1,400;1,500&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=MuseoSans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet"> --}}
    <!-- Styles -->

    <link rel="stylesheet" href="{{ asset('dist/css/font.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/app.css') }}">
    <script defer src="https://unpkg.com/alpinejs@3.2.4/dist/cdn.min.js"></script>

</head>

<body class="relative">

    <nav class="w-full" x-data="{ isOpen: false }" @keydown.escape="isOpen = false" x-data="{ isOpen: false }"
        @keydown.escape="isOpen = false">
        <div
            class="absolute top-0 left-0 z-10 flex w-full justify-center p-4 align-middle text-white max-lg:flex-wrap max-md:hidden lg:gap-16">
            <div class="shrink-0 text-center max-lg:w-full lg:order-2">
                <img class="inline-block max-h-16" src="{{ asset('images/logo.webp') }}" alt="logo">
                <p>Brawijaya IVF Center</p>
            </div>

            <div class="flex items-center justify-end gap-10 max-lg:justify-evenly lg:order-1 lg:w-[calc(50%-100px)]">
                <a>Hope is real, make your</a>
                <a>Our Service</a>
            </div>

            <div class="flex items-center justify-start gap-10 max-lg:justify-evenly lg:order-3 lg:w-[calc(50%-100px)]">
                <a>Why Brawijaya IVF Center</a>
                <a>FAQ</a>
                <a>Ask Us for More</a>
            </div>
        </div>

        {{-- fixed one --}}
        <div class="fixed top-0 left-0 z-30 flex w-full -translate-y-[110%] justify-center gap-4 bg-white p-4 align-middle text-black transition duration-500 ease-in-out max-lg:flex-wrap max-md:hidden lg:gap-16"
            id="navbarFixed">

            <div class="shrink-0 text-center max-lg:w-full lg:order-2">
                <div class="inline-block place-items-center bg-[#e4e4e4] p-4 text-center lg:-m-4 lg:-mb-5">
                    <img class="inline-block max-h-16" src="{{ asset('images/logo.webp') }}" alt="logo">
                </div>
            </div>

            <div class="flex items-center justify-end gap-10 max-lg:justify-evenly lg:order-1 lg:w-[calc(50%-100px)]">
                <a>Hope is real, make your</a>
                <a>Our Service</a>
            </div>

            <div class="flex items-center justify-start gap-10 max-lg:justify-evenly lg:order-3 lg:w-[calc(50%-100px)]">
                <a>Why Brawijaya IVF Center</a>
                <a>FAQ</a>
                <a>Ask Us for More</a>
            </div>

        </div>

        <!-- Mobile menu button -->
        <div class="fixed left-0 top-0 z-50 md:hidden" :class="{ 'w-full bg-white': isOpen }">
            <div class="relative left-0 flex h-16 items-center">
                <button
                    class="ml-2 inline-flex items-center justify-center rounded-md bg-red-700 p-2 text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500"
                    type="button" aria-controls="mobile-menu" aria-expanded="false" @click="isOpen = !isOpen">
                    <span class="sr-only">Open main menu</span>
                    <svg class="block h-6 w-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <svg class="hidden h-6 w-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <!-- Mobile menu, show/hide based on menu state. -->
            <div class="w-full" id="mobile-menu" x-show="isOpen" x-cloak>
                <div class="space-y-1 pt-2 pb-4">
                    <a class="block border-l-4 border-transparent py-2 pl-3 pr-4 text-base font-medium text-gray-500 hover:border-gray-300 hover:bg-gray-50 hover:text-gray-700"
                        href="#footer">Hope is real, make your</a>
                    <a class="block border-l-4 border-transparent py-2 pl-3 pr-4 text-base font-medium text-gray-500 hover:border-gray-300 hover:bg-gray-50 hover:text-gray-700"
                        href="#footer">Our Service</a>
                    <a class="block border-l-4 border-transparent py-2 pl-3 pr-4 text-base font-medium text-gray-500 hover:border-gray-300 hover:bg-gray-50 hover:text-gray-700"
                        href="#footer">Why Brawijaya IVF Center</a>
                    <a class="block border-l-4 border-transparent py-2 pl-3 pr-4 text-base font-medium text-gray-500 hover:border-gray-300 hover:bg-gray-50 hover:text-gray-700"
                        href="#footer">FAQ</a>
                    <a class="block border-l-4 border-transparent py-2 pl-3 pr-4 text-base font-medium text-gray-500 hover:border-gray-300 hover:bg-gray-50 hover:text-gray-700"
                        href="#footer">Ask Us for More</a>
                </div>
            </div>
        </div>
    </nav>

    <header class="relative flex h-screen max-h-[calc(100vh-180px)] flex-col items-center justify-center align-middle">
        <div class="container">
            <h1 class="mb-6 text-4xl md:text-5xl lg:mb-12 lg:text-6xl">Hope is real, make your dreams with your loved
                one come true!
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

    <section class="bg-g-wood-gold">
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

    <section class="flex flex-col items-center justify-center bg-g-dark-blue py-14 text-white max-xl:h-screen">

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

    <footer class="flex flex-col items-center bg-g-wood-gold">
        <h2 class="pt-10 text-center text-4xl font-bold">Ask Us for More Information</h2>

        <div class="container flex flex-shrink-0 flex-grow flex-col gap-4 py-10 md:flex-row">
            <form class="flex flex-col gap-4 max-md:order-3" action="/" method="post">
                @csrf

                <div class="flex gap-4">
                    <div>
                        <input class="w-full rounded-sm p-2" type="text" name="name"
                            value="{{ old('name') }}" placeholder="Name">
                        @error('name')
                            <div class="text-red-600">{{ $message }}</div>
                        @enderror
                    </div>

                    <div>
                        <input class="w-full rounded-sm p-2" type="email" name="email"
                            value="{{ old('email') }}" placeholder="Email">
                        @error('title')
                            <div class="text-red-600">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div>
                    <textarea class="h-full w-full rounded-sm p-2" name="message" placeholder="Message" value="{{ old('message') }}"></textarea>
                    @error('title')
                        <div class="text-red-600">{{ $message }}</div>
                    @enderror
                </div>

                <button class="self-start rounded-sm border-2 border-white py-1 px-4 text-2xl uppercase text-white"
                    type="submit">
                    submit
                </button>
            </form>

            <iframe class="max-md:order-2" id="s-map"
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15864.190589552576!2d106.807512!3d-6.257454!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f178154d6131%3A0xe7b8b4d2224dd2ff!2sBrawijaya%20Hospital%20Antasari!5e0!3m2!1sen!2sus!4v1679287884475!5m2!1sen!2sus"
                height="250" scrolling="no"
                style="pointer-events: none; height: 203px; margin-top: 5px; margin-bottom: 5px;"></iframe>


            <ul class="font-montserat max-md:order-1">
                <li class="font-bold">
                    <svg class="inline-block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                    </svg>
                    Brawijaya Hospital Antasari
                </li>
                <li class="font-bold">
                    <svg class="inline-block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span>Mon - Sun</span>
                </li>
                <li class="font-bold">
                    <svg class="inline-block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M10.5 1.5H8.25A2.25 2.25 0 006 3.75v16.5a2.25 2.25 0 002.25 2.25h7.5A2.25 2.25 0 0018 20.25V3.75a2.25 2.25 0 00-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3" />
                    </svg>
                    <span>halo Brawijya 150160</span>
                </li>
                <li class="">
                    <svg class="inline-block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                    </svg>
                    <span>Marketing@brawijayahealthcare.com</span>
                </li>
            </ul>
        </div>

        <div class="w-full bg-[#333333] p-4 py-32 text-center font-sans text-white">
            <div>
                <img src="" alt="">
                <img src="" alt="">
            </div>
            <p class="font-bold">Brawijaya Healthcare Group © 2023</p>
        </div>

    </footer>
</body>


<script>
    const el = document.querySelector('#service')
    const navbarFixed = document.querySelector('#navbarFixed')
    let old_visible = false;

    function isElementInViewport(el) {

        var rect = el.getBoundingClientRect();
        return (
            rect.top <= 50
            // &&
            // rect.left >= 0 &&
            // rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
            // rect.right <= (window.innerWidth || document.documentElement.clientWidth) /* or $(window).width() */
        );
    }


    function onVisibilityChange(el, callback) {

        return function() {
            var visible = isElementInViewport(el);
            if (visible != old_visible) {
                old_visible = visible;
                if (typeof callback == 'function') {
                    callback();
                }
            }
        }
    }

    var handler = onVisibilityChange(el, function() {
        navbarFixed.classList.toggle("-translate-y-[110%]");
    });

    if (window.addEventListener) {
        // addEventListener('DOMContentLoaded', handler, false);
        // addEventListener('load', handler, false);
        addEventListener('scroll', handler, false);
        addEventListener('resize', handler, false);
    } else if (window.attachEvent) {
        // attachEvent('onDOMContentLoaded', handler); // Internet Explorer 9+ :(
        // attachEvent('onload', handler);
        attachEvent('onscroll', handler);
        attachEvent('onresize', handler);
    }
</script>

</html>
