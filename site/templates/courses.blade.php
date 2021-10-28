@extends('layouts.default')
@section('content')

<x-assets.section class="bg-{{ $page->background() }}">
    <div class="mt-12 md:mt-24">
        <x-heading.h2 class="wow fadeIn">{{ $page->title() }}</x-heading.h2>
        <x-assets.divider class="wow fadeIn"></x-assets.divider>
        @foreach ($page->children()->listed() as $subpage)
        <div class="py-12 border-b border-anchor-light space-y-3 wow fadeInUp" data-wow-delay="{{ $loop->iteration * 250 }}ms">
            <x-heading.h2>{{ $subpage->title() }}</x-heading.h2>
            <x-text.regular>{!! $subpage->schedule()->kti() !!}</x-text.regular>
            <x-text.regular>{!! $subpage->description()->kti() !!}</x-text.regular>
            <x-heading.h2>{!! $subpage->dprice()->kti() !!}</x-heading.h2>
            <a href="{{ $subpage->link() }}">
                <x-buttons.button-red class="mt-5 mx-auto">
                Inscribirse <i class="fas fa-plus"></i></span>
                </x-buttons.button-red>
            </a>
        </div>
        @endforeach
    </div>
</x-assets.section>

@endsection