@props([
    'links' => [
        ['Presentación', '/holi', request()->is('holi')],
        ['Actualizaciones', '/holi/actualizaciones', request()->is('holi/actualizaciones')],
    ],
])

<section>
    <x-container>
        <div class="flex h-16 items-center justify-between xl:justify-normal">
            <div class="xl:w-64">
                <a href="/holi" class="font-extrabold hover:underline">Holi</a>
            </div>
            <div class="hidden flex-1 justify-center gap-1 text-sm xl:flex">
                @foreach ($links as [$label, $url, $active])
                    <a
                        href="{{ $url }}"
                        @class([
                            'flex h-8 items-center rounded-full px-3 font-medium',
                            'bg-zinc-100 text-zinc-800' => $active,
                            'text-zinc-700 hover:bg-zinc-100 hover:text-zinc-800' => ! $active,
                        ])
                    >
                        {{ $label }}
                    </a>
                @endforeach
            </div>
            <div class="flex items-center justify-end gap-1 text-sm xl:w-64">
                <a href="https://holi.radiocubito.com/login" class="flex h-8 items-center rounded-full px-4 font-medium text-zinc-700 hover:bg-zinc-100">
                    Iniciar sesión
                </a>
                <a href="/holi/comprar" class="flex h-8 items-center rounded-full bg-green-600 px-4 font-medium text-white hover:bg-green-600/90">Comprar</a>
            </div>
        </div>
    </x-container>
</section>
