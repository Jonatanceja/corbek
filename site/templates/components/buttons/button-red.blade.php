<button {!! $attributes->merge(['class' => 'transition ease-in-out duration-500 bg-crimson hover:bg-crimson-dark transform hover:scale-105 text-white px-6 py-3 rounded-md uppercase font-bold tracking-wider']) !!}>
    {{ $slot }}
</button>