@extends('layouts.app')

@section('title', 'Development Projects')
@section('content')
<div class="bg-gradient-to-b from-gray-800 via-gray-700 to-gray-600 flex flex-col py-12">
    <x-navigation />
    <div id="myProjects" class="min-h-screen">
        <div class="bg-gray-100 bg-opacity-75 h-full">
            <h1 class="text-5xl text-center text-gray-700 py-5" style="font-family: 'Oswald', sans-serif;">
                My Development & Coding Projects
            </h1>
            <h3 class="text-center mx-auto w-4/5 md:w-2/3 lg:w-1/3 py-6 text-gray-300 text-2xl bg-gray-700"
                style="font-family: 'Roboto', sans-serif;">
                "For the things we have to <span class="text-green-400">learn</span> before we can do them, we learn
                <span class="text-green-400">by doing</span> them" <br> Aristotle
            </h3>
            <div class="text-gray-700 mx-auto flex flex-col space-y-4 px-8 pt-5">
                <h2 class="text-3xl  self-start px-3" style="font-family: 'Oswald', sans-serif; color: #3a76c1;">
                    <x-devsquadLogo /> DevSquad Training Video Library
                    <div class="space-x-3 mt-6">
                        <img class="h-8 w-14 mb-2 inline" title="PHP"
                            src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Flogos-download.com%2Fwp-content%2Fuploads%2F2016%2F09%2FPHP_logo.png&f=1&nofb=1"
                            alt="PHP logo">

                        <img class="h-8 w-8 mb-2 inline" title="Laravel"
                            src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Flaravel.io%2Fimages%2Flaravel.png&f=1&nofb=1"
                            alt="Laravel Logo">

                        <img class="h-8 w-12 mb-2 inline" title="Tailwind CSS"
                            src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Flabinator.com%2Fwordpress-marketplace%2Fwp-content%2Fuploads%2F2020%2F07%2FTailwind-CSS-Logo.png&f=1&nofb=1"
                            alt="Tailwind CSS Logo">
                    </div>
                </h2>
                <p class="text-2xl text-gray-300 bg-gray-700 self-start w-full mx-auto px-2 py-6"
                    style="font-family: 'Roboto', sans-serif;">
                    I developed the video library for <span style="color: #3a76c1;">DevSquad</span>, an elite software
                    development contracting company
                    based in Murray, Utah, designed for the company to create and display training videos for their
                    developers.
                    <br><br>
                    I built the project in PHP with Tailwind CSS, the same as this site, and Livewire authentication.
                    This taught me extensively about database manipulation (CRUD) and UI design.
                    <br><br>
                    <a href="{{ url('https://devsquad.com') }}" class="text-blue-600 hover:underline">Check DevSquad out
                        here!</a>
                </p>
                <img class="w-full md:h-1/3 md:w-2/3 pb-3" src="{{ asset('/img/home.PNG') }}"
                    alt="Training Video Library Home Page">
                <img class="w-full md:h-1/3 md:w-2/3 py-3 self-end" src="{{ asset('/img/vidplayer.PNG') }}"
                    alt="Training Video Player">
                <h2 class="text-3xl self-start px-3" style="font-family: 'Oswald', sans-serif;">
                    Wasatch County Water Efficiency Project company websites
                    <div class="space-x-3 mt-6">
                        <img class="h-8 w-12 inline"
                            src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fd0.awsstatic.com%2Flogos%2FAWS%2520Logo%2520Variants%2FFull%2520Color%2FAWS-Logo_Full-Color_500x300.png&f=1&nofb=1"
                            alt="AWS logo">

                        <img class="h-8 w-14 mb-2 inline" title="PHP"
                            src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Flogos-download.com%2Fwp-content%2Fuploads%2F2016%2F09%2FPHP_logo.png&f=1&nofb=1"
                            alt="PHP logo">

                        <img class="h-8 w-8 mb-2 inline" title="Laravel"
                            src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Flaravel.io%2Fimages%2Flaravel.png&f=1&nofb=1"
                            alt="Laravel Logo">

                        <img class="h-8 w-12 mb-2 inline" title="Tailwind CSS"
                            src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Flabinator.com%2Fwordpress-marketplace%2Fwp-content%2Fuploads%2F2020%2F07%2FTailwind-CSS-Logo.png&f=1&nofb=1"
                            alt="Tailwind CSS Logo">

                        <img class="h-12 w-22 inline"
                            src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.itopstimes.com%2Fwp-content%2Fuploads%2F2018%2F10%2FNGINX-logo-rgb-large.png&f=1&nofb=1"
                            alt="Nginx">
                    </div>
                </h2>
                <p class="text-2xl text-gray-300 bg-gray-700 self-start w-full mx-auto px-2 py-6 space-x-6"
                    style="font-family: 'Roboto', sans-serif;">
                    I've built, deployed, and managed servers & security for several agricultural/ environmental company
                    websites in my hometown of
                    Heber City, Utah. <br><br>
                    I developed entirely in Bootstrap, Tailwind, jQuery, alpine.js (frontend) and PHP (backend). I
                    deployed the
                    servers on Amazon's Lightsail platform, and they run on a LEMP stack (Linux, Nginx, MySql, PHP)
                    <br><br>
                    Check them out!
                    <a href="{{ url('http://lakecreekirrigation.com') }}"
                        class="text-green-400 hover:underline text-xl md:text-2xl">lakecreekirrigation.com</a>
                    <a href="{{ url('http://timpanogosirrigation.com/') }}"
                        class="text-green-400 hover:underline text-xl md:text-2xl">timpanogosirrigation.com</a>
                    <a href="{{ url('http://www.danielirrigation.com/') }}"
                        class="text-green-400 hover:underline text-xl md:text-2xl">danielirrigation.com</a>
                </p>
                <img class="" src="" alt="">
            </div>
        </div>
    </div>
    <footer class="grid grid-cols-1 space-y-4 mx-auto">
        <x-sidelinks />
    </footer>
</div>
@endsection