<nav
      class="flex items-center justify-between flex-wrap p-6 fixed w-full z-50 top-0 shadow-sm"
      x-data="{ isOpen: false }"
      @keydown.escape="isOpen = false"
      :class="{ 'shadow-lg bg-bone-light' : isOpen , 'bg-bone-light' : !isOpen}">
      <!--Logo etc-->
      <div class="flex items-center">
        <a class="" href="{{ $site->url() }}"><img class="w-20 md:w-32" src="/images/logo.svg" alt="{{ $site->title() }}"></a>
      </div>

      <!--Toggle button (hidden on large screens)-->
      <button
        @click="isOpen = !isOpen"
        type="button"
        class="block lg:hidden px-2 text-crimson hover:text-crimson focus:outline-none"
        :class="{ 'transition transform-180': isOpen }">
        <svg
          class="h-6 w-6 fill-current"
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 24 24">
          <path
            x-show="isOpen"
            fill-rule="evenodd"
            clip-rule="evenodd"
            d="M18.278 16.864a1 1 0 0 1-1.414 1.414l-4.829-4.828-4.828 4.828a1 1 0 0 1-1.414-1.414l4.828-4.829-4.828-4.828a1 1 0 0 1 1.414-1.414l4.829 4.828 4.828-4.828a1 1 0 1 1 1.414 1.414l-4.828 4.829 4.828 4.828z"/>
          <path
            x-show="!isOpen"
            fill-rule="evenodd"
            d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"/>
        </svg>
      </button>

      <!--Menu-->
      <div
        class="w-full flex-grow lg:flex lg:items-center lg:w-auto"
        :class="{ 'block shadow-3xl': isOpen, 'hidden': !isOpen }"
        @click.away="isOpen = false"
        x-show.transition="true"
      >
        <ul class="pt-6 lg:pt-0 list-reset lg:flex justify-end flex-1 items-center uppercase text-center">
        @foreach ($site->children()->listed() as $subpage)
          <li class="mr-3">
            <a class="inline-block text-navy no-underline hover:text-navy-light hover:text-underline py-2 px-4" href="{{ $subpage->url() }}" @click="isOpen = false">{{ $subpage->title() }}</a>
          </li>
          @endforeach
        </ul>
      </div>
    </nav>