<section id="main-contacts" class="min-w-full min-h-full h-screen bg-[#082081]">
  <div class="container max-w-[1240px] h-full mx-auto flex items-center antialiased">
    <div class="w-1/2">
      <div class="mb-[155px]">
        <!-- <?php echo get_field('title_contacts_1') ?>
      <?php echo get_field('subtitle_on_top') ?> -->
        <h1 class="title-font text-white text-[104px] font-bold uppercase ">Hello<span class="text-[#FF6720]">.</span></h1>
        <p class="text-white text-base font-normal -mt-7">Fancy a coffee with us yet? Just drop us a line, or call, ...</p>
      </div>
      <div class="z-10">


        <div class="relative z-10">
          <div class="absolute top-1/2 transform -translate-y-1/2 w-full -z-10">
            <div class="bg-[#FFF] pl-20 py-12  flex justify-end items-center rounded-full text-center animate__faster animate__animated animate__fadeInLeftBig">
              <div class="w-1/2 text-left text-base font-normal ">
                <!-- <?php echo get_field('street_zipcode_number') ?> -->
                <p class="mb-2">Avenida Almirante<br>
                  Gago Coutinho nº 128,<br>
                  1700-033 Lisboa
                </p>
                <p class="mb-2"><span class="text-[#FF6720]">T</span> +351 211 626 148</p>
                <p class="text-[#FF6720] relative">
                  <a href="#" class="uppercase font-medium">GETTING HERE</a>
                <div class="text-sm font-medium text-[#FF6720] -mt-2"><a href="#">Google Maps</a></div>
                <img class="top-[150px] right-[50px] absolute" src="../../images/Vector-icon.png">
                </p>
              </div>
            </div>
          </div>

          <div class="w-[340px]">
            @include('components.svg.map')
          </div>
        </div>
      </div>
    </div>
    <div class="w-1/2 pl-10 pt-[110px]">
      <div class="w-3/4">
        <?php echo do_shortcode('[contact-form-7 id="20" title="Contact"]') ?>
      </div>
      <div>
        <!-- <?php echo get_field('title_contacts_2') ?> -->
        <h1 class="title-font text-[#FF6720] text-[104px] font-bold uppercase ">Contacts<span class="text-white text-[104px]">.</span></h1>
      </div>
    </div>
  </div>
</section>
