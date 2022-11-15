if (window.location.pathname === '/about/') {

  const aboutFirstPage = document.querySelector('.about-page-gradient');
  const aboutPage = document.querySelector('.about-page');
  const firstTitle = document.querySelector('.first-title');
  const firstText = document.querySelector('.first-text');
  const secondTitle = document.querySelector('.second-title');
  const secondText = document.querySelector('.second-text');
  const thirdTitle = document.querySelector('.third-title');
  const thirdText = document.querySelector('.third-text');

  const aboutSecondPage = document.querySelector('.about-second-page-gradient');
  const aboutThirdPage = document.querySelector('.about-third-page-gradient');


  window.addEventListener('scroll', changeContent);

  function changeContent() {
    if (pageYOffset > 100) {
      aboutPage.classList.remove('about-page-gradient');
      aboutPage.classList.add('about-second-page-gradient');
      firstTitle.classList.add('hide');
      firstText.classList.add('hide');
      secondTitle.classList.remove('hide');
      secondText.classList.remove('hide');

    }
    if (pageYOffset > 250) {
      aboutPage.classList.remove('about-second-page-gradient');
      aboutPage.classList.add('about-third-page-gradient');
      secondTitle.classList.add('hide');
      secondText.classList.add('hide');
      thirdTitle.classList.remove('hide');
      thirdText.classList.remove('hide');

    }
    if (pageYOffset < 100) {
      aboutPage.classList.remove('about-second-page-gradient');
      aboutPage.classList.add('about-page-gradient');
      secondTitle.classList.add('hide');
      secondText.classList.add('hide');
      firstTitle.classList.remove('hide');
      firstText.classList.remove('hide');
    }
    if (pageYOffset < 250 && pageYOffset > 100) {
      thirdTitle.classList.add('hide');
      thirdText.classList.add('hide');
      aboutPage.classList.add('about-second-page-gradient');
      aboutPage.classList.remove('about-third-page-gradient');
      secondTitle.classList.remove('hide');
      secondText.classList.remove('hide');
    }
  }

}
