<x-guest-layout>
    <div class="py-6 mx-auto">
        <div class="container py-6 mx-auto flex justify-center">
            <div class="px-4 mx-auto w-full">
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
                            @foreach ($films as $film)
                            <x-card>
                                <x-slot name="id">
                                    {{ $film->id }}
                                </x-slot>
                                <x-slot name="image">
                                    https://source.unsplash.com/1200x800/?{{ $film->title }}
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
    </div>
</x-guest-layout>
