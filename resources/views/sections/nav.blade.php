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
    <li class="flex">
      <div class="nav-title w-1/2">
        <a class="cursor-pointer uppercase flex justify-center"><span class="menu-item hover:text-[#ff6720]  text-7xl font-medium text-white">Who we are.</span></a>
      </div>
      <div class="nav-content pl-28 w-1/2 text-2xl text-white whitespace-normal absolute top-0 right-0">
        <h5 class="text-[#ff6720] text-3xl font-semibold">Who We are</h5>
        <p class="pl-6 pt-3 text-xl tracking-widest text-white">Learn more about us. What we are made of, what is our DNA. And what we can do for you.</p>
      </div>
    </li>
    <li class="flex">
      <div class="nav-title w-1/2">
        <a class="cursor-pointer uppercase flex justify-center"><span class="menu-item hover:text-[#ff6720] text-7xl font-medium text-white">Clients.</span></a>
      </div>
      <div class="nav-content w-1/2 pl-28 text-2xl text-white whitespace-normal absolute right-0 top-0">
        <h5 class="text-[#ff6720] text-3xl font-semibold">Clients</h5>
        <p class="pl-6 pt-3 text-xl tracking-widest text-white">We believe that combining intelligence and technology with creativity is the key to drive meaningful and sustainable growth to our brands.</p>
      </div>
    </li>
    <li class="flex">
      <div class="nav-title   w-1/2">
        <a class="cursor-pointer uppercase flex justify-center"><span class="menu-item hover:text-[#ff6720] text-7xl font-medium text-white">Services</span></a>
      </div>
      <div class="nav-content w-1/2 pl-28 text-2xl text-white whitespace-normal absolute right-0 top-0">
        <h5 class="text-[#ff6720] text-3xl font-semibold">Services.</h5>
        <p class="pl-6 pt-3 text-xl tracking-widest text-white">Our menu</p>
        <p class="pl-6 pt-3 text-xl tracking-widest text-white">You can always as for the Chefs’ Special for your brand.</p>
      </div>
    </li>
    <li class="flex">
      <div class="nav-title   w-1/2">
        <a class="cursor-pointer uppercase flex justify-center"><span class="menu-item hover:text-[#ff6720] text-7xl font-medium text-white">Contacts.</span></a>
      </div>
      <div class="nav-content w-1/2 pl-28 text-2xl text-white whitespace-normal absolute right-0 top-0">
        <h5 class="text-[#ff6720] text-3xl font-semibold">Contacts</h5>
        <p class="pl-6 pt-3 text-xl tracking-widest text-white">Ready to grow your business? <br>
          Our team is ready to help. Give us a call, send us an email, or fill out the form below. We’re here for you.</p>
      </div>
    </li>
  </ul>

  <div class="text-white absolute bottom-20 text-center w-full">
    <p>
      <?php echo date("Y"); ?> EXCENTRIC.ID - DIGIBLUE Group. All rights reserved.
    </p>
    <div>
      <a href="#">Terms and Condition</a>|
      <a href="#">Cookie Policy</a>|
      <a href="#">Privacy Policy</a>|
    </div>
  </div>
</div>
