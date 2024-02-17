@props(['href', 'active' => false])

<x-link
    :href="$href"
    @class([
        'block border-b-2 border-t-2 text-sm font-medium',
        'border-b-blue-400 border-t-transparent text-white' => $active,
        'border-transparent text-white/90 hover:text-white hover:border-b-white' => ! $active,
    ])
>
    {{ $slot }}
</x-link>
