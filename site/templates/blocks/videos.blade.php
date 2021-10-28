<x-assets.section class="bg-{{ $page->background() }}">
    <x-heading.h2 class="wow fadeIn">Videos</x-heading.h2>
    <x-assets.divider class="wow fadeIn"></x-assets.divider>
<div class="h-6"></div>
    <x-assets.slider>
        @foreach ($page->videoreel()->toStructure() as $item)
        <div class="grid grid-cols-1 md:grid-cols-3 items-center gap-5 md:gap-20 swiper-slide md:px-20">
            
            <div class="md:col-span-2 relative w-full wow fadeInRight video" style="padding-bottom: 56.25%">
                {!! video($item->video()) !!}
            </div>
               
            <div class="col-span-1 space-y-5 wow fadeInLeft">
                <x-heading.h2 class="text-center">
                    {{ $item->heading() }}
                </x-heading.h2>
                <x-assets.divider class="mx-auto"></x-assets.divider>
                <x-text.regular class="text-center">
                    {!! $item->description()->kti() !!}
                </x-text.regular>
            </div>
            
        </div>
        @endforeach 
    </x-assets.slider>
    
    

</x-assets.section>