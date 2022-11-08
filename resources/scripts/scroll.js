document.querySelectorAll('.st0').forEach(e => e.style.fill = '#FF6720');
document.querySelectorAll('.st1').forEach(e => e.style.fill = '#FFF');

window.addEventListener('scroll', () => {
  if (pageXOffset > 800) {
    document.querySelectorAll('.st0').forEach(e => e.style.fill = '#fff');
    document.querySelectorAll('.st1').forEach(e => e.style.fill = '#490355');
  }
  if (pageXOffset < 800) {
    document.querySelectorAll('.st0').forEach(e => e.style.fill = '#FF6720');
    document.querySelectorAll('.st1').forEach(e => e.style.fill = '#FFF');
  }
  if (pageXOffset > 2700) {
    document.querySelectorAll('.st0').forEach(e => e.style.fill = '#25B289');
    document.querySelectorAll('.st1').forEach(e => e.style.fill = '#FFF');
  }
  if (pageXOffset > 4600) {
    document.querySelectorAll('.st0').forEach(e => e.style.fill = '#FF6720');
    document.querySelectorAll('.st1').forEach(e => e.style.fill = '#FFF');
  }
})

// END CHANGE COLOR LOGO

  // CHANGE COLOR side bar
 const bgSlider = document.querySelector('.slider');

  window.addEventListener('scroll', () => {
    console.log(window.pageXOffset)
    if (pageXOffset > 800) {
      bgSlider.style.backgroundColor = "#430057";
    }
    if (pageXOffset < 800) {
      bgSlider.style.backgroundColor = "#FF6720";
    }
    if (pageXOffset > 2000) {
      bgSlider.style.backgroundColor = "#27B289";
    }
    if (pageXOffset > 3960) {
      bgSlider.style.backgroundColor = "#071F81";
    }
    if (pageXOffset > 4500) {
      bgSlider.style.backgroundColor = "#FF6720";
    }
  })

  // END CHANGE COLOR side bar
