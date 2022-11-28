<div id="main-home" class="page-first min-w-full min-h-full">
  <div id="logoAnim">
    <div class="content flex w-full h-screen items-center antialiased">
      <div class="titles wrap pl-[30px] w-1/2">
<div class="content-home">
        <h2 class="title-font animate__fast animate__animated animate__fadeInDown"><?php echo get_field('first_line_title') ?></h2>
        <h2 class="title-font animate__delay-1s animate__animated animate__fadeInDown"><?php echo get_field('second_line_title') ?></h2>
        <h2 class="title-font text-[#ff6720] animate__delay-15s animate__animated animate__fadeInDown"><?php echo get_field('third_line_title') ?></h2>
        <h2 class="title-font animate__delay-2s text-[#ff6720] animate__animated animate__fadeInDown"><?php echo get_field('fouth_line_title') ?></h2>
        </div>

</div>
      <div class="w-1/2">
      <img id="logo" data-mouse-force="60" src="../../images/X_blue.png" style="display: none;">
      <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/23500/nextparticle-documentation.js"></script>
      <script src="https://nextparticle.nextco.de/nextparticle.min.js"></script>
      <script>
            nextParticle = new NextParticle({
          image: document.all.logo,
          addTimestamp: false,
          width: window.innerWidth,
          height: window.innerHeight,
          initPosition: 'none',
          initDirection: 'none',
        });
        setTimeout(() => nextParticle.stop(), 100)
      </script>
      </div>
    </div>
  </div>
</div>
