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
    <main>
        <x-holi.updates.page-header :$releases />
        <x-holi.updates.release-list :$releases />
    </main>

    <x-footer />
</x-layouts.marketing>
