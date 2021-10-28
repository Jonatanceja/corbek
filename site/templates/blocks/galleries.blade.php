@php
    $photos = $page->children()->listed()->filter(function($photo){ 
        return $photo->gallery()->isNotEmpty(); 
    });
@endphp
<x-assets.section class="bg-{{ $page->background() }}">
    <x-heading.h2 class="wow fadeIn">Fotos</x-heading.h2>
    <x-assets.divider class="wow fadeIn"></x-assets.divider>
    <div class="grid grid-cols-2 md:grid-cols-4 gap-10 pt-5">
        @forelse($photos as $photo)
        <div class="wow fadeInUp" data-wow-delay="{{ $loop->iteration * 250 }}ms">
            <a href="{{ $photo->url() }}">

                <img src="{{ $photo->gallery()->toFiles()->first()->url() }}" alt=""> 
                <x-heading.h3 class="py-2 text-center">{{ $photo->title() }}</x-heading.h3>


            </a>
        </div>

        @empty
        <div class="col-start-2 col-span-2 border border-navy-light rounded bg-gray-100 px-4 py-2 text-center">
            No hay ninguna galeria.
        </div>
        @endforelse

    </div>
</x-assets.section>


  
