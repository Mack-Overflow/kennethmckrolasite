@extends('layouts.app')

@section('title', 'Blog')
@section('content')
<div class="bg-gradient-to-b from-gray-800 via-gray-700 to-gray-600 flex flex-col py-12">
    <x-navigation />
    <div id="blogPage" class="min-h-screen">
        <div class="bg-gray-100 bg-opacity-50 h-full">
            <h1 class="text-5xl text-center text-gray-700 py-5" style="font-family: 'Oswald', sans-serif;">
                What I'm learning about</h1>
            <div id="blogBody" class="container mx-auto">
                {{-- @if() @endif--}}
                <div id="addPost" class="text-center mx-auto p-3 border-2 border-gray-500 w-96">
                    Add Post
                    <a href="{{ route('addBlogPost') }}" class="mx-auto flex">
                        <x-plusicon />
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection