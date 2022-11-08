<div id="main-home" class="page-first min-w-full min-h-full">
  <div id="logoAnim">
    <div class="content flex w-full h-screen items-center antialiased">
      <div class="titles text-center w-1/2">
        <h2 class="animate__faster animate__animated animate__fadeInDown">INTELLIGENCE.</h2>
        <h2 class="animate__fast animate__animated animate__fadeInDown">TECHNOLOGY.</h2>
        <h2 class="text-[#ff6720] animate__slow animate__animated animate__fadeInDown">CREATIVE.</h2>
        <h2 class="animate__delay-1s text-[#ff6720] animate__animated animate__fadeInDown">PEOPLE.</h2>
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
