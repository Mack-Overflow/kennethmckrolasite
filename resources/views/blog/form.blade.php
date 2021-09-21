@extends('layouts.app')

@section('title', 'Write a blog post')
@section('content')
<div class="fixed z-10 inset-0 overflow-y-auto" id="">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <div class="fixed inset-0 transition-opacity" aria-hidden="true">
            <div id="blogPage" class="absolute inset-0 bg-gray-500 opacity-50"></div>
        </div>

        <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
        <div class="inline-block align-bottom bg-white opacity-75 rounded-lg px-4 pt-5 pb-4 text-left overflow-hidden shadow-xl transform transition-all md:my-8 md:align-middle md:max-w-xl md:w-full md:p-6"
            role="dialog" aria-modal="true" aria-labelledby="modal-headline">
            <div class="flex flex-col-2">
                <a href="{{ route('blog.index') }}" class="float-left absolute">
                    <x-backarrow />
                </a>
                <h1 class="text-2xl text-center mx-auto">New Post</h1>
            </div>

            <form action="/uploadBlogPost" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mx-auto">
                    <div class="mt-1 mx-auto">
                        <label class="pb-2">Post Title</label>
                        <input type="text" name="title"
                            class="mb-4 shadow-sm p-1 focus:ring-blue-400 block w-3/4 sm:text-sm border-2 border-gray-500 border-rounded-md rounded-md"
                            placeholder="Write a title for the post here">

                        <div class="inline-flex space-x-2">
                            <label class="pb-2 inline-flex">Article or Video URL</label>
                            <x-urlicon class="inline-flex" />
                        </div>
                        <input type="text" name="url"
                            class="mb-4 shadow-sm p-1 focus:ring-blue-400 block w-3/4 sm:text-sm border-2 border-gray-500 border-rounded-md rounded-md"
                            placeholder="https://youtube.com/asdf-jkl">

                        <label class="pb-2">Post Body</label>
                        <textarea type="text" name="body" rows="5"
                            class="mb-4 shadow-sm p-1 focus:ring-blue-400 block w-3/4 sm:text-sm border-2 border-gray-500 border-rounded-md rounded-md"></textarea>
                    </div>
                    <input Value="Submit" type="submit"
                        class="rounded-lg mx-auto w-1/2 bg-blue-400 hover:bg-gray-500 hover:text-gray-200" />
                </div>
            </form>
        </div>
    </div>
    @endsection