@csrf
<div class="space-y-4">
    <label class="flex flex-col">
        <x-text-input name="title" type="text" :placeholder="__('Title').'...'" :value="old('title', $post->title)" autofocus />
        <x-input-error :messages="$errors->get('title')" class="mt-1" />
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
        <textarea class="rounded-md border-slate-300 bg-slate-50 text-slate-600 shadow-sm placeholder:text-slate-400 focus:border-sky-600 focus:ring-sky-600 dark:border-slate-700 dark:bg-slate-950 dark:text-slate-200"
            name="body" placeholder="{{ __('Body') }}...">{{ old('body', $post->body) }}</textarea>
        <x-input-error :messages="$errors->get('body')" class="mt-1" />
    </label>
</div>
