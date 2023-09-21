@csrf
<div class="space-y-4">
    <label class="flex flex-col">
        <x-text-input name="title" type="text" :placeholder="__('Title').'...'" :value="old('title', $post->title)" autofocus />
        <x-input-error :messages="$errors->get('title')" class="mt-1" />
    </label>
    <label class="flex flex-col">
        <input id="image" name="image" class="block mt-1 w-full" type="file" />
        <x-input-error :messages="$errors->get('image')" class="mt-1" />
    </label>
    <label class="flex flex-col">
        <x-select name="category_id">
            <option value="">{{ __('Select a category') }}</option>
            @foreach ($categories as $id => $category)
                <option value="{{ $id }}" @selected(old('category_id', $post->category_id) == $id)>{{ $category }}</option>
            @endforeach
        </x-select>
        <x-input-error :messages="$errors->get('category_id')" class="mt-1" />
    </label>
    <label class="flex flex-col">
        <textarea id="post-body" class="prose rounded-md border-slate-300 bg-slate-50 text-slate-600 shadow-sm placeholder:text-slate-400 focus:border-sky-600 focus:ring-sky-600 dark:border-slate-700 dark:bg-slate-950 dark:text-slate-200"
            name="body" placeholder="{{ __('Body') }}...">{{ old('body', $post->body) }}</textarea>
        <x-input-error :messages="$errors->get('body')" class="mt-1" />
    </label>
    <div class="flex items-center">
        <label for="published-toggle" class="text-slate-500 mr-3 dark:text-slate-300">{{ __('Published') }}</label>
        <input name="published" type="checkbox" id="published-toggle" @checked(old('published', $post->isPublished)) class="relative shrink-0 w-[3.25rem] h-7 bg-slate-100 checked:bg-none checked:bg-sky-500 border-2 border-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 ring-1 ring-transparent focus:border-sky-600 focus:ring-sky-600 ring-offset-white focus:outline-none appearance-none dark:bg-slate-700 dark:checked:bg-sky-600 dark:focus:ring-offset-slate-800 before:inline-block before:w-6 before:h-6 before:bg-white checked:before:bg-sky-200 before:translate-x-0 checked:before:translate-x-full before:shadow before:rounded-full before:transform before:ring-0 before:transition before:ease-in-out before:duration-200 dark:before:bg-slate-400 dark:checked:before:bg-sky-200">
    </div>
</div>

@push('scripts')
    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create( document.getElementById('post-body'))
            .catch( error => {
                console.error( error );
            } );
    </script>
@endpush
