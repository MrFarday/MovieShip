<x-app-layout>
    <div class="container mx-auto">
        <div class="flex justify-between my-6">
            <div>
                <h2 class="text-xl font-semibold leading-6 tracking-tight">Daftar Film</h2>
            </div>
            <div>
                <x-primary-a href="{{ route('dashboard.film.create') }}">Tambah Film</x-primary-a>
            </div>
        </div>
        <table class="min-w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="hidden px-16 py-3 md:table-cell">
                        <span class="sr-only">Image</span>
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Judul Film
                    </th>
                    <th scope="col" class="hidden px-6 py-3 md:table-cell">
                        Uploader
                    </th>
                    <th scope="col" class="hidden px-6 py-3 md:table-cell">
                        Rating
                    </th>
                    <th scope="col" class="hidden px-6 py-3 md:table-cell">
                        Terakhir diubah
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <span class="sr-only">Aksi</span>
                    </th>
                </tr>
            </thead>
            <tbody>

                @foreach ($films as $film)
                    <tr
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <th class="hidden p-4 md:table-cell">
                            <img src="{{ substr($film->thumbnail, 0, 4) === 'http' ? $film->thumbnail : asset('storage/' . $film->thumbnail) }}"
                                class="w-16 max-w-full max-h-full rounded-lg md:w-32" alt="image">
                        </th>
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-800 whitespace-nowrap dark:text-gray-200">
                            {{ $film->title }}
                        </th>
                        <td class="hidden px-6 py-4 md:table-cell">
                            {{ $film->user->name }}
                        </td>
                        <td class="hidden px-6 py-4 md:table-cell">
                            {{ $film->rating }}
                        </td>
                        <td class="hidden px-6 py-4 md:table-cell">
                            {{ $film->updated_at->diffForHumans() }}
                        </td>

                        <td class="px-6 py-4 text-right">
                            <x-dropdown align="right" width="48">
                                <x-slot name="trigger">
                                    <x-sky-button>
                                        <div>Detail</div>
                                        <div class="ms-1">
                                            <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 20 20">
                                                <path fill-rule="evenodd"
                                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                    </x-sky-button>
                                </x-slot>
                                <x-slot name="content" class="z-50">
                                    <x-dropdown-link :href="route('dashboard.film.show', $film->id)">
                                        {{ __('Lihat') }}
                                    </x-dropdown-link>
                                    <x-dropdown-link :href="route('dashboard.film.edit', $film->id)">
                                        {{ __('Ubah') }}
                                    </x-dropdown-link>
                                    <x-dropdown-link x-data=""
                                        x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')">{{ __('Hapus') }}
                                    </x-dropdown-link>
                                    {{-- </form> --}}
                                </x-slot>
                            </x-dropdown>
                        </td>
                    </tr>
                @endforeach
                <x-modal name="confirm-user-deletion" focusable>
                    <form method="post" action="{{ route('dashboard.film.destroy', $film->id) }} class="p-6">
                        @csrf
                        @method('delete')
                        <div class="container p-6">
                            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                                {{ __('Apakah kamu yakin ingin menghapus film ini?') }}
                            </h2>
                            <div class="flex justify-end mt-6">
                                <x-secondary-button x-on:click="$dispatch('close')">
                                    {{ __('Batal') }}
                                </x-secondary-button>
                                <x-danger-button class="ms-3">
                                    {{ __('Hapus Film') }}
                                </x-danger-button>
                            </div>
                        </div>
                    </form>
                </x-modal>
            </tbody>
        </table>
    </div>
</x-app-layout>
