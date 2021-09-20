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
                <div id="addPost"
                    class="grid grid-cols-1 mb-4 md:mb-6 text-center mx-auto p-3 border-2 border-gray-500 w-96">
                    <h3 class="pb-2 md:pb-3 text-xl">
                        Add Post
                    </h3>
                    <a href="{{ route('addBlogPost') }}" class="mx-auto flex">
                        <x-plusicon />
                    </a>
                </div>
                <div id="postList" class="space-y-5 md:space-y-8 container mx-auto w-full min-h-screen">
                    @foreach($blogposts as $blogpost)
                    <div class="text-center grid grid-cols-1 py-3 md:py-5 border-2 border-gray-600">
                        <div class="w-3/4 mx-auto grid grid-cols-1 text-center text-3xl font-bold">
                            {{$blogpost->title}}
                            {{-- Add edit, delete buttons here with heroicons --}}
                            <a class="text-base font-normal mx-auto text-center pb-3 md:pb-5"
                                href="{{ asset($blogpost->url) }}">{{$blogpost->url}}</a>
                        </div>
                        <p class="text-lg pb-8">
                            {{$blogpost->body}}
                        </p>
                        <a class="" href="{{ route('blog.edit', $blogpost) }}">Edit</a>
                        <form method="POST" onsubmit="return confirm('Do you really wish to delete this post?')"
                            action="{{ route('blog.delete', $blogpost) }}">
                            @csrf
                            @method("delete")
                            <button title="Delete" class="">Delete
                                Post
                            </button>
                        </form>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection