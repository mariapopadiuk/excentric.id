<div class="flex h-[150vh] overflow-hidden">
  <div class="min-w-[100vw] h-screen about-page duration-300 transition-all about-page-gradient fixed z-10">
    <div class="container mx-auto">

      <div class="flex w-full items-center h-screen antialiased">

        <div class="text-white w-1/4">
          <h2 class="w-1/2 font-semibold text-7xl uppercase mt-9 drop-shadow-xl">
            our
          </h2>
          <div class="w-1/2 h-24 ml-20">
            @include('components.svg.id')

          </div>
          <p
            class="z-20 font-extralight text-lg tracking-wide text-white absolute bottom-[80px] left-36 cursor-pointer hover:scale-125 duration-300 transition-all">
            <a href="<?php echo site_url('#main-about-us'); ?>"><span class="font-bold"><</span> Back to Who we are</a>
          </p>
        </div>

        @include('partials.first-page-about-us')
        @include('partials.second-page-about-us')
        @include('partials.third-page-about-us')

      </div>
    </div>
    </div>

</div>
