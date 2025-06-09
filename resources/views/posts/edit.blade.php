<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            <p>Edit post</p>
        </h2>
    </x-slot><br>
<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
    <x-error-message :errors="$errors" />

    <form action="{{ route('posts.update', $post) }}" method="post">
        @csrf
        @method("PUT")

        <div>
            <label for="title">Title: </label>
            <input type="text" id="title" name="title" value="{{ $post->title }}">
        </div>
        <div>
            <label for="content">Content: </label>
            <textarea name="content" id="content">{{ $post->content }}</textarea>
        </div>
        <div>
            <label for="image_path">Content: </label>
            <input class="form-control" type="file" id="image_path" name="image_path">
        </div>
        <div>
            <input type="submit" value="Update">
        </div>
    </form>
    </div>
            </div>
        </div>
    </div>
</x-app-layout>
