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

