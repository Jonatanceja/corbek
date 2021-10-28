<x-assets.section class="bg-{{ $page->background() }}">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-10 md:gap-20 text-center">
        @foreach ($page->blurb()->toStructure() as $item)
            <div class="wow fadeIn space-y-3" data-wow-delay="{{ $loop->iteration * 250 }}ms">
                <div class="rounded-full bg-crimson w-16 md:w-24 h-16 md:h-24 flex content-center mx-auto">
                    @if ($image = $item->icon()->toFile()) 
                    <img class="mx-auto w-8 md:w-14" src="{{ $image->url() }}" alt="">
                    @endif
                </div>

                    <x-heading.h3 class="font-bold">
                        {!! $item->heading()->kti() !!}
                    </x-heading.h3>
                    <x-text.regular class="text-sm">
                        {!! $item->text()->kti() !!}
                    </x-text.regular>
  
            </div>
        @endforeach

    </div>
</x-assets.section>