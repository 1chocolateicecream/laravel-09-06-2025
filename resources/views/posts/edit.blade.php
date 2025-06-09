<x-app-layout>
    <h1>Edit post</h1>

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
            <input type="submit" value="Update">
        </div>
    </form>
</x-app-layout>
