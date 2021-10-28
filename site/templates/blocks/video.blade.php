<x-assets.section class="bg-{{ $page->background() }}">
    <div class="grid grid-cols-1 md:grid-cols-3 items-center gap-10 md:gap-20">
        <div class="md:col-span-2 relative w-full wow fadeInRight video" style="padding-bottom: 56.25%">
            {!! video($page->video()) !!}
        </div>
        <div class="col-span-1 space-y-5 wow fadeInLeft">
            <x-heading.h2 class="text-center">
                {{ $page->heading() }}
            </x-heading.h2>
            <x-assets.divider class="mx-auto"></x-assets.divider>
            <x-text.regular class="text-center">
                {!! $page->text()->kti() !!}
            </x-text.regular>
            <div class="flex justify-center">
                <a href="{{ $page->link() }}">
                    <x-buttons.button-red>
                        {{ $page->button() }} <span class="ml-2"><i class="fas fa-plus"></i></span>
                    </x-buttons.button-red>
                </a>
            </div>
        </div>

    </div>

</x-assets.section>