@props(['href' => null, 'variant' => 'solid', 'color' => 'zinc'])

<?php

$baseStyles = of(
    solid: 'group inline-flex items-center justify-center rounded-full py-2 px-4 text-sm leading-6 font-semibold focus:outline-none focus-visible:outline-2 focus-visible:outline-offset-2',
    outline: 'group inline-flex ring-1 items-center justify-center rounded-full py-2 px-4 text-sm focus:outline-none',
);

$variantStyles = of(
    solid: of(
        zinc: 'bg-zinc-900 text-white hover:bg-zinc-700 hover:text-zinc-100 active:bg-zinc-800 active:text-zinc-300 focus-visible:outline-zinc-900',
        blue: 'bg-blue-600 text-white hover:text-zinc-100 hover:bg-blue-500 active:bg-blue-800 active:text-blue-100 focus-visible:outline-blue-600',
        green: 'bg-green-600 text-white hover:text-zinc-100 hover:bg-green-500 active:bg-green-800 active:text-green-100 focus-visible:outline-green-600',
        white: 'bg-white text-zinc-900 hover:bg-blue-50 active:bg-blue-200 active:text-zinc-600 focus-visible:outline-white',
    ),
    outline: of(
        zinc: 'ring-zinc-200 text-zinc-700 hover:text-zinc-900 hover:ring-zinc-300 active:bg-zinc-100 active:text-zinc-600 focus-visible:outline-blue-600 focus-visible:ring-zinc-300',
        white: 'ring-zinc-700 text-white hover:ring-zinc-500 active:ring-zinc-700 active:text-zinc-400 focus-visible:outline-white',
    ),
);

?>

@if ($href)
    <x-link
        :href="$href"
        {{ $attributes->except(['class']) }}
        @class([
            $baseStyles->{$variant},
            $variantStyles->{$variant}->{$color},
            $attributes->get('class'),
        ])
    >
        {{ $slot }}
    </x-link>
@else
    <button
        {{ $attributes->except(['class']) }}
        @class([
            $baseStyles->{$variant},
            $variantStyles->{$variant}->{$color},
            $attributes->get('class'),
        ])
    >
        {{ $slot }}
    </button>
@endif
