<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ appName() }}</title>

    <link rel="stylesheet" href="{{ asset('dist/css/font.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/app.css') }}">
    <script defer src="https://unpkg.com/alpinejs@3.2.4/dist/cdn.min.js"></script>

</head>

<body class="relative">
    {{-- ? // NOTE: Probably nedd to refactor --}}
    <nav class="w-full" x-data="{ isOpen: false }" @keydown.escape="isOpen = false" x-data="{ isOpen: false }"
        @keydown.escape="isOpen = false">
        {{-- top one --}}
        <div
            class="absolute top-0 left-0 z-10 flex w-full justify-center pt-4 pb-2 text-center text-white max-lg:block">

            <div class="w-full text-center max-lg:w-full lg:order-2 lg:w-52 xl:mx-16">
                <div class="inline-block w-32 place-items-center text-center xl:w-8/12">
                    <img class="w-full" src="{{ asset('images/logo-ivf.png') }}" alt="logo">
                    <p class="text-center font-bold text-black">Brawijaya IVF Center</p>
                </div>
            </div>

            <div
                class="flex w-2/12 flex-grow items-center justify-end space-x-12 max-lg:mr-4 max-lg:inline-block max-lg:w-auto max-sm:hidden lg:order-1">
                <a class="nav-link blue" href="#service">Our Service</a>
                <a class="nav-link blue" href="#why">Why Brawijaya IVF Center</a>
            </div>

            <div
                class="flex w-2/12 flex-grow items-center justify-start space-x-12 max-lg:inline-block max-lg:w-auto max-sm:hidden lg:order-3">
                <a class="nav-link blue" href="#faq">FAQ</a>
                <a class="nav-link blue" href="#contact">Ask Us for More</a>
            </div>
        </div>

        {{-- fixed one --}}
        <div class="fixed top-0 left-0 z-30 flex w-full -translate-y-[110%] justify-center bg-white pt-4 pb-2 text-center text-black transition duration-500 ease-in-out max-lg:block max-sm:hidden"
            id="navbarFixed">
            <div class="w-full text-center max-lg:w-full lg:order-2 lg:w-52">
                <div class="inline-block w-32 place-items-center text-center xl:w-8/12">
                    <img class="mx-auto w-5/12" src="{{ asset('images/logo-ivf.png') }}" alt="logo">
                </div>
            </div>

            <div
                class="flex w-2/12 flex-grow items-center justify-end space-x-12 max-lg:mr-4 max-lg:inline-block max-lg:w-auto max-sm:hidden lg:order-1">
                <a class="nav-link blue" href="#service">Our Service</a>
                <a class="nav-link blue" href="#why">Why Brawijaya IVF Center</a>
            </div>

            <div
                class="flex w-2/12 flex-grow items-center justify-start space-x-12 max-lg:inline-block max-lg:w-auto max-sm:hidden lg:order-3">
                <a class="nav-link blue" href="#faq">FAQ</a>
                <a class="nav-link blue" href="#contact">Ask Us for More</a>
            </div>

        </div>

        <!-- Mobile menu button -->
        <div class="fixed left-0 top-0 z-50 sm:hidden" :class="{ 'w-full bg-white': isOpen }">
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

    @yield('content')

    <footer class="flex flex-col items-center bg-g-wood-gold" id="contact">
        <h2 class="pt-10 text-center text-4xl font-bold">Ask Us for More Information</h2>

        <div class="container flex flex-shrink-0 flex-grow flex-col gap-4 py-10 md:flex-row">
            <form class="flex flex-col gap-4 max-md:order-3" action="{{ route('storeMessage') }}" method="post">
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
                        <input class="w-full rounded-sm p-2" type="email" name="email"
                            value="{{ old('email') }}" placeholder="Email">
                        @error('email')
                            <div class="text-red-600">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div>
                    <textarea class="h-full w-full rounded-sm p-2" name="message" placeholder="Message" value="{{ old('message') }}"></textarea>
                    @error('message')
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
<script src="{{ asset('dist/js/app.js') }}"></script>

</html>
