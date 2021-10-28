<footer class="bg-anchor-dark py-12 md:py-24">
    <div class="container mx-auto grid grid-cols-1 md:grid-cols-4 gap-10 px-5 md:px-0">
        <div class="col-span-1 md:col-span-3 text-bone">
            <img class="mb-5" src="/images/logo-footer.svg" alt="Corbek">
            <p class="font-bold">{{ $site->nombre() }}</p>
            <p><i class="fas fa-map-marker-alt"></i> {{ $site->calle() }} No. {{ $site->numero() }}</p>
            <p>{{ $site->colonia() }}, {{ $site->ciudad() }}, {{ $site->estado() }}</p>
            <p class="hover:underline"><a href="tel:{{ $site->telefono() }}"><i class="fas fa-phone"></i> {{ $site->telefono() }}</a></p>
            <p class="hover:underline"><a href="mailto:{{ $site->mail() }}"><i class="far fa-envelope"></i> {{ $site->mail() }}</a></p>
        </div>
        <div class="col-span-1">
            @foreach ($site->children()->listed() as $subpage)
                <li class="list-none text-center md:text-right uppercase tracking-wide">
                <a class="text-bone  hover:underline hover:text-underline" href="{{ $subpage->url() }}">{{ $subpage->title() }}</a>
                </li>
          @endforeach
          <div class="flex justify-center md:justify-end text-2xl list-none space-x-5 mt-5">
            @foreach($site->redes()->toStructure() as $red)
                <a href="{{ $red->enlace() }}" target="_blank" rel="noopener"><li class="text-bone hover:text-bone-light transition transform hover:scale-110"><i class="fab {{ $red->red() }}"></i></li></a>
            @endforeach
            </div>
        </div>
    </div>
    <div class="border-t border-bone container mx-auto my-5 text-bone text-center text-sm pt-5">
        <p>Todos los derechos reservados Corbek 2021</p>
    </div>

</footer>