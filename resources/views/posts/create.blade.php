<x-app-layout
    title="New post"
    meta-description="Crear nuevo post"
>
    <h1>Create new post</h1>

    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <label>
            Title <br>
            <input name="title" type="text" value="{{ old('title') }}">
            @error('title')
                <br>
                <small style="color: red">{{ $message }}</small>
            @enderror
        </label><br>
        <label>
            Body <br>
            <textarea name="body">{{ old('body') }}</textarea>
            @error('body')
                <br>
                <small style="color: red">{{ $message }}</small>
            @enderror
        </label> <br>
        <button type="submit">Send</button>
    </form>
</x-app-layout>
