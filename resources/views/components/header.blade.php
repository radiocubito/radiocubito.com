@props([
    'links' => [
        ['Holi', '/holi', request()->is('holi')],
    ],
])

<header class="pt-4">
    <div class="mx-auto w-full max-w-[1112px] px-5 xl:px-0">
        <div class="rounded-lg bg-zinc-950">
            <div class="flex h-14 items-center justify-between px-5">
                <a href="/" class="flex items-center gap-2">
                    <x-logo class="size-6 text-white" />

                    <span class="font-semibold text-white">Radiocubito</span>
                </a>
                <div>
                    <nav>
                        @foreach ($links as [$label, $url, $active])
                            <a
                                href="{{ $url }}"
                                @class([
                                    'block border-b-2 border-t-2 text-sm font-medium',
                                    'border-b-blue-400 border-t-transparent text-white/80' => $active,
                                    'border-transparent text-white/60 hover:text-white/80' => ! $active,
                                ])
                            >
                                {{ $label }}
                            </a>
                        @endforeach
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
