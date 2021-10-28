<x-assets.section class="bg-{{ $page->background() }}">
        <div class="wow fadeIn space-y-5">
        <x-heading.h2 class="text-center">
                {!! $page->heading()->kti() !!}
        </x-heading.h2>
        <x-assets.divider class="mx-auto">
        </x-assets.divider>
        <x-text.regular class="text-center max-w-screen-md mx-auto">
                {!! $page->text()->kti() !!}
        </x-text.regular>
        </div>
</x-assets.section>