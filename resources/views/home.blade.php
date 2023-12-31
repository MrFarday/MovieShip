<x-guest-layout>
    <div class="py-6 mx-auto">
        <div class="container py-6 mx-auto flex justify-center">
            <div class="px-4 mx-auto">
                <div class="space-y-8">
                    <section id="rekomendasi">
                        <div class="flex justify-between mb-6">
                            <div>
                                <h2 class="text-xl font-semibold leading-6 tracking-tight">Film Terbaru</h2>
                            </div>
                            <div>
                                <x-primary-a href="/films">Semua</x-primary-a>
                            </div>
                        </div>
                        <div class="flex justify-center inline-grid grid-cols-3 gap-4">
                            @foreach ($latest as $film)
                            <x-card>
                                <x-slot name="id">
                                    {{ $film->id }}
                                </x-slot>
                                <x-slot name="image">
                                    {{ $film->thumbnail }}
                                </x-slot>
                                <x-slot name="title">
                                    {{ $film->title }}
                                </x-slot>
                            </x-card>
                            @endforeach
                        </div>
                    </section>
                </div>
            </div>
        </div>

        <div class="container py-6 mx-auto flex justify-center">
            <div class="px-4 mx-auto">
                <div class="space-y-8">
                    <section id="rekomendasi">
                        <div class="flex justify-between mb-6">
                            <div>
                                <h2 class="text-xl font-semibold leading-6 tracking-tight">Genre {{ $randGenre->first()->name }}</h2>
                            </div>
                            <div>
                                <x-primary-a href="/films">Semua</x-primary-a>
                            </div>
                        </div>
                        <div class="flex justify-center inline-grid grid-cols-3 gap-4">
                            @foreach ($randFilm as $film)
                            <x-card>
                                <x-slot name="id">
                                    {{ $film->id }}
                                </x-slot>
                                <x-slot name="image">
                                    {{ $film->thumbnail }}
                                </x-slot>
                                <x-slot name="title">
                                    {{ $film->title }}
                                </x-slot>
                            </x-card>
                            @endforeach
                        </div>
                    </section>
                    <div class="container flex justify-end">
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
