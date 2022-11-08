import { domReady } from '@roots/sage/client';
import Kinet from 'kinet'
import "./scroll"

require('./horizontal-scroll')

/**
 * app.main
 */
const main = async (err) => {
  if (err) {
    // handle hmr errors
    console.error(err);
  }

  // application code

  // CHANGE COLOR LOGO



  //Nav
  const opennav = document.querySelector(".openmenu");
  const closeNav = document.querySelector(".close-nav");
  const burger = document.querySelector(".burger");
  burger.addEventListener('click', () => hideElement(opennav));
  closeNav.addEventListener('click', () => hideElement(opennav));

  function hideElement(showEl) {
    showEl.classList.toggle("-translate-y-full");
  }
  // END Nav

  // //CHEKEDBOX
  // const boxContact = document.querySelector(".first input");
  // const boxCareers = document.querySelector(".last input");
  // const fileInput = document.querySelector(".wpcf7-file");
  // const fileInputParent = document.querySelector('span[data-name="file-717"]');
  // fileInputParent.innerHTML = '';
  //
  // boxContact.addEventListener('click', ()=> toggleFileInput('hide'));
  // boxCareers.addEventListener('click', () => toggleFileInput('show'));
  //
  //
  // function toggleFileInput(type){
  //   if(type === 'show'){
  //     fileInputParent.append(fileInput);
  //   }else{
  //     fileInputParent.innerHTML = '';
  //   }
  // }
  //CHEKEDBOX

  //CURSOR
  // create instance of kinet with custom settings
  const kinet = new Kinet({
    acceleration: 0.1,
    friction: 0.50,
    names: ["x", "y"],
  });

  // select circle element
  const circle = document.getElementById('circle');

  // set handler on kinet tick event
  kinet.on('tick', function (instances) {
    circle.style.transform = `translate3d(${(instances.x.current)}px, ${(instances.y.current)}px, 0) rotateX(${(instances.x.velocity / 2)}deg) rotateY(${(instances.y.velocity / 2)}deg)`;
  });

  // call kinet animate method on mousemove
  document.addEventListener('mousemove', function (event) {
    kinet.animate('x', event.clientX - window.innerWidth / 2);
    kinet.animate('y', event.clientY - window.innerHeight / 2);
  });
  //END CURSOR

  // Change text on scroll
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


  // window.addEventListener('scroll', changeContent);

  // function changeContent() {
  //   if (pageYOffset > 100) {
  //     aboutPage.classList.remove('about-page-gradient');
  //     aboutPage.classList.add('about-second-page-gradient');
  //     firstTitle.classList.add('hide');
  //     firstText.classList.add('hide');
  //     secondTitle.classList.remove('hide');
  //     secondText.classList.remove('hide');

  //   }
  //   if (pageYOffset > 250) {
  //     aboutPage.classList.remove('about-second-page-gradient');
  //     aboutPage.classList.add('about-third-page-gradient');
  //     secondTitle.classList.add('hide');
  //     secondText.classList.add('hide');
  //     thirdTitle.classList.remove('hide');
  //     thirdText.classList.remove('hide');

  //   }
  //   if (pageYOffset < 100) {
  //     aboutPage.classList.remove('about-second-page-gradient');
  //     aboutPage.classList.add('about-page-gradient');
  //     secondTitle.classList.add('hide');
  //     secondText.classList.add('hide');
  //     firstTitle.classList.remove('hide');
  //     firstText.classList.remove('hide');
  //   }
  //   if (pageYOffset < 250 && pageYOffset > 100) {
  //     thirdTitle.classList.add('hide');
  //     thirdText.classList.add('hide');
  //     aboutPage.classList.add('about-second-page-gradient');
  //     aboutPage.classList.remove('about-third-page-gradient');
  //     secondTitle.classList.remove('hide');
  //     secondText.classList.remove('hide');
  //   }
  // }
};
//END Change text on scroll

/**
 * Initialize
 *
 * @see https://webpack.js.org/api/hot-module-replacement
 */
domReady(main);
import.meta.webpackHot?.accept(main);
