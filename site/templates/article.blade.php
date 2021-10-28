@extends('layouts.default')
@section('content')
<div class="z-0 relative mt-24 md:mt-12">
    @if ($image = $page->cover()->toFile()->crop(1440,500))
    <img class="w-full z-0" src="{{ $image->url() }}" alt="">
    @endif
</div>


<div class="container mx-auto bg-navy md:rounded-md p-5 md:p-10 shadow-lg md:-mt-20 z-50 relative">
    <div class="border-l-4 border-crimson pl-5 space-y-3">
        <x-heading.h2-white>{{ $page->title() }}</x-heading.h2-white>
        <div class="flex space-x-5 items-center">
            <div>
                @if ($avatar = $kirby->user('jonatanjonas@gmail.com')->avatar()->crop(50,50))
                    <img class="rounded-full" src="{{ $avatar->url() }}" alt="">                
                @endif
            </div>
            <div>
                <x-text.white class="text-sm">
                    @if ($author = $page->author()->toUser())
                    Por: {{ $author->name() }} <br>
                    @endif  
                    {{ $page->published()->toDate('Y-m-d') }}
                </x-text.white>
            </div>

        </div>
    </div>
</div>
<x-assets.section>
    <x-text.regular>{!! $page->text()->kti() !!}</x-text.regular>
</x-assets.section>
@endsection