<x-assets.slider>
    @foreach($page->gallery()->toFiles() as $image)
    <div class="swiper-slide bg-anchor-dark bg-blend-multiply bg-cover wow fadeIn" style="background-image: url('{{ $image->url() }}')">
        <x-assets.section>  
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center">
                <div>
                    <img src="{{ $image->url() }}" alt="">
                </div>
                <div>
                    <x-heading.h2-white>
                        {{ $image->alt() }}
                    </x-heading.h2-white>
                    <x-assets.divider>
                    </x-assets.divider>
                    <x-text.white>
                        {!! $image->desc()->kti() !!}
                    </x-text.white>
                </div>
            </div> 
        </x-assets.section>
    </div>
    @endforeach
</x-assets.slider>