@extends('layouts.default')
@section('content')
<div class="h-16"></div>
<x-assets.section class="bg-anchor">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center">
        <div class="wow fadeInRight">
            <x-heading.h2-white>
                {{ $page->titulo() }}
            </x-heading.h2-white>
            <x-assets.divider></x-assets.divider>
            <x-text.white>
                {!! $page->texto()->kti() !!}
            </x-text.white>

        </div>
        <div class="wow fadeInLeft">
            <?php snippet('formbuilder'); ?>       
        </div>
</x-assets.section>

<div>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center">
        <div class="wow fadeInRight">
            {!! $page->mymap()->value() !!}
        </div>
        <div class="px-5 md:px-10 pb-10 wow fadeInLeft">
            <x-heading.h2 class="font-bold"><span class="text-crimson"><i class="fas fa-map-marker-alt"></i> </span>Dirección</x-heading.h2>
            <div class="mt-5 space-y-2">
                <x-text.regular>{{ $site->calle() }} No. {{ $site->numero() }}</x-text.regular>
                <x-text.regular>{{ $site->colonia() }} C.P. {{ $site->codigo() }}</x-text.regular>
                <x-text.regular>{{ $site->ciudad() }}, {{ $site->estado() }}</x-text.regular>
            </div>
        </div>
    </div>
</div>

@endsection