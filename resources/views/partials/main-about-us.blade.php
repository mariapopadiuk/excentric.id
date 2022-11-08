<section id="main-about-us" class="about-us min-w-full bg-[#ff6720]">
  <div class="container mx-auto">
    <div class="flex w-full h-screen items-center antialiased">
      <div class=" text-right pr-4 w-1/2 font-black uppercase text-[104px] leading-[5.5rem] font-extrabold">
        <h2 class="text-[#490355] animate__faster animate__animated animate__fadeInDown"><?php echo get_field('title_first_line') ?></h2>
        <h2 class="text-[#490355] animate__fast animate__animated animate__fadeInDown"><?php echo get_field('title_second_line') ?></h2>
        <h2 class="stroke  text-[#ff6720] animate__slow animate__animated animate__fadeInDown"><?php echo get_field('title_third_line') ?></h2>
      </div>
      <div class="w-1/2 text-xl text-[#490355] font-extralight pt-40 tracking-wide animate__animated animate__fadeInRightBig animate__slow">
        <p class="mb-2 w-1/2">
          <!-- We are a full service agency, focused on the now, but
            always on the lookout for what’s next.<br>
            We are made of <strong class="text-white">talent</strong>, <strong class="text-white">passion</strong> and <strong class="text-white">creativity</strong>, supported
            in <strong class="text-white">market research</strong> and <strong class="text-white">technology</strong>. <br>
            We are also made of very good people. <br>
            There are somethings that IA can’t do yet. -->
          <?php echo get_field('text_about_us') ?>
        </p>
        <p class="text-white cursor-pointer">
          <a href="<?php echo site_url('/about/') ?>"><?php echo get_field('button_about_us') ?>></a>
        </p>
      </div>
    </div>
  </div>
</section>
