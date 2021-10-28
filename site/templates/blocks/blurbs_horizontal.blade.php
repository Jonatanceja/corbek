<x-assets.section class="bg-{{ $page->background() }}">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-10 md:gap-20">
        @foreach ($page->blurb()->toStructure() as $item)
            <div class="grid grid-cols-4 xl:grid-cols-5 gap-5 wow fadeIn" data-wow-delay="{{ $loop->iteration * 250 }}ms">
                <div class="col-span-1 rounded-full bg-crimson w-16 md:w-24 h-16 md:h-24 flex content-center">
                    @if ($image = $item->icon()->toFile()) 
                    <img class="mx-auto w-8 md:w-14" src="{{ $image->url() }}" alt="">
                    @endif
                </div>
                <div class="col-span-3 xl:grid-cols-4">
                    <x-heading.h3>
                        {!! $item->heading()->kti() !!}
                    </x-heading.h3>
                    <x-text.regular class="text-sm">
                        {!! $item->text()->kti() !!}
                    </x-text.regular>
                </div>
            </div>
        @endforeach

    </div>
</x-assets.section>