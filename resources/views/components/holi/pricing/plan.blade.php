@props(['name', 'price', 'description', 'href', 'features', 'featured' => false])

<section
    @class([
        'flex flex-col rounded-3xl px-6 py-8 sm:px-8',
        'order-first bg-blue-600 lg:order-none lg:col-span-3' => $featured,
        'border lg:col-span-2' => ! $featured,
    ])
>
    <h3 @class([
        'mt-5 text-lg font-bold',
        'text-white' => $featured,
        'text-zinc-950' => ! $featured,
    ])>
        {{ $name }}
    </h3>
    <p @class([
        'mt-2 text-base',
        'text-white' => $featured,
        'text-zinc-950/80' => ! $featured,
    ])>
        {{ $description }}
    </p>
    <p
        @class([
            'order-first text-4xl font-extrabold tracking-tight',
            'text-white' => $featured,
            'text-zinc-950' => ! $featured,
        ])
    >
        {{ $price }}
        <span class="text-base font-medium">MXN</span>
    </p>
    <ul
        role="list"
        @class([
            'order-last mt-10 flex flex-col gap-y-3 text-sm',
            'text-white' => $featured,
            'text-zinc-950/80' => ! $featured,
        ])
    >
        @foreach ($features as $feature)
            <li class="flex">
                <x-holi.pricing.check-icon
                    @class([
                        'text-white' => $featured,
                        'text-zinc-950/60' => ! $featured,
                    ])
                />
                <span class="ml-4">{{ $feature }}</span>
            </li>
        @endforeach
    </ul>

    <div>
        <x-button :href="$href" :color="$featured ? 'white' : 'zinc'" class="mt-8">Pruébalo gratis</x-button>
    </div>
</section>
