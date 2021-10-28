<x-assets.section class="bg-{{ $page->background() }}">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-10 md:gap-20 items-center h-auto">
        <div class="relative">
            <div class="wow flipInY">
                <img src="/images/blue-forms.svg" alt="">
           </div>
           <div class="wow fadeIn" data-wow-delay="0.2s">
               @if ($image = $page->imageLeft()->toFile())
                   <img class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2" src="{{ $image->url() }}" alt="Estudiante">
               @endif
           </div>
        </div>
        <div class="space-y-5 wow fadeInLeft" data-wow-delay="0.5s">
            <x-heading.h2>
                {!! $page->heading()->kti() !!}
            </x-heading.h2>
            <x-assets.divider></x-assets.divider>
            <x-text.regular>
                {!! $page->text()->kti() !!}
            </x-text.regular>
        </div>
    </div>
</x-assets.section>