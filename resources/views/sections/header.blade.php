<header>
    <div class=" h-40 w-full fixed flex justify-center">

        <div class="flex align-center w-1/6 cursor-pointer">

            @include('components.svg.logo')

        </div>

        <div class="burger space-y-2 absolute hover:scale-90 duration-300 transition-all left-10 top-10 cursor-pointer">
            <div class="w-8 h-1 bg-white "></div>
            <div class="w-8 h-1 bg-white"></div>
            <div class="w-8 h-1 bg-white"></div>
        </div>
    </div>
    @include('sections.nav')

    <div class="fixed left-10 bottom-10 hover:scale-150 duration-300 transition-all cursor-pointer ">
        <a href="#" class="icon-linkedin" title="LinkedIn">
            @include('components.svg.linkedin')
        </a>
    </div>
    {{-- SIDEBAR --}}
    <div class="animate__animated animate__fadeInRightBig animate__slow slider fixed right-0 top-0 bottom-0 bg-[#FF6720] w-[120px] text-white z-10">
        <div class="line-vert w-[80px] bg-[#3d3935] h-[20px] top-0 right-0 absolute"></div>
        <div class="line-hor w-[20px] bg-[#3d3935] h-[80px] top-0 right-0 absolute"></div>

        <div class="scrollflot">
            <div class="fixed bottom-[50px] right-[40px] px-3">Scroll</div>
            <div class="loading-dots">
              <div class="loading-dots--dot"></div>
              <div class="loading-dots--dot"></div>
              <div class="loading-dots--dot"></div>
              <div class="loading-dots--dot"></div>
            </div>
        </div>
    </div>
</header>
{{-- items-end --}}
