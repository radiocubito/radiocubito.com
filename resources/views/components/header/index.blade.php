@props([
    'links' => [
        ['Holi', '/holi', request()->is('holi')],
    ],
])

<header class="pt-4">
    <x-container>
        <div class="rounded-lg bg-zinc-900">
            <div class="flex h-14 items-center justify-between px-5">
                <a href="/" class="flex items-center gap-2">
                    <x-logo class="size-6 text-white" />

                    <span class="font-semibold text-white">Radiocubito</span>
                </a>
                <div>
                    <nav>
                        @foreach ($links as [$label, $url, $active])
                            <x-header.nav-link :href="$url" :$active>{{ $label }}</x-header.nav-link>
                        @endforeach
                    </nav>
                </div>
            </div>
        </div>
    </x-container>
</header>
