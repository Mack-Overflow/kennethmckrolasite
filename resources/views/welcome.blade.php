@extends('layouts.app')

@section('content')
<div class="flex flex-col justify-center min-h-screen py-12 bg-gradient-to-b from-gray-800 via-gray-700 to-gray-600">
    <x-navigation />
    <div id="outer" class="parallaxHome h-screen">
        <div id="middle" class="mx-auto my-auto bg-gray-100 bg-opacity-25 h-full px-2 lg:px-0">
            <h1 class="inner my-auto text-6xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl text-center"
                style="font-family: 'Oswald', sans-serif;">
                <div class="min-h-full mx-auto pb-4">
                    <img class="h-72 w-72 mx-auto block rounded-full object-cover"
                        src="https://drive.google.com/uc?export=download&id=1SHYGjSldQ7ZINuYQA5k1rdtjuA9dvZ_h" alt="">
                </div>
                <span class="block text-green-400 xl:inline">Kenneth</span>
                <span class="block xl:inline">McKrola</span>
            </h1>
            <h2 class="inner text-gray-100 text-center text-xl md:w-1/2">
                <span class="text-green-400 font-bold">Software engineer/developer,</span> aspiring <span
                    class="font-bold">artificial intelligence</span> engineer and <span
                    class="text-red-600 font-bold">red-team</span> security expert
            </h2>
        </div>
    </div>
    <h3 class="text-gray-300 text-center pt-2" style="font-family: 'Oswald', sans-serif;">
        <span class="text-green-400">Hosted on Raspberry Pi</span> in my college apartment
    </h3>
    <img class="w-16 mx-auto"
        src="https://download.logo.wine/logo/Raspberry_Pi/Raspberry_Pi-Logo.wine.png"
        alt="">
    <footer class="grid grid-cols-1 space-y-4 mx-auto">
        <x-sidelinks />
        {{-- <a href="" class="text-center text-lg text-gray-300 hover:text-green-400">Log In</a> --}}
    </footer>
</div>
@endsection