<div class="h-screen flex items-center absolute right-0 z-40">
    <div class="list-none text-2xl text-center px-5 hidden md:block">
    @foreach($site->redes()->toStructure() as $red)
    <a href="{{ $red->enlace() }}" target="_blank" rel="noopener"><li class="text-navy hover:text-navy-light transition transform hover:scale-110 my-3"><i class="fab {{ $red->red() }}"></i></li></a>
    @endforeach 
    </div>
</div>
<div class="h-screen flex items-end fixed left-0 bottom-0 z-40">
    <div class="list-none text-2xl text-center p-5">
        <a href="" target="_blank" rel="noopener">
            <div class="flex items-center justify-center bg-crimson hover:bg-crimson-light rounded-full text-white w-12 h-12 text-center shadow-lg transition transform hover:scale-110">
                <i class="fab fa-whatsapp"></i>
            </div>
        </a>
    </div>
</div>