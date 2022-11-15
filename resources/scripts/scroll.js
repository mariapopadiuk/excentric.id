// CHANGE COLOR side bar
const bgSlider = document.querySelector('.slider');
const pageWidth = window.innerWidth;
const lineV = document.querySelector('.line-vert');
const lineH = document.querySelector('.line-hor');
const aboutUsContent = document.querySelectorAll('.about-us-content');
const titleClient = document.querySelector('.titleClient');
const textClient = document.querySelector('.textClient');
const titleServices = document.querySelector('.titleServices');
const textServices = document.querySelector('.textServices');

function changeColors(bgCol, lineVCol, lineHCol, logoPrCol, logoSecCol) {
  bgSlider.style.backgroundColor = bgCol;
  lineV.style.backgroundColor = lineVCol;
  lineH.style.backgroundColor = lineHCol;
  document.querySelectorAll('.st1').forEach(e => e.style.fill = logoPrCol);
  document.querySelectorAll('.st0').forEach(e => e.style.fill = logoSecCol);
}

window.addEventListener('scroll', () => {
  const xOffset = window.pageXOffset;
  if (xOffset > pageWidth / 2) {
    changeColors("#430057", "#FF6720", "#FF6720", '#430057', '#fff')
    aboutUsContent.forEach(e => e.classList.add('animate__fadeInDown'));
  } else {
    changeColors("#FF6720", "#3d3935", "#3d3935", '#fff', '#FF6720')
  }
  if (xOffset > pageWidth * 1.5) {
    changeColors("#27B289", "#430057", "#430057", '#FFF', '#25B289')
    titleClient.classList.add('animate__fadeInDown');
    textClient.classList.add('animate__fadeInRightBig');
  }
  if (xOffset > pageWidth * 2.5) {
    changeColors("#071F81", "#27B289", "#27B289", '#FFF', '#FF6720')
    titleServices.classList.add('animate__fadeInUp');
    textServices.classList.add('animate__fadeInUp');
  }
  if (xOffset > pageWidth * 3.5) {
    changeColors("#FF6720", "#071F81", "#071F81", '#FFF', '#FF6720')
  }
})

  // END CHANGE COLOR side bar
