<x-app-layout :title="__('About')" meta-description="About meta description">
    <div class="mx-auto mt-4 max-w-6xl">
        <div class="mx-auto max-w-4xl rounded-lg bg-white p-10 shadow-lg dark:bg-slate-900 md:p-14">
            <h1 class="text-center font-serif text-3xl font-extrabold text-sky-700 dark:text-sky-500">
                {{ __('About') }}
            </h1>
            <div class="mt-10 space-y-4 text-slate-500 dark:text-slate-400">
                <p>
                    Somos una organización de desarrolladores de software, amantes de la tecnología y las comunicaciones que nos gusta compartir nuestros conocimientos tanto en educación como en tecnología y ramas afines a toda la comunidad <b>tech</b>.
                </p>
                <p>
                    Nos gusta desarrollar aplicaciones web y móvil usando las últimas tecnologías y avances de cada lenguaje de programación y sus respectivos frameworks.
                </p>
                <p>
                    Nuestras herramientas favoritas para desarrollar aplicaciones web son:
                </p>
                <ul class="list-disc">
                    <li class="ml-4"><i>Lenguaje de backend:</i> <x-link href="https://www.php.net/">PHP</x-link></li>
                    <li class="ml-4"><i>Framework backend:</i> <x-link href="https://laravel.com/">Laravel</x-link></li>
                    <li class="ml-4"><i>Frontend rendering:</i> <x-link href="https://laravel.com/docs/10.x/blade/">Laravel Blade</x-link> or <x-link href="https://vuejs.org/">Vue.js</x-link></li>
                    <li class="ml-4"><i>Framework CSS:</i> <x-link href="https://tailwindcss.com/">Tailwind CSS</x-link></li>
                </ul>
                <p>
                    Nos gusta publicar en español tutoriales de nuevas actualizaciones de las nuevas versiones de estas herramientas y <x-link href="{{ route('posts.index') }}">publicaciones</x-link> de sus novedades.
                </p>
            </div>
        </div>
    </div>
</x-app-layout>
