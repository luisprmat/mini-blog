<x-app-layout
    title="New post"
    meta-description="Crear nuevo post"
>
    <h1>Create new post</h1>

    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <label>
            Title <br>
            <input name="title" type="text">
        </label><br>
        <label>
            Body <br>
            <textarea name="body"></textarea>
        </label> <br>
        <button type="submit">Send</button>
    </form>
</x-app-layout>
