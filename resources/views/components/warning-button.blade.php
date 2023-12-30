<a {{ $attributes->merge(['class' => 'px-2 py-1.5 rounded-md inline-flex items-center px-4 py-2 bg-yellow-500/80 border border-transparent rounded-md font-semibold text-xs text-gray-900 uppercase tracking-widest hover:bg-yellow-600/80 active:bg-yellow-700 focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:ring-offset-2 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</a>
