<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            <p>All posts</p>
        </h2>
    </x-slot><br>
        <button class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            <a href="{{ route('posts.create') }}">&nbsp; &nbsp;>>>> Create post <<<<</a>
        </button>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
    <ul>
        @foreach($posts as $post)
            <li>
                <h2>Title: {{ $post->title }}</h2>
                <p>Content: {{ $post->content }}</p>
                <div>
                    <a href="{{ route('posts.show', $post) }}">Show</a>
                    <a href="{{ route('posts.edit', $post) }}">Edit</a>
                    <form action="{{ route('posts.destroy', $post) }}" method="post">
                        @csrf
                        @method('DELETE')
                        
                        <button>Delete</button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>
    </div>
            </div>
        </div>
    </div>
</x-app-layout>
