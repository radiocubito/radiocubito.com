@props(['releases'])

<x-container>
    <div class="space-y-12">
        @foreach ($releases as $release)
            <x-holi.updates.release-list.item :$release />
        @endforeach
    </div>
</x-container>
