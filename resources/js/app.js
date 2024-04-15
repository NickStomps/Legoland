import.meta.glob([
  '../images/**',
  '../fonts/**',
]);

import './bootstrap';

document.querySelectorAll("#up").forEach((element) => {
  element.addEventListener('click', event => {
    event.target.parentElement.querySelector('#aantal').innerText = parseInt(event.target.parentElement.querySelector('#aantal').innerText) + 1;
  });
});

document.querySelectorAll("#down").forEach((element) => {
  element.addEventListener('click', event => {
    if (parseInt(event.target.parentElement.querySelector('#aantal').innerText) >= 1) {
      event.target.parentElement.querySelector('#aantal').innerText = parseInt(event.target.parentElement.querySelector('#aantal').innerText) - 1;
    }
  });
});
