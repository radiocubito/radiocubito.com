@props([
    'links' => [
        ['Presentación', '/holi', request()->is('holi')],
        ['Actualizaciones', '/holi/updates', request()->is('holi/updates')],
        ['Github', 'http://github.com/oliverservin/holiing', false],
        ['Iniciar sesión', 'https://holi.radiocubito.com/login', false],
    ],
])

<section>
    <x-container>
        <div class="flex h-16 items-center justify-between gap-7">
            <div>
                <a href="/holi" class="font-extrabold hover:underline">Holi</a>
            </div>
            <div class="flex items-center gap-7 overflow-hidden h-full">
                <div class="gap-5 flex overflow-scroll items-center h-full">
                    @foreach ($links as [$label, $url, $active])
                        <x-holi.header.sub-nav-link :href="$url" :$active>{{ $label }}</x-holi.header.sub-nav-link>
                    @endforeach
                </div>
                <div class="flex">
                    <x-button href="/holi/pricing" color="green">Comprar</x-button>
                </div>
            </div>
        </div>
    </x-container>
</section>
