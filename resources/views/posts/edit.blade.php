<x-app-layout
    :title="$post->title"
    meta-description="Edit form"
>
    <h1>Edit form</h1>

    <form action="{{ route('posts.update', $post) }}" method="POST">
        @method('PATCH')
        @include('posts.form-fields')
        <button type="submit">Send</button>
    </form>

    <a href="{{ route('posts.index') }}">Regresar</a>
</x-app-layout>
