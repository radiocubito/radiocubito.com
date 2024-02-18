@props(['title', 'description', 'icon'])

<div class="space-y-16 pt-16">
    <x-container>
        <div class="max-w-2xl">
            <div>
                <x-dynamic-component :component="$icon" class="size-7" />
            </div>
            <h2 class="mt-6 text-xl font-extrabold tracking-tight text-zinc-950">{{ $title }}</h2>
            <p class="mt-5 text-lg text-zinc-950/80">{{ $description }}</p>
        </div>
    </x-container>
    <hr class="h-px w-full border-zinc-950/10" />
</div>
