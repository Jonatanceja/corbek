<x-assets.section class="bg-{{ $page->background() }}">
    <?php
        $related = $page->featuredPages()->toPages();
        if ($related->count() > 0):
        ?>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-10 md:gap-20 -mt-12 md:-mt-24">
        @foreach($related as $curso)
        <div class="group bg-gradient-to-t from-bone to-bone-light hover:from-navy-dark hover:to-navy shadow-md rounded-md px-5 py-10 h-full transition ease-in-out duration-500 transform hover:-translate-y-1 hover:scale-110 space-y-3 wow fadeInUp" data-wow-delay="{{ $loop->iteration * 250 }}ms">
            <x-heading.h2 class="text-center group-hover:text-white">
                {!! $curso->title()->kti() !!}
            </x-heading.h2>
            <x-text.regular class="text-center group-hover:text-white h-36">
                {!! $curso->schedule()->kti() !!}
            </x-text.regular>
            <h3 class="text-center text-navy group-hover:text-white text-4xl font-bold">
                $ {!! $curso->price()->kti() !!} <span class="text-sm">MXN</span>
            </h3>
            <div class="flex justify-center">
                <a href="{{ $curso->link() }}">
                    <x-buttons.button-red class="mt-5 mx-auto">
                    Inscribirse <i class="fas fa-plus"></i></span>
                    </x-buttons.button-red>
                </a>
            </div>
        </div>
        @endforeach
    </div>
    <?php endif ?> 
</x-assets.section>