@extends('layouts.default')
@section('content')
<div class="h-16"></div>


<div x-data="{ imgModal : false, imgModalSrc : '', imgModalDesc : '' }">
    <template @img-modal.window="imgModal = true; imgModalSrc = $event.detail.imgModalSrc; imgModalDesc = $event.detail.imgModalDesc;" x-if="imgModal">
      <div x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform scale-90" x-transition:enter-end="opacity-100 transform scale-100" x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 transform scale-100" x-transition:leave-end="opacity-0 transform scale-90" x-on:click.away="imgModalSrc = ''" class="p-2 fixed w-full h-100 inset-0 z-50 overflow-hidden flex justify-center items-center bg-navy bg-opacity-75">
        <div @click.away="imgModal = ''" class="flex flex-col max-w-3xl max-h-full overflow-auto">
          <div class="z-50">
            <button @click="imgModal = ''" class="float-right pt-2 pr-2 outline-none focus:outline-none">
              <svg class="fill-current text-white " xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
                </path>
              </svg>
            </button>
          </div>
          <div class="p-2">
            <img :alt="imgModalSrc" class="object-contain h-1/2-screen" :src="imgModalSrc">
            <p x-text="imgModalDesc" class="text-center text-white"></p>
          </div>
        </div>
      </div>
    </template>
  </div>
  
  <div x-data="{}" class="px-2">

        <x-assets.section class="bg-{{ $page->background() }}">
            <x-heading.h2 class="wow fadeIn">{{ $page->title() }}</x-heading.h2>
            <x-assets.divider class="wow fadeIn"></x-assets.divider>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-5 md:gap-10 pt-5">
        
                @foreach ($page->gallery()->toFiles() as $photo)
                
                    
                        <a @click="$dispatch('img-modal', {  imgModalSrc: '{{ $photo->url() }}', imgModalDesc: '{{ $photo->desc() }}' })" class="glightbox-demo wow fadeIn cursor-pointer" data-wow-delay="{{ $loop->iteration * 250 }}ms">
                            <img class="object-fit w-full" src="{{ $photo->url() }}" alt="">
                        </a>
                   
                    
                @endforeach
        
        
            </div>
        </x-assets.section>

    </div>
  


@endsection
