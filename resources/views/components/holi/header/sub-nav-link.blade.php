@props(['href', 'active' => false])

<x-link
    :href="$href"
    @class([
        'font-medium text-sm whitespace-nowrap',
        'text-zinc-950' => $active,
        'text-zinc-950/60 hover:text-zinc-950 hover:underline' => ! $active,
    ])
>
    {{ $slot }}
</x-link>
