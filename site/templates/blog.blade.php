@extends('layouts.default')
@section('content')
<div class="h-16"></div>

<x-assets.section class="bg-{{ $page->background() }}">
        <x-heading.h2 class="border-l-4 border-crimson pl-5">Ultimas noticias</x-heading.h2>
        <div class="grid md:grid-cols-4 grid-cols-2 gap-10 pt-5 ">
            @foreach ($articles = $page->children()->listed()->flip()->paginate(12) as $article)
            <a href="{{ $article->url() }}">
            <div>
                @if ($image = $article->cover()->toFile())
                    <img src="{{ $image->url() }}" alt="">
                @endif
                <div class="space-y-2 mt-2">
                    <x-heading.h3>{{ $article->title() }}</x-heading.h3>
                    <x-assets.divider></x-assets.divider>
                    
                    <x-text.regular class="text-sm">
                        @if ($author = $article->author()->toUser())
                        Por: {{ $author->name() }} | 
                        @endif  
                        {{ $article->published()->toDate('Y-m-d') }}
                    </x-text.regular>
                    <x-text.regular class="text-sm md:text-regular">
                        {{ $article->extract() }}
                    </x-text.regular>
                    <p class="text-crimson hover:text-red-400">Leer más</p>
                </div>
            </div>
            </a>
            @endforeach
        </div>    
</x-assets.section>

@endsection