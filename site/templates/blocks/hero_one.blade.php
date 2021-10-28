<section class="bg-bone-light">
    <div class="container px-5 md:px-0 mx-auto grid grid-cols-1 md:grid-cols-2 md:gap-32 min-h-screen items-center relative space-y-5">
        <div class="w-full md:w-3/4 space-y-5 pt-20 md:pt-0 wow fadeInLeft">
            <x-heading.h1>
                {!! $page->heading()->kti() !!}
            </x-heading.h1>
            <x-text.subtitle>
                {!! $page->text()->kti() !!}
            </x-text.subtitle>
            <div class="block space-y-3 md:space-y-0 md:flex md:space-x-3">
                @if ($page->button1()->isNotEmpty())
                <x-buttons.button-red class="w-full">
                    {{ $page->button1() }} <span class="ml-2"><i class="fas fa-plus"></i></span>
                </x-buttons.button-red>   
                @endif
                @if ($page->button1()->isNotEmpty())
                <x-buttons.button-blue class="w-full">
                    {{ $page->button2() }} <span class="ml-2"><i class="fas fa-chevron-right"></i></i></span>
                </x-buttons.button-blue>
                @endif
            </div>
        </div>
        <div class="">
            <div class="wow flipInY">
                 <img src="/images/red-forms.svg" alt="">
            </div>
            <div class="wow fadeIn" data-wow-delay="0.5s">
                @if ($image = $page->imageCover()->toFile())
                    <img class="w-64 md:w-1/2 xl:w-auto left-1/2 transform -translate-x-1/2 absolute bottom-0 md:transform-none" src="{{ $image->url() }}" alt="Estudiante">
                @endif
            </div>
        </div>

    </div>
</section>