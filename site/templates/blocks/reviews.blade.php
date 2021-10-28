<x-assets.section class="bg-{{ $page->background() }} wow fadeIn">
    <x-heading.h2 class="text-center">
        {{ $page->heading() }}
    </x-heading.h2>
    <x-assets.divider class="mx-auto"></x-assets.divider>

    <x-assets.slider>

            @foreach ($page->review()->toStructure() as $item)
            <div class="swiper-slide py-5">
                <div class="space-x-3 bg-white w-full md:w-1/2 mx-auto p-10 rounded-md shadow-lg space-y-3 h-full">
                    <div class="flex space-x-5">
                        @if ($image = $item->photo()->tofile())
                        <img class="h-14 w-14 md:h-20 md:w-20 rounded-full" src="{{ $image->url() }}" alt="">
                        @endif 
                        <div>
                            <h3 class="text-xl font-bold text-navy tracking-wide">{{ $item->name() }}</h3>
                            <x-text.regular>
                                Recomienda Corbek
                            </x-text.regular> 
                        </div>
                    </div>
                    <div class="space-y-2">
                        
                        <x-text.regular class="flex-wrap">
                            {{ $item->opinion() }}
                        </x-text.regular>    
                    </div>
                </div>

            </div>    
            @endforeach
    </x-assets.slider>
    
</x-assets.section>

