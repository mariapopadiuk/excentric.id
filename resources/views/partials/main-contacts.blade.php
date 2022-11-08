<section id="main-contacts" class="min-w-full min-h-full h-screen bg-[#082081]">
  <div class="container h-full mx-auto flex items-center antialiased">
      <div class="w-1/2 ">

        <div class="mb-20">
          <h1 class="text-white text-[104px] font-bold uppercase ">Hello<span class="text-[#FF6720]">.</span></h1>
          <p class="text-white text-lg font-normal tracking-wide -mt-7">Fancy a coffee with us yet? Just drop us a line, or
            call, ...</p>
        </div>
        <div class="xl:flex relative z-10">

          <div class="w-2/5">
            @include('components.svg.map')
          </div>

          <div
            class="bg-[#FFF] py-5 w-2/3 flex justify-end items-center rounded-full xl:absolute text-center -z-10 top-10 right-40">
            <div class="w-1/2 text-left text-lg font-normal tracking-wide">
              <p class="mb-2">Avenida Almirante<br>
                Gago Coutinho nº 128,<br>
                1700-033 Lisboa
              </p>
              <p class="mb-2"><span class="text-[#FF6720]">T</span> +351 211 626 148</p>
              <p class="text-[#FF6720] relative">
                <a href="#" class="uppercase">GETTING HERE</a><br>
                <a href="#">Google Maps</a>
                <img class="top-0 right-[50px] absolute" src="../../images/Vector-icon.png">
              </p>
            </div>
          </div>

        </div>

      </div>
      <div class="w-1/2 ">
        <div class="w-1/2">
          <?php  echo do_shortcode('[contact-form-7 id="20" title="Contact"]') ?>
        </div>
        <div>
          <h1 class="text-[#FF6720] text-[104px] font-bold uppercase ">
            Contacts<span class="text-white text-[104px]">.</span>
          </h1>
        </div>
      </div>
    </div>
</section>
