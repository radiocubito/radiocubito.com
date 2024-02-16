@props([
    'links' => [
        ['Presentación', '/holi', request()->is('holi')],
        ['Actualizaciones', '/holi/changelog', request()->is('holi/changelog')],
    ],
])

<section>
    <div class="mx-auto w-full max-w-[1112px]">
        <div class="px-5">
            <div class="flex h-16 items-center">
                <div class="w-64">
                    <a href="/holi" class="font-extrabold hover:underline">Holi</a>
                </div>
                <div class="flex flex-1 justify-center gap-1 text-sm">
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
                <div class="flex w-64 items-center justify-end gap-1 text-sm">
                    <a href="https://holi.radiocubito.com/login" class="flex h-8 items-center rounded-full px-4 font-medium text-zinc-700 hover:bg-zinc-100">
                        Iniciar sesión
                    </a>
                    <a href="/holi/comprar" class="flex h-8 items-center rounded-full bg-purple-600 px-4 font-medium text-white hover:bg-purple-500">Comprar</a>
                </div>
            </div>
        </div>
    </div>
</section>
