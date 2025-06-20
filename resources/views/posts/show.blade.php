<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            <p><a href="{{ route('posts.index') }}">Back to all posts</a></p>
        </h2>
    </x-slot><br>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
    <h1>Title: {{ $post->title }}</h1>
    <p>Content: {{ $post->content }}</p>
    </div>
            </div>
        </div>
    </div>
</x-app-layout>
