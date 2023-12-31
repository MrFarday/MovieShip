<div class="max-w-sm rounded overflow-hidden shadow-lg">
    <a href="{{ route('film.show', $id) }}">
        <img class="w-full" src="{{ $image }}" alt="{{ $title }}">
        </a>
        <div class="px-6 py-4">
            <a href="{{ route('film.show', $id) }}" class="font-bold text-xl text-center mb-2">{{ $title }}</a>
        </div>
</div>
