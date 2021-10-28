<x-assets.section>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
        @foreach ($page->staff()->toStructure() as $item)
        <div class="px-10 space-y-3 wow fadeIn" data-wow-delay="{{ $loop->iteration * 250 }}ms">
            @if ($image = $item->photo()->toFile()) 
            <img class="rounded-full w-36 mx-auto" src="{{ $image->url() }}" alt="">
            @endif
            <h3 class="text-center font-bold text-2xl text-navy">
                {{ $item->name() }}
            </h3>
            <x-text.red class="text-center">
                {{ $item->position() }}
            </x-text.red>
            <x-text.regular class="text-center">
                {{ $item->description() }}
            </x-text.regular>
        </div>    
        @endforeach

    </div>
</x-assets.section>