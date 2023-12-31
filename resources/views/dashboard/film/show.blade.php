<x-guest-layout>
    <div class="max-w-screen-lg mx-auto p-5 sm:p-10 md:p-16 w-full">

        {{-- Tombol Kembali --}}
        <div class="flex justify-end mb-5">
            <a href="{{ route('dashboard.films') }}"
                class="text-indigo-600 hover:text-indigo-900 transition duration-500 ease-in-out inline-flex items-center">
                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                        d="M10.707,5.293c0.391-0.391,0.391-1.023,0-1.414C10.52,3.488,10.266,3.4,10,3.4s-0.52,0.088-0.707,0.293L4.586,8H17c0.552,0,1,0.448,1,1s-0.448,1-1,1H4.586l5.121,5.121C9.488,15.488,9.52,15.6,9.52,15.8s-0.032,0.312-0.121,0.414c-0.391,0.391-1.023,0.391-1.414,0L2.293,9.707C2.105,9.52,2,9.266,2,9s0.105-0.52,0.293-0.707L9.293,1.293C9.488,1.098,9.744,1,10,1s0.512,0.098,0.707,0.293L10.707,5.293z">
                    </path>
                </svg>
                <span>Kembali</span>
            </a>
        </div>

        <div class="mb-10 rounded overflow flex flex-col mx-auto">
            <a href="#"
                class="text-xl sm:text-4xl font-semibold inline-block hover:text-indigo-600 transition duration-500 ease-in-out inline-block mb-2">{{ $film->title }}</a>

            <div class="relative">
                <a href="#">
                    <img class="w-full" src="https://source.unsplash.com/1200x800/?{{ $film->title }}" alt="Sunset in the mountains">
                </a>
                @if ($film->genres->count() > 0)
                <a href="#"
                class="hidden absolute z-10 text-xs absolute bottom-0 left-0 bg-indigo-600 px-6 m-2 py-2 text-white hover:bg-white hover:text-indigo-600 transition duration-500 ease-in-out sm:flex items-center"><span
                class="text-lg">|</span>&nbsp;&nbsp;<span>{{ $film->genres->first()->name }}</span></a>
                @endif
            </div>
            <h1 class="text-3xl font-bold mt-4">Deksripsi Anime</h1>
            <p class="text-gray-700 py-5 text-base leading-8">
                {{ $film->description }}
            </p>
            <div class="py-5 text-sm font-regular text-gray-900 flex">
                <span class="mr-3 flex flex-row items-center">
                    <svg class="text-indigo-600" fill="currentColor" height="13px" width="13px" version="1.1"
                        id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;"
                        xml:space="preserve">
                        <g>
                            <g>
                                <path d="M256,0C114.837,0,0,114.837,0,256s114.837,256,256,256s256-114.837,256-256S397.163,0,256,0z M277.333,256
                     c0,11.797-9.536,21.333-21.333,21.333h-85.333c-11.797,0-21.333-9.536-21.333-21.333s9.536-21.333,21.333-21.333h64v-128
                     c0-11.797,9.536-21.333,21.333-21.333s21.333,9.536,21.333,21.333V256z"></path>
                            </g>
                        </g>
                    </svg>
                    <span class="ml-1">{{ $film->updated_at->diffForhumans() }}</span></span>
                <a href="#" class="flex flex-row items-center hover:text-indigo-600">
                    <svg class="text-indigo-600" fill="currentColor" height="16px" aria-hidden="true" role="img"
                        focusable="false" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path fill="currentColor"
                            d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z">
                        </path>
                        <path d="M0 0h24v24H0z" fill="none"></path>
                    </svg>
                    <span class="ml-1">{{ $film->user->name }}</span></a>
            </div>
            <hr>
            <div class="px-8">
                <h1 class="text-slate-900 font-semibold mb-4 text-xl leading-6 dark:text-slate-100">Informasi Anime</h1>
                <ul class="list-disc">
                    <li class="font-medium hover:text-slate-900 dark:text-slate-400 dark:hover:text-slate-300">
                        <span class="font-bold">Judul Film : </span>
                        {{ $film->title }}
                    </li>
                    <li class="font-medium hover:text-slate-900 dark:text-slate-400 dark:hover:text-slate-300">
                        <span class="font-bold">Tahun Rilis : </span>
                        {{ $film->release_year }}
                    </li>
                    <li class="font-medium hover:text-slate-900 dark:text-slate-400 dark:hover:text-slate-300">
                        <span class="font-bold">Durasi Film : </span>
                        {{ $film->length }}
                    </li>
                    <li class="font-medium hover:text-slate-900 dark:text-slate-400 dark:hover:text-slate-300">
                        <span class="font-bold">Rating Film : </span>
                        {{ $film->rating }}
                    </li>
                    <li class="font-medium hover:text-slate-900 dark:text-slate-400 dark:hover:text-slate-300">
                        <span class="font-bold">Filml D : </span>
                        {{ $film->created_at->format('d F Y') }}
                    </li>
                </ul>
            </div>
        </div>
    </div>
</x-guest-layout>
