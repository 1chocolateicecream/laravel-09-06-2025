<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            <p>Create post</p>
        </h2>
    </x-slot>
<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
    <x-error-message :errors="$errors" />

    <form action="{{ route('posts.store') }}" method="post">
        @csrf

        <div>
            <label for="title">Title: </label>
            <input type="text" id="title" name="title" value="{{ old('title') }}">
        </div>
        <div>
            <label for="content">Content: </label>
            <textarea name="content" id="content" value="{{ old('content') }}"></textarea>
        </div>
        <div>
            <label for="image_path">Content: </label>
            <input class="form-control" type="file" id="image_path" name="image_path">
        </div>
            <br>
        <div>
            <button type="submit" value="Create">create</button>
        </div>
    </form>
    
    </div>
            </div>
        </div>
    </div>
</x-app-layout>
