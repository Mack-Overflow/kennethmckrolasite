<div id="navigation" x-data="{ show: false }"
    class="text-xl md:text-lg grid grid-cols-1 md:grid-cols-5 md:space-x-2 mx-auto mb-3">
    <a href="{{route('home') }}" class="font-medium text-gray-500 hover:text-green-400 block text-center">Home</a>

    <a href="{{ route('whoAmI') }}" class="font-medium text-gray-500 hover:text-green-400 block text-center w-24">Who I
        Am</a>

    <div class="text-center">
        <a x-on:click="show= !show" class="font-medium text-gray-500 hover:text-green-400 inline-flex">
            Projects
        </a>
        <div x-show="show"
            class="grid grid-cols-1 absolute mt-2 p-2 mx-auto w-48 bg-gray-800 rounded-xl shadow-xl z-20">
            <a href="{{ route('development') }}"
                class="font-medium text-gray-500 hover:text-green-400 inline-block text-center md:text-left">
                Web Development
            </a>
            {{-- <a href="{{ route('ml') }}"
            class="font-medium text-gray-500 hover:text-green-400 inline-block text-center md:text-left">
            Machine Learning
            </a>
            <a href="{{ route('cybersec') }}"
                class="font-medium text-gray-500 hover:text-green-400 inline-block text-center md:text-left">
                Cybersecurity
            </a> --}}
        </div>
    </div>

    <a href="{{ route('blog') }}" class="font-medium text-gray-500 hover:text-green-400 block text-center">Blog</a>

    {{-- <a href="{{ route('fun') }}" class="font-medium text-gray-500 hover:text-green-400 block text-center">My
    Fun</a> --}}
</div>