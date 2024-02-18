@props(['title', 'description', 'image', 'icon'])

<div class="pt-16">
    <x-container>
        <div class="max-w-2xl">
            <div class="flex size-14 items-center justify-center rounded-full border-8 border-blue-50 bg-blue-100">
                <x-dynamic-component :component="$icon" class="size-6 text-blue-600" />
            </div>
            <h2 class="mt-6 text-4xl font-extrabold tracking-tight text-zinc-950">{{ $title }}</h2>
            <p class="mt-5 text-lg text-zinc-950/80">{{ $description }}</p>
        </div>
    </x-container>
    <div class="mx-auto mt-10 w-full max-w-screen-lg">
        <div class="max-h-[480px] overflow-hidden">
            <img src="{{ $image }}" class="w-full" />
        </div>
    </div>
    <hr class="h-px w-full border-zinc-950/10" />
</div>
