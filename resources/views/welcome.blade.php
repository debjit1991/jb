<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.full_name', 'Jai Bangla') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

</head>
<style>
    .no-scrollbar::-webkit-scrollbar {
        display: none;
    }

    .soft-scrollbar::-webkit-scrollbar {
        cursor: pointer;
        height: 4px;
        width: 4px
    }
</style>

<body>
    <div x-data="{ shown: false, isOpen: false  }" x-intersect="shown = true"
        class="snap-y antialiased snap-mandatory scroll-smooth h-screen w-screen overflow-scroll no-scrollbar">

        <div id="home" style=" background-image: url('background.jpg');" class="snap-start bg-cover h-screen w-full">
            <nav
                class="absolute z-40 w-full px-10 backdrop-filter backdrop-blur-xl border-b bg-gray-100/60 border-blue-100">
                <div class="flex justify-between p-4 bg-transparent">
                    <div class="flex items-center">
                        <h3 class="text-lg font-bold text-sky-500 flex gap-3">
                            <img src="/herologo.png" class="h-10" alt="">
                            <div>
                                <p{{config('app.full_name', 'Jai Bangla')}}</p>
                                <p class="text-xs">Govt. of west bengal </p>
                            </div>
                        </h3>
                    </div>

                    <!-- left header section -->
                    <div class="flex items-center justify-between">
                        <button @click="isOpen = !isOpen" type="submit">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-800 lg:hidden" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                        </button>
                        <div class="hidden space-x-6 lg:inline-block text-sky-600 text-base font-bold">
                            <a href="#home">Home</a>
                            <a href="#scheme">Schemes</a>
                            <a href="#">About</a>
                            <a href="#">ContactUs</a>
                        </div>

                        <div class="mobile-navbar">
                            <div class="fixed left-0 mt-5 w-full h-48 p-5 bg-white rounded-lg shadow-xl top-16"
                                x-show="isOpen" @click.away=" isOpen = false" style="display: none">
                                <div class="flex flex-col space-y-6">
                                    <a href="#" class="text-sm text-black">Home</a>
                                    <a href="#" class="text-sm text-black">Schemes</a>
                                    <a href="#" class="text-sm text-black">About</a>
                                    <a href="#" class="text-sm text-black">ContactUs</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
            <div class="flex relative">
                <div class="flex items-center h-screen justify-center w-1/2">
                    <img src="/herologo.png" class="w-60" alt="">
                </div>
                <div class="flex items-center flex-col h-screen justify-center w-1/2">
                    <p class="text-xl font-semibold text-gray-600 font-sans rounded-lg">Welcome to west bengal Social
                        registry system</p>
                    <a href="{{ route('login') }}"
                        class="px-8 py-4 border border-green-700 text-green-700 bg-green-100/40 backdrop-blur backdrop-filter text-center font-semibold text-xl rounded-xl mt-4">Get
                        Started</a>
                </div>
                <button class="absolute w-full bottom-6 animate-bounce text-blue-400 ">
                    <p class="w-full text-center">Scroll Down</p>
                    <p class="w-full flex justify-center"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                            fill="currentColor" data-slot="icon" class="w-6 h-6">
                            <path fill-rule="evenodd"
                                d="M11.47 13.28a.75.75 0 0 0 1.06 0l7.5-7.5a.75.75 0 0 0-1.06-1.06L12 11.69 5.03 4.72a.75.75 0 0 0-1.06 1.06l7.5 7.5Z"
                                clip-rule="evenodd" />
                            <path fill-rule="evenodd"
                                d="M11.47 19.28a.75.75 0 0 0 1.06 0l7.5-7.5a.75.75 0 1 0-1.06-1.06L12 17.69l-6.97-6.97a.75.75 0 0 0-1.06 1.06l7.5 7.5Z"
                                clip-rule="evenodd" />
                        </svg>
                    </p>
                </button>
            </div>
        </div>
        <div id="scheme" style=" background-image: url('background2.jpg');"
            class="snap-start h-screen overflow-auto w-full">
            <div
                class="snap-y overflow-scroll snap-mandatory h-full no-scrollbar flex justify-center items-center gap-3">
                {{-- <div class="h-screen flex items-center justify-between px-36 snap-start">
                    <div>
                        <div class="flex gap-3">
                            <img src="/jai_bangla.png" class="rounded-full h-28 w-28 overflow-hidden" alt="">
                            <div class="bg-white p-4 italic rounded-lg w-72 text-sm">The Lakshmir Bhandar programme of
                                the West Bengali government won the SKOCH award for women and child development. The
                                West Bengal government’s Lakshmi Bhandar or laxmi bhandar programme earned the SKOCH
                                award for women and child development. The award recognises the state government as well
                                as the about two crore women who have gained increased power as a result of the
                                initiative.</div>
                        </div>
                        <div class="flex gap-3 mt-4 ml-8">
                            <img src="/krishak_bandhu.png" class="rounded-full h-28 w-28 overflow-hidden" alt="">
                            <div class="bg-white p-4 italic rounded-lg w-72 text-sm">Under "Krishak Bandhu Death
                                Benefit" component of the scheme, in case of death of a farmer between the age of 18 to
                                60 years, the State Government provides one time lump sum grant of Rs. 2 lakh to the
                                family of the deceased to ensure social security to the bereaved family.</div>
                        </div>
                    </div>
                    <div>
                        <div class="flex gap-3">
                            <div class="bg-white p-4 italic rounded-lg w-72 text-sm">Kanyashree Prakalpa has been
                                designed to ensure that girls stay in school and delay their marriages till at least age
                                of 18. Kanyashree's strategy is simple, keeping girls away from marriage till exact age
                                and keeping them in the streamline of their education, to do that government facilitates
                                these girls with financial aid. It has changed the behavioural attitude particularly who
                                wants to marry their girl child before 18 years of age.</div>
                            <img src="/rupashree.png" class="rounded-full h-36 w-36 overflow-hidden" alt="">
                        </div> --}}
                        {{-- <div class="flex gap-3">
                            <div class="bg-white p-4 italic rounded-lg w-72 text-sm">Kanyashree Prakalpa has been
                                designed to ensure that girls stay in school and delay their marriages till at least age
                                of 18. Kanyashree's strategy is simple, keeping girls away from marriage till exact age
                                and keeping them in the streamline of their education, to do that government facilitates
                                these girls with financial aid. It has changed the behavioural attitude particularly who
                                wants to marry their girl child before 18 years of age.</div>
                            <img src="/rupashree.png" class="rounded-full h-36 w-36 overflow-hidden" alt="">
                        </div> --}}
                        {{--
                    </div>
                </div>
                <div x-show="shown" x-transition class="h-screen flex items-center justify-center px-36 snap-start">
                    <div class="flex gap-3">
                        <img src="/cha_sundri.png" class="rounded-full h-28 w-28 overflow-hidden" alt="">
                        <div class="bg-white p-4 rounded-lg w-72 mt-4 text-sm italic">The scheme proposes to cover the
                            North Bengal area with the construction of houses for more than 750 working labor families.
                            The Chaa Sundari scheme will cover workers who currently work in the 370 gardens under the
                            tea plantation.</div>
                        <div>
                            <div class="flex gap-3">
                                <img src="/cha_sundri.png" class="rounded-full h-28 w-28 overflow-hidden" alt="">
                                <div class="bg-white p-4 rounded-lg w-72 mt-4 text-sm italic">The scheme proposes to
                                    cover the North Bengal area with the construction of houses for more than 750
                                    working labor families. The Chaa Sundari scheme will cover workers who currently
                                    work in the 370 gardens under the tea plantation.</div>
                            </div>
                        </div>
                    </div>
                    <div class="flex gap-3 mt-36 ml-10">
                        <div class="bg-white p-4 rounded-lg w-72 text-sm italic">The objective was to create and
                            maintain sustainable livelihood of SHG members. The project is being implemented in
                            association with NABARD.
                            On a pilot basis, members of 139 SHGs from Balarampur and Purulia-I Block in Purulia
                            district was trained. A 5-member women training team (ACRPs of Rajib Gandhi Mahila Vikash
                            Poriyojana) from Raibarely, Uttar Pradesh conducted the training and awareness camps.</div>
                        <img src="/muktidhara.png" class="rounded-full h-36 w-36 overflow-hidden" alt="">
                    </div>
                </div> --}}

                <div class="rounded-lg w-72 text-sm h-80 mt-36 flex items-center group relative bg-blue-200 overflow-hidden hover:cursor-pointer font-semibold text-blue-700">
                    <div
                        class="group-hover:scale-110 group-hover:translate-x-12 transition duration-500 cursor-pointer object-cover">
                        <img src="/jai_bangla.png" alt="">
                    </div>
                    <div
                        class="absolute top-0 w-48 left-0 h-full group-hover:bg-gradient-to-r from-cyan-500 to-gray-50/80 group-hover:bg-opacity-90 transition-all transform -translate-x-8 opacity-0 group-hover:opacity-100 group-hover:-translate-x-4 py-3 pl-6 duration-500">
                        The Lakshmir Bhandar programme of
                        the West Bengali government won the SKOCH award for women and child development. The
                        West Bengal government’s Lakshmi Bhandar or laxmi bhandar programme earned the SKOCH
                        award for women and child development.
                    </div>
                    <div class="absolute bottom-0 font-semibold p-2 text-center w-full text-lg bg-cyan-300">
                        <p>Lakhmir Bhandar</p>
                    </div>
                </div>
                <div
                    class="rounded-lg w-72 text-sm h-80 mt-36 flex items-center group relative bg-blue-200 overflow-hidden hover:cursor-pointer font-semibold text-blue-700">
                    <div
                        class="group-hover:scale-110 group-hover:translate-x-12 transition duration-500 cursor-pointer object-cover">
                        <img src="/jai_bangla.png" alt="">
                    </div>
                    <div
                        class="absolute top-0 w-48 left-0 h-full group-hover:bg-gradient-to-r from-cyan-500 to-gray-50/80 group-hover:bg-opacity-90 transition-all transform -translate-x-8 opacity-0 group-hover:opacity-100 group-hover:-translate-x-4 py-3 pl-6 duration-500">
                        The Lakshmir Bhandar programme of
                        the West Bengali government won the SKOCH award for women and child development. The
                        West Bengal government’s Lakshmi Bhandar or laxmi bhandar programme earned the SKOCH
                        award for women and child development.
                    </div>
                    <div class="absolute bottom-0 font-semibold p-2 text-center w-full text-lg bg-cyan-300">
                        <p>Lakhmir Bhandar</p>
                    </div>
                </div>

                <div class="rounded-lg w-72 text-sm h-80 mt-36 flex items-center group relative bg-blue-200 overflow-hidden hover:cursor-pointer font-semibold text-blue-700">
                    <div
                        class="group-hover:scale-110 group-hover:translate-x-12 transition duration-500 cursor-pointer object-cover">
                        <img src="/jai_bangla.png" alt="">
                    </div>
                    <div
                        class="absolute top-0 w-48 left-0 h-full group-hover:bg-gradient-to-r from-cyan-500 to-gray-50/80 group-hover:bg-opacity-90 transition-all transform -translate-x-8 opacity-0 group-hover:opacity-100 group-hover:-translate-x-4 py-3 pl-6 duration-500">
                        The Lakshmir Bhandar programme of
                        the West Bengali government won the SKOCH award for women and child development. The
                        West Bengal government’s Lakshmi Bhandar or laxmi bhandar programme earned the SKOCH
                        award for women and child development.
                    </div>
                    <div class="absolute bottom-0 font-semibold p-2 text-center w-full text-lg bg-cyan-300">
                        <p>Lakhmir Bhandar</p>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="snap-start h-screen overflow-auto w-full bg-gray-100">
            Hello
        </div> --}}

    </div>
    @livewireScriptConfig

    <script>
        AOS.init();
    </script>
</body>

</html>
