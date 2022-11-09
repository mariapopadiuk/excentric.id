<div class="min-w-full bg-[#490355]">
  <div class="container mx-auto">
    <div class="flex w-full h-screen items-center">
      {{--IMG--}}
      <div class="w-3/5 flex justify-center">
        <div class="w-3/4 flex flex-wrap text-right justify-center">

          <?php
          // Check rows existexists.
          if (have_rows('logos_of_clients')) :
            // Loop through rows.
            while (have_rows('logos_of_clients')) : the_row();
              // Load sub field value.
              $logos = get_sub_field('logos'); ?>
              <!-- Do something... -->
              <div class="w-1/6 mx-2 ">
                <img width="400" height="400" src="<?php echo $logos ?>" loading="lazy" sizes="(max-width: 400px) 100vw, 400px">
              </div>
              <!-- // End loop. -->
          <?php endwhile;
          // No value.
          else :
          // Do something...
          endif;
          ?>
          {{-- 1--}}
          <!-- <div class="w-1/6 mx-2 ">
            <img width="400" height="400" src="https://www.excentric.id/wp-content/uploads/2021/01/arito.png" class="attachment-large size-large" alt="" loading="lazy" srcset="https://www.excentric.id/wp-content/uploads/2021/01/arito.png 400w, https://www.excentric.id/wp-content/uploads/2021/01/arito-300x300.png 300w, https://www.excentric.id/wp-content/uploads/2021/01/arito-150x150.png 150w" sizes="(max-width: 400px) 100vw, 400px">
          </div>
          <div class="w-1/6 mx-2 ">
            <img width="400" height="400" src="https://www.excentric.id/wp-content/uploads/2022/08/astara.png" class="attachment-large size-large" alt="" loading="lazy" srcset="https://www.excentric.id/wp-content/uploads/2022/08/astara.png 400w, https://www.excentric.id/wp-content/uploads/2022/08/astara.png 300w, https://www.excentric.id/wp-content/uploads/2022/08/astara.png 150w" sizes="(max-width: 400px) 100vw, 400px">
          </div>
          <div class="w-1/6  mx-2 ">
            <img width="400" height="400" src="https://www.excentric.id/wp-content/uploads/2022/08/Bayer.png" class="attachment-large size-large" alt="" loading="lazy" srcset="https://www.excentric.id/wp-content/uploads/2022/08/Bayer.png 400w, https://www.excentric.id/wp-content/uploads/2021/01/arito-300x300.png 300w, https://www.excentric.id/wp-content/uploads/2021/01/arito-150x150.png 150w" sizes="(max-width: 400px) 100vw, 400px">
          </div>
          <div class="w-1/6 mx-2  ">
            <img width="400" height="400" src="https://www.excentric.id/wp-content/uploads/2021/01/bricomarche-1.png" class="attachment-large size-large" alt="" loading="lazy" srcset="https://www.excentric.id/wp-content/uploads/2021/01/bricomarche-1.png 400w, https://www.excentric.id/wp-content/uploads/2021/01/bricomarche-1.png 300w, https://www.excentric.id/wp-content/uploads/2021/01/bricomarche-1.png 150w" sizes="(max-width: 400px) 100vw, 400px">
          </div>
          <div class="w-1/6 mx-2  ">
            <img width="400" height="400" src="https://www.excentric.id/wp-content/uploads/2022/08/campifarma-1536x1129.png" class="attachment-large size-large" alt="" loading="lazy" srcset="https://www.excentric.id/wp-content/uploads/2022/08/campifarma-1536x1129.png 400w, https://www.excentric.id/wp-content/uploads/2022/08/campifarma-1536x1129.png 300w, https://www.excentric.id/wp-content/uploads/2022/08/campifarma-1536x1129.png 150w" sizes="(max-width: 400px) 100vw, 400px">
          </div> -->



          {{--2--}}
          <!-- <div class="w-1/6 mx-2">
            <img width="400" height="400" src="https://www.excentric.id/wp-content/uploads/2021/01/arito.png" class="attachment-large size-large" alt="" loading="lazy" srcset="https://www.excentric.id/wp-content/uploads/2021/01/guerin-1.png 400w, https://www.excentric.id/wp-content/uploads/2021/01/guerin-1.png 300w, https://www.excentric.id/wp-content/uploads/2021/01/guerin-1.png 150w" sizes="(max-width: 400px) 100vw, 400px">
          </div>
          <div class="w-1/6 mx-2">
            <img width="400" height="400" src="https://www.excentric.id/wp-content/uploads/2021/01/arito.png" class="attachment-large size-large" alt="" loading="lazy" srcset="https://www.excentric.id/wp-content/uploads/2021/01/millenium.png 400w, https://www.excentric.id/wp-content/uploads/2021/01/millenium.png 300w, https://www.excentric.id/wp-content/uploads/2021/01/millenium.pngg 150w" sizes="(max-width: 400px) 100vw, 400px">
          </div>
          <div class="w-1/6 mx-2">
            <img width="400" height="400" src="https://www.excentric.id/wp-content/uploads/2021/01/arito.png" class="attachment-large size-large" alt="" loading="lazy" srcset="https://www.excentric.id/wp-content/uploads/2021/01/seaside.png 400w, https://www.excentric.id/wp-content/uploads/2021/01/seaside.png 300w, https://www.excentric.id/wp-content/uploads/2021/01/seaside.png 150w" sizes="(max-width: 400px) 100vw, 400px">
          </div>

          <div class="w-1/6 mx-2">
            <img width="400" height="400" src="https://www.excentric.id/wp-content/uploads/2021/01/arito.png" class="attachment-large size-large" alt="" loading="lazy" srcset="	https://www.excentric.id/wp-content/uploads/2022/09/MystoryHotels.png 400w, 	https://www.excentric.id/wp-content/uploads/2022/09/MystoryHotels.png 300w, https://www.excentric.id/wp-content/uploads/2022/09/MystoryHotels.png 150w" sizes="(max-width: 400px) 100vw, 400px">
          </div>
          <div class="w-1/6 mx-2">
            <img width="400" height="400" src="https://www.excentric.id/wp-content/uploads/2021/01/arito.png" class="attachment-large size-large" alt="" loading="lazy" srcset="https://www.excentric.id/wp-content/uploads/2021/01/uni.png 400w, https://www.excentric.id/wp-content/uploads/2021/01/uni.png 300w, https://www.excentric.id/wp-content/uploads/2021/01/uni.png 150w" sizes="(max-width: 400px) 100vw, 400px">
          </div> -->


          {{--3--}}
          <!-- <div class="w-1/6 mx-2">
            <img width="400" height="400" src="https://www.excentric.id/wp-content/uploads/2021/01/arito.png" class="attachment-large size-large" alt="" loading="lazy" srcset="https://www.excentric.id/wp-content/uploads/2021/02/DECO.png 400w, https://www.excentric.id/wp-content/uploads/2021/02/DECO.png 300w, https://www.excentric.id/wp-content/uploads/2021/02/DECO.png 150w" sizes="(max-width: 400px) 100vw, 400px">
          </div>
          <div class="w-1/6 mx-2">
            <img width="400" height="400" src="https://www.excentric.id/wp-content/uploads/2021/01/arito.png" class="attachment-large size-large" alt="" loading="lazy" srcset="https://www.excentric.id/wp-content/uploads/2022/09/Lilly.png 400w, 	https://www.excentric.id/wp-content/uploads/2022/09/Lilly.png 300w, 	https://www.excentric.id/wp-content/uploads/2022/09/Lilly.png 150w" sizes="(max-width: 400px) 100vw, 400px">
          </div>
          <div class="w-1/6 mx-2">
            <img width="400" height="400" src="https://www.excentric.id/wp-content/uploads/2021/01/arito.png" class="attachment-large size-large" alt="" loading="lazy" srcset="https://www.excentric.id/wp-content/uploads/2022/09/Lilly.png  400w, 	https://www.excentric.id/wp-content/uploads/2022/09/Lilly.png  300w, 	https://www.excentric.id/wp-content/uploads/2022/09/Lilly.png  150w" sizes="(max-width: 400px) 100vw, 400px">
          </div>
          <div class="w-1/6 mx-2">
            <img width="400" height="400" src="https://www.excentric.id/wp-content/uploads/2021/01/arito.png" class="attachment-large size-large" alt="" loading="lazy" srcset="https://www.excentric.id/wp-content/uploads/2022/09/Lilly.png  400w, https://www.excentric.id/wp-content/uploads/2022/09/Lilly.png  300w, https://www.excentric.id/wp-content/uploads/2022/09/Lilly.png  150w" sizes="(max-width: 400px) 100vw, 400px">
          </div>
          <div class="w-1/6 mx-2">
            <img width="400" height="400" src="https://www.excentric.id/wp-content/uploads/2021/01/arito.png" class="attachment-large size-large" alt="" loading="lazy" srcset="https://www.excentric.id/wp-content/uploads/2022/08/A2p.png 400w, 	https://www.excentric.id/wp-content/uploads/2022/08/A2p.png 300w, 	https://www.excentric.id/wp-content/uploads/2022/08/A2p.png 150w" sizes="(max-width: 400px) 100vw, 400px">
          </div> -->
          {{--4--}}
          <!-- <div class="w-1/6 mx-2">
            <img width="400" height="400" src="https://www.excentric.id/wp-content/uploads/2021/01/arito.png" class="attachment-large size-large" alt="" loading="lazy" srcset="	https://www.excentric.id/wp-content/uploads/2022/08/BOIRON-LOGO-1.png 400w, 	https://www.excentric.id/wp-content/uploads/2022/08/BOIRON-LOGO-1.png 300w, https://www.excentric.id/wp-content/uploads/2022/08/BOIRON-LOGO-1.png 150w" sizes="(max-width: 400px) 100vw, 400px">
          </div>
          <div class="w-1/6 mx-2">
            <img width="400" height="400" src="https://www.excentric.id/wp-content/uploads/2021/01/arito.png" class="attachment-large size-large" alt="" loading="lazy" srcset="https://www.excentric.id/wp-content/uploads/2022/08/flima_white.png 400w, https://www.excentric.id/wp-content/uploads/2022/08/flima_white.png 300w, https://www.excentric.id/wp-content/uploads/2022/08/flima_white.png 150w" sizes="(max-width: 400px) 100vw, 400px">
          </div>
          <div class="w-1/6 mx-2">
            <img width="400" height="400" src="https://www.excentric.id/wp-content/uploads/2021/01/arito.png" class="attachment-large size-large" alt="" loading="lazy" srcset="https://www.excentric.id/wp-content/uploads/2021/01/hero-3.png 400w, https://www.excentric.id/wp-content/uploads/2021/01/hero-3.png 300w, https://www.excentric.id/wp-content/uploads/2021/01/hero-3.png 150w" sizes="(max-width: 400px) 100vw, 400px">
          </div>
          <div class="w-1/6 mx-2">
            <img width="400" height="400" src="https://www.excentric.id/wp-content/uploads/2021/01/arito.png" class="attachment-large size-large" alt="" loading="lazy" srcset="	https://www.excentric.id/wp-content/uploads/2022/09/Cabopol.png 400w, 	https://www.excentric.id/wp-content/uploads/2022/09/Cabopol.png 300w, 	https://www.excentric.id/wp-content/uploads/2022/09/Cabopol.png 150w" sizes="(max-width: 400px) 100vw, 400px">
          </div>
          <div class="w-1/6 mx-2">
            <img width="400" height="400" src="https://www.excentric.id/wp-content/uploads/2021/01/arito.png" class="attachment-large size-large" alt="" loading="lazy" srcset="https://www.excentric.id/wp-content/uploads/2022/09/Aspirina.png 400w, https://www.excentric.id/wp-content/uploads/2022/09/Aspirina.png 300w, https://www.excentric.id/wp-content/uploads/2022/09/Aspirina.png 150w" sizes="(max-width: 400px) 100vw, 400px">
          </div> -->
        </div>
      </div>
      {{--CONTENT--}}
      <div class="w-2/5 tracking-wide antialiased">
        <div class="w-2/4">
          <h2 class="text-[104px] text-[#25B289] font-bold uppercase mb-5 animate__slow animate__animated animate__fadeInDown"><?php echo get_field('title_client') ?></h2>
          <p class="text-[#FFF] font-extralight text-lg tracking-wide animate__animated animate__fadeInRightBig animate__slow"><?php echo get_field('text_client') ?></p>
        </div>
      </div>
    </div>
  </div>
</div>
