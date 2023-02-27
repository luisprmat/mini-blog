<x-app-layout
    title="New post"
    meta-description="Crear nuevo post"
>
    <h1>Create new post</h1>

    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        @include('posts.form-fields')
        <button type="submit">Send</button>
    </form>
</x-app-layout>
