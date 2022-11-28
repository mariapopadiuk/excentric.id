<div class="openmenu duration-1000 fixed bottom-0 -translate-y-full top-0 left-0 right-0 z-20">
  <div class="flex justify-center ">
    <div class=" flex justify-center w-1/6 pt-5">
      @include('components.svg.nav-logo')
    </div>
    <div class="close-nav absolute right-10 top-10 cursor-pointer">
      @include('components.svg.close')
    </div>
    <div class="w-[80px] bg-[#ffffff] h-[20px] top-0 right-0 absolute"></div>
    <div class="w-[20px] bg-[#ffffff] h-[80px] top-0 right-0 absolute"></div>
  </div>
  <ul class="w-9/12 m-auto mt-44 relative antialiased">
  <?php
// Check rows existexists.
if( have_rows('content_nav') ):

    // Loop through rows.
    while( have_rows('content_nav') ) : the_row();

        // Load sub field value.
        $mainTitle = get_sub_field('main_title');
        $secondaryTitle = get_sub_field('content_title');
        $textNav = get_sub_field('text_nav');
        $textNavServices = get_sub_field('text_nav_services');
        // Do something...?>
        <li class="flex">
        <div class="nav-title w-1/2">
          <a class="cursor-pointer uppercase flex justify-center"><span class="menu-item hover:text-[#ff6720] text-7xl font-bold text-white"><?php echo $mainTitle ?></span></a>
        </div>
        <div class="nav-content pl-28 w-1/2 text-2xl text-white whitespace-normal absolute top-0 right-0">
          <h5 class="text-[#ff6720] text-3xl font-semibold title-font uppercase"><?php echo $secondaryTitle ?></h5>
          <p class="pl-6 pt-3 tracking-wide text-lg text-white"><?php echo $textNav ?></p>
          <p class="pl-6 pt-3 tracking-wide text-lg text-white"><?php echo $textNavServices ?></p>
        </div>
      </li>
      <?php
    // End loop.
    endwhile;
// No value.
else :
    // Do something...
endif;
?>
    <!-- <li class="flex">
      <div class="nav-title w-1/2">
        <a class="cursor-pointer uppercase flex justify-center"><span class="menu-item hover:text-[#ff6720] text-7xl font-bold text-white">Who we are.</span></a>
      </div>
      <div class="nav-content pl-28 w-1/2 text-2xl text-white whitespace-normal absolute top-0 right-0">
        <h5 class="text-[#ff6720] text-3xl font-semibold title-font uppercase">Who We are</h5>
        <p class="pl-6 pt-3 tracking-wide text-lg text-white">Learn more about us. What we are made of, what is our DNA. And what we can do for you.</p>
      </div>
    </li> -->
    <!-- <li class="flex">
      <div class="nav-title w-1/2">
        <a class="cursor-pointer uppercase flex justify-center"><span class="menu-item hover:text-[#ff6720] text-7xl font-bold text-white">Clients.</span></a>
      </div>
      <div class="nav-content w-1/2 pl-28 text-2xl text-white whitespace-normal absolute right-0 top-0">
        <h5 class="text-[#ff6720] text-3xl font-semibold title-font">Clients</h5>
        <p class="pl-6 pt-3 tracking-wide text-lg text-white">We believe that combining intelligence and technology with creativity is the key to drive meaningful and sustainable growth to our brands.</p>
      </div>
    </li> -->
    <!-- <li class="flex">
      <div class="nav-title   w-1/2">
        <a class="cursor-pointer uppercase flex justify-center"><span class="menu-item hover:text-[#ff6720] text-7xl font-bold text-white">Services</span></a>
      </div>
      <div class="nav-content w-1/2 pl-28 text-2xl text-white whitespace-normal absolute right-0 top-0">
        <h5 class="text-[#ff6720] text-3xl font-semibold title-font">Services.</h5>
        <p class="pl-6 pt-3 tracking-wide text-lg text-white">Our menu</p>
        <p class="pl-6 pt-3 tracking-wide text-lg text-white">You can always as for the Chefs’ Special for your brand.</p>
      </div>
    </li> -->
    <!-- <li class="flex">
      <div class="nav-title   w-1/2">
        <a class="cursor-pointer uppercase flex justify-center"><span class="menu-item hover:text-[#ff6720] text-7xl font-bold text-white">Contacts.</span></a>
      </div>
      <div class="nav-content w-1/2 pl-28 text-2xl text-white whitespace-normal absolute right-0 top-0">
        <h5 class="text-[#ff6720] text-3xl font-semibold title-font">Contacts</h5>
        <p class="pl-6 pt-3 tracking-wide text-lg text-white">Ready to grow your business? <br>
          Our team is ready to help. Give us a call, send us an email, or fill out the form below. We’re here for you.</p>
      </div>
    </li> -->
  </ul>
  <div class="text-white absolute bottom-20 text-center w-full ">
    <p class="font-extralight">
      <?php echo date("Y"); ?> EXCENTRIC.ID - DIGIBLUE Group. All rights reserved.
    </p>
    <div>
      <a class="font-semibold text-[13px]" href="#">Terms and Condition</a> |
      <a class="font-semibold text-[13px]" href="#">Cookie Policy</a> |
      <a class="font-semibold text-[13px]" href="#">Privacy Policy</a>
    </div>
  </div>
</div>
