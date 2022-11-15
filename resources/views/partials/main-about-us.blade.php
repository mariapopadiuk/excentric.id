<section id="main-about-us" class="about-us min-w-full bg-[#ff6720]">
  <div class="container mx-auto">
    <div class="flex w-full h-screen items-center antialiased">
      <div class=" text-right pr-4 w-1/2 font-black uppercase text-[104px] leading-[5.5rem] font-extrabold ">
        <h2 class="about-us-content title-font text-[#490355] animate__faster animate__animated opacity-0"><?php echo get_field('title_first_line') ?></h2>
        <h2 class="about-us-content title-font text-[#490355] animate__delay-1s animate__animated opacity-0"><?php echo get_field('title_second_line') ?></h2>
        <h2 class="about-us-content title-font stroke text-[#ff6720] animate__delay-15s animate__animated opacity-0"><?php echo get_field('title_third_line') ?></h2>
      </div>
      <div class="w-1/2 text-lg text-[#490355] font-light pt-40 tracking-wide animate__animated animate__fadeInRightBig animate__delay-4s">
        <p class="about-us-content mb-2 w-1/2">
          <?php echo get_field('text_about_us') ?>
        </p>
        <p class="text-white cursor-pointer">
          <a href="<?php echo site_url('/about/') ?>"><?php echo get_field('button_about_us') ?>></a>
        </p>
      </div>
    </div>
  </div>
</section>
