@extends('layouts.app')

@section('title', 'Who I Am - Kenneth Mckrola')
@section('content')
<div class="bg-gradient-to-b from-gray-800 via-gray-700 to-gray-600 flex flex-col py-12">
    <x-navigation />
    <div id="whoAmI" class="">
        <div class="bg-blue-100 bg-opacity-50">
            <div class="mx-auto flex flex-col space-y-4 container pt-5">
                <h1 class="text-4xl block  text-gray-700 font-bold text-center"
                    style="font-family: 'Oswald', sans-serif;">
                    Who is Kenneth McKrola?
                </h1>
                <h2 class="text-xl font-bold text-center text-gray-900 block md:w-2/3 mx-auto">
                    I am from a small town in northern Utah. I speak English, French, and several West African dialects.
                    I love sports, weightlifting, and anything that involves the water.
                </h2>
            </div>
            <div class="space-y-10 md:space-y-20">
                <img class="my-4 w-full sm:h-2/3 sm:w-2/3 md:h-1/3 md:w-1/3 mx-auto block rounded-md border-2"
                    src="https://drive.google.com/uc?export=download&id=1ZkOrFT86diJQS5abINvH9jjmDYChvvFT" alt="">
                <img class="my-4 w-full sm:h-2/3 sm:w-2/3 md:h-1/3 md:w-1/3 mx-auto block rounded-md border-2"
                    src="{{ url('/img/mewaterfall.jpg') }}" alt="">
            </div>
            <div class="mx-auto flex flex-col space-y-4 container pt-24">
                <h2 class="text-xl font-bold text-center text-gray-900 block md:w-2/3 mx-auto">
                    I am currently studying Computer Science and I.T. at Utah Valley University.
                    CyberSec is a big deal to me, and I love programming. You can <a href="{{ route('development') }}"
                        class="text-green-400">check out my Projects
                        here!</a>
                    {{-- One of my biggest passions is working out & lifting weights... pump-labe --}}
                    <br /> <br />Lifting weights is also a huge part of my life and my favorite way to compete
                    with myself and push my own limits. It's how I gear my mind to crave personal
                    improvement.
                </h2>
            </div>
            <div>
                <video src="https://drive.google.com/uc?export=download&id=11AhGdXTn5d4me3tz24XIOrZOgbgIAWLt" controls
                    class="my-4 w-2/3 sm:h-1/3 sm:w-1/3 md:h-1/6 md:w-1/4 mx-auto block rounded-md border-2"></video>
            </div>
            <div class="mx-auto flex flex-col space-y-4 container pt-5">
                <h2 class="text-xl font-bold text-center text-gray-900 block md:w-2/3 mx-auto">
                    My friends are a big deal to me, and nobody goes bigger than us.
                </h2>
            </div>
            <div>
                <img src="" alt="">
            </div>
        </div>
    </div>
</div>
@endsection