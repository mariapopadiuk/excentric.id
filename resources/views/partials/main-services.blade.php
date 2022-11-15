<section id="main-services" class="min-w-full min-h-full h-screen bg-[#25B289]">
  <div class="container h-full mx-auto flex items-center antialiased">
    <div class="w-full flex justify-center pl-40 pr-20 pt-40">

      <?php
      $classes = ['animate__faster', 'animate__fast', 'animate__slow', 'animate__slower'];
      $inedx = 0;
      // Check rows existexists.
      if (have_rows('blocks')) :
        // Loop through rows.
        while (have_rows('blocks')) : the_row();
          // Load sub field value.
          $titleTop = get_sub_field('title_1-2');
          $titleDown = get_sub_field('title_2-2');
          $textBlock = get_sub_field('content_block');
      ?>
          <!-- Do something... -->
          <div class=" w-1/4 text-left <?php echo $classes[$inedx]; ?> animate__animated animate__fadeInLeftBig">
            <h2 class="title-font text-white text-2xl -m-3 uppercase font-bold tracking-wider"><?php echo $titleTop ?></h2>
            <h2 class="title-font text-[#082081] -m-3 text-[24px] uppercase font-bold tracking-wider"><?php echo $titleDown ?></h2>
            <div class="text-white text-base font-normal mt-5 -m-3 tracking-wide">
              <?php echo $textBlock ?>
            </div>
            <?php if ($inedx == 2) : ?>
            <div class="w-full text-left animate__fadeInUp -mt-7 -m-3">
              <div>
                <h1 class="titleServices title-font text-[#082081] text-[104px] font-bold animate__delay-1s uppercase animate__slow animate__animated "><?php echo get_field('title_services') ?><span class="text-white">.</span></h1>
              </div>
              <div class="textServices tracking-wide text-white text-[15px] font-normal animate__delay-2s animate__animated">
                <p><?php echo get_field('text_services') ?></p>
                <a href="#main-contacts" class="text-base cursor-pointer text-[#082081]">
                  <p class="mt-3"><?php echo get_field('button_services') ?></p>
                </a>
              </div>
            </div>
      <?php
          endif; ?>
          </div>
          <!-- // End loop. -->

          <?php
          $inedx++;
        endwhile;
      // No value.
      else :
      // Do something...
      endif;
      ?>




      <!-- <div class="w-1/4 text-left animate__faster animate__animated animate__fadeInLeftBig" >
        <h2 class="title-font text-white text-2xl -m-3 uppercase font-bold tracking-wider">INTELLIGENCE</h2>
        <h2 class="title-font text-[#082081] -m-3 text-2xl uppercase font-bold tracking-wider">& STRATEGY</h2>
        <div class="text-white text-base font-normal mt-5 -m-3 tracking-wide">
          <p>>brand and business <br>
             >strategy and consultancy<br>
             >branding & identity<br>
             >content strategy<br>
             >creative strategy<br>
             >multiplatform communication<br>
             plans<br>
             >research and market<br>
             studies*<br>
             >media strategy*<br>
             >pr strategy*<br>
          </p>
        </div>
      </div> -->

      <!-- <div class="w-1/4 text-left animate__fast animate__animated animate__fadeInLeftBig">
        <h2 class="title-font title-font text-white text-2xl -m-3 uppercase font-bold tracking-wider">ACTIVATIONS</h2>
        <h2 class="title-font title-font text-[#082081] text-[24px] -m-3 uppercase font-bold tracking-wider">& STORYTELLING</h2>
        <div class="text-white text-base font-normal mt-5 -m-3 tracking-wide">
          <p>>crm<br>
          >customer care<br>
          >branding & identity<br>
          >loyalty/rewards programs<br>
          >events & stands<br>
          >guerilla marketing<br>
          >offline interactive experiences<br>
          >shopper experience<br>
          >e-commerce experience<br>
          >VR | AR
          </p>
        </div>
      </div> -->

      <!-- <div class="w-1/4 text-left animate__slow animate__animated animate__fadeInLeftBig">
        <h2 class="title-font text-white text-2xl -m-3 uppercase font-bold tracking-wider">CREATION</h2>
        <h2 class="title-font text-[#082081] text-[24px] -m-3 uppercase font-bold tracking-wider">& EXPERIENCES</h2>
        <div class="text-white text-base font-normal mt-5 -m-3 tracking-wide">
          <p>>campaigns | storytelling<br>
            >design | web design<br>
            >video | film*<br>
            >audio | spots | podcasts<br>
            >websites | social media<br>
            >apps<br>
            >websites | social media<br>
            >products, product extensions <br>
            packaging<br>
          </p>
        </div>
        <div class="w-full text-left animate__fadeInUp -mt-7 -m-3">
          <div>
            <h1 class="title-font text-[#082081] text-[104px] font-bold animate__delay-1s uppercase animate__slow animate__animated animate__fadeInUp"><?php echo get_field('title_services') ?><span class="text-white">.</span></h1>
          </div>
          <div class="tracking-wide text-white text-[15px] font-normal animate__delay-2s animate__animated animate__fadeInUp">
            <p><?php echo get_field('text_services') ?></p>
            <a href="#main-contacts" class="text-base cursor-pointer text-[#082081]">
              <p class="mt-3"><?php echo get_field('button_services') ?></p>
            </a>
          </div>
        </div>
      </div>
      <div class="w-1/4 text-left animate__slower animate__animated animate__fadeInLeftBig">
        <h2 class="title-font text-white text-2xl -m-3 uppercase font-bold tracking-wider">PRODUCTION</h2>
        <h2 class="title-font text-[#082081] -m-3 text-[24px] uppercase font-bold tracking-wider">& DELIVERY</h2>
        <div class="text-white text-base font-normal mt-5 -m-3 tracking-wide">
          <p>>digital development<br>
            >tech solutions<br>
            >production<br>
          </p>
        </div>
      </div> -->
    </div>
  </div>
</section>
