<?php

use App\Models\Release;
use Illuminate\View\View;

use function Laravel\Folio\render;

render(function (View $view) {
    return $view->with('releases', Release::orderBy('date', 'desc')->get());
});

?>

<x-layouts.marketing>
    <x-holi.header />
    <main class="mt-6">
        <x-container>
            <div class="pb-24 pt-12">
                <h1 class="text-[44px] font-extrabold tracking-tight">Changelog</h1>

                <div class="mt-6 space-y-8">
                    @foreach ($releases as $release)
                        <div class="rounded-lg bg-zinc-100 p-8 dark:bg-zinc-800">
                            <div>
                                <h2 class="text-2xl font-bold">{{ $release->title }}</h2>
                                <p class="text-sm text-zinc-500 dark:text-zinc-400">{{ $release->dateForHumans() }}</p>
                            </div>
                            <div class="mt-4">
                                <div class="prose prose-sm prose-zinc dark:prose-invert">{!! $release->description() !!}</div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </x-container>
    </main>

    <x-footer />
</x-layouts.marketing>
