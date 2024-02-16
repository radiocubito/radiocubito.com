<header class="pt-4">
    <div class="mx-auto w-full max-w-[1112px]">
        <div class="rounded-lg bg-zinc-950">
            <div class="flex h-14 items-center justify-between px-5">
                <a href="/" class="flex items-center gap-2">
                    <x-logo class="size-6 text-white" />

                    <span class="font-semibold text-white">Radiocubito</span>
                </a>
                <div>
                    <nav>
                        <a
                            href="/holi"
                            @class([
                                'block text-sm font-medium border-b-2 border-t-2',
                                'text-white/80 border-t-transparent' => request()->is('holi'),
                                'text-white/60 hover:text-white/80 border-transparent' => ! request()->is('holi'),
                            ])
                        >
                            Holi
                        </a>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
