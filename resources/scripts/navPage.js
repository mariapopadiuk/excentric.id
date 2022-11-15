
  const opennav = document.querySelector(".openmenu");
  const closeNav = document.querySelector(".close-nav");
  const burger = document.querySelector(".burger");
  burger.addEventListener('click', () => hideElement(opennav));
  closeNav.addEventListener('click', () => hideElement(opennav));

  function hideElement(showEl) {
    showEl.classList.toggle("-translate-y-full");
  }
