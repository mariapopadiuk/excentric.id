if (window.location.pathname === '/') {
  const boxContact = document.querySelector(".first input");
  const boxCareers = document.querySelector(".last input");
  const fileInput = document.querySelector(".wpcf7-file");
  const fileInputParent = document.querySelector('span[data-name="file-717"]');
  fileInputParent.innerHTML = '';

  boxContact.addEventListener('click', () => toggleFileInput('hide'));
  boxCareers.addEventListener('click', () => toggleFileInput('show'));


  function toggleFileInput(type) {
    if (type === 'show') {
      fileInputParent.append(fileInput);
    } else {
      fileInputParent.innerHTML = '';
    }
  }

}
