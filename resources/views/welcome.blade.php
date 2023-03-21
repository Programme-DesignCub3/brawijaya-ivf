<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>MCU Brawijaya Hospital</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Mono:ital,wght@0,300;0,400;0,500;1,300;1,400;1,500&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=MuseoModerno:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>

<body class="relative">
    <nav class="w-full">
        <div class="absolute top-0 left-0 z-10 flex w-full justify-evenly text-white">
            <div class="flex gap-4">
                <p>Hope is real, make your</p>
                <p>Our Service</p>
            </div>
            <div class="text-center">
                <img src="https://custom-images.strikinglycdn.com/res/hrscywv4p/image/upload/c_limit,fl_lossy,h_300,w_300,f_auto,q_auto/1/VmfjSmD_kzbhuf.png"
                    alt="logo">
                <p>Brawijaya IVF Center</p>
            </div>
            <div class="flex gap-4">
                <p>Why Brawijaya IVF Center</p>
                <p>FAQ</p>
                <p>Ask Us for More</p>
            </div>
        </div>
    </nav>

    <header class="relative flex h-screen flex-col items-center justify-center align-middle">
        <div class="container">
            <h1 class="mb-12 text-6xl">Hope is real, make your dreams with your loved one come true !</h1>
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

        <div class="flex flex-col items-start justify-center gap-4 px-24 text-black md:flex-row">
            <img class="h-auto w-full md:w-1/3" src="{{ asset('assets/faq.webp') }}" alt="">
            <div class="flex flex-col gap-2 rounded-sm bg-white p-4">
                <p class="text-2xl">SAFETY FIRST</p>
                <p class="font-sans font-bold text-red-600">Rigorously Tested</p>
                <p class="font-sans font-bold">We spare no expense to make sure everything runs smoothly.</p>
            </div>
        </div>

    </section>

    <footer class="flex flex-col items-center bg-g-wood-gold">
        <h2 class="pt-10 text-4xl font-bold">Ask Us for More Information</h2>

        <div class="container flex flex-shrink-0 flex-grow flex-col gap-4 py-10 md:flex-row">
            <form class="flex flex-col gap-4 max-md:order-3" action="/" method="post">
                @csrf

                <div class="flex gap-4">
                    <div>
                        <input class="w-full rounded-sm p-2" type="text" name="name" value="{{ old('name') }}"
                            placeholder="Name">
                        @error('name')
                            <div class="text-red-600">{{ $message }}</div>
                        @enderror
                    </div>

                    <div>
                        <input class="w-full rounded-sm p-2" type="email" name="email" value="{{ old('email') }}"
                            placeholder="Email">
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

</html>
