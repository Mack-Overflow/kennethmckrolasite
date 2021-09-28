@extends('layouts.app')

@section('title', 'What I Do For Fun')
@section('content')
<div class="bg-gradient-to-b from-gray-800 via-gray-700 to-gray-600 flex flex-col py-12">
    <x-navigation />
    <div id="myFun">
        <div class="bg-blue-100 bg-opacity-25">
            <div>
                <h2 class="text-2xl">
                    The story of my life consists of going hard or going home
                </h2>
            </div>
            <div>
                <video src=""></video>
            </div>
        </div>
    </div>
    <footer class="grid grid-cols-1 space-y-4 mx-auto">
        <x-sidelinks />
        <a href="" class="text-center text-lg text-gray-300 hover:text-green-400">Log In</a>
    </footer>
</div>