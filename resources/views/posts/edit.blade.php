<x-app-layout :title="$post->title" :meta-description="__('Edit post')">
    <div class="mx-auto mt-4 max-w-2xl">
        <div class="rounded-lg bg-white p-10 shadow-lg dark:bg-slate-900 md:p-14">
            <h1 class="text-center font-serif text-3xl font-extrabold text-sky-600 dark:text-sky-400">
                {{ __('Edit post') }}
            </h1>
            <form class="mt-10 space-y-4" action="{{ route('posts.update', $post) }}" method="POST">
                @method('PATCH')
                @include('posts.form-fields')

                <x-primary-button class="w-full">
                    {{ __('Send') }}
                </x-primary-button>
            </form>
            <div class="mt-4 flex items-center justify-between">
                <a class="text-slate-600 underline dark:text-slate-200" href="{{ route('posts.index') }}">
                    {{ __('Go back') }}
                </a>
            </div>
        </div>
    </div>
    @push('styles')
        <link href="https://unpkg.com/filepond@^4/dist/filepond.css" rel="stylesheet" />
        <link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css" rel="stylesheet" />
    @endpush

    @push('scripts')
        <script src="https://unpkg.com/filepond-plugin-file-validate-type/dist/filepond-plugin-file-validate-type.js"></script>
        <script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>
        <script src="https://unpkg.com/filepond@^4/dist/filepond.js"></script>

        <script>
            FilePond.registerPlugin(FilePondPluginImagePreview);
            FilePond.registerPlugin(FilePondPluginFileValidateType);

            const inputElement = document.getElementById('image');
        </script>

        @if ($post->image)
            <script>
                const pond = FilePond.create(inputElement, {
                    acceptedFileTypes: ['image/*'],
                    fileValidateTypeLabelExpectedTypes: "{{ __('Expects :allButLastType or :lastType', ['allButLastType' => '{allButLastType}', 'lastType' => '{lastType}']) }}",
                    labelFileProcessing: '{{ __('Uploading') }}',
                    labelFileProcessingAborted: '{{ __('Upload cancelled') }}',
                    labelFileProcessingComplete: '{{ __('Upload complete') }}',
                    labelFileTypeNotAllowed: '{{ __('File is of invalid type') }}',
                    labelIdle: '{{ __('Drag & Drop the post image or') }} <span class="filepond--label-action">{{ __('Browse') }}</span>',
                    labelTapToCancel: '{{ __('tap to cancel') }}',
                    labelTapToUndo: '{{ __('tap to undo') }}',
                    server: {
                        load: (source, load, error, progress, abort, headers) => {
                            const myRequest = new Request(source);
                            fetch(myRequest).then((res) => {
                                return res.blob();
                            })
                                .then(load);
                        },
                        process: '{{ route('upload') }}',
                        revert: '{{ route('revert') }}',
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        }
                    },
                    files: [
                        {
                            source: '{{ Storage::disk('public')->url($post->image) }}',
                            options: {
                                type: 'local',
                            },
                        }
                    ],
                });
            </script>
        @else
            <script>
                const pond = FilePond.create(inputElement, {
                    acceptedFileTypes: ['image/*'],
                    fileValidateTypeLabelExpectedTypes: "{{ __('Expects :allButLastType or :lastType', ['allButLastType' => '{allButLastType}', 'lastType' => '{lastType}']) }}",
                    labelFileProcessing: '{{ __('Uploading') }}',
                    labelFileProcessingAborted: '{{ __('Upload cancelled') }}',
                    labelFileProcessingComplete: '{{ __('Upload complete') }}',
                    labelFileTypeNotAllowed: '{{ __('File is of invalid type') }}',
                    labelIdle: '{{ __('Drag & Drop the post image or') }} <span class="filepond--label-action">{{ __('Browse') }}</span>',
                    labelTapToCancel: '{{ __('tap to cancel') }}',
                    labelTapToUndo: '{{ __('tap to undo') }}',
                    server: {
                        process: '{{ route('upload') }}',
                        revert: '{{ route('revert') }}',
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        }
                    }
                });
            </script>
        @endif
    @endpush
</x-app-layout>
