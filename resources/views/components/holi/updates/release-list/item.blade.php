@props(['release'])

<div class="rounded-lg bg-zinc-100 p-6">
    <div>
        <h2 class="text-2xl font-bold text-zinc-950">{{ $release->title }}</h2>
        <p class="text-sm text-zinc-950/60">{{ $release->dateForHumans() }}</p>
    </div>
    <div class="mt-4">
        <div class="prose prose-sm prose-zinc">{!! $release->description() !!}</div>
    </div>
</div>
