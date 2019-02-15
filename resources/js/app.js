require('./googleMaps');

document.addEventListener("DOMContentLoaded", function() {

  const classname = document.querySelectorAll(".link");
  let activeSection = classname[0];
  for (let i = 0; i < classname.length; i++) {
    classname[i].addEventListener('click', (e) => {
      e.preventDefault();
      // changeActiveSection(e.target, activeSection);
      let mq = window.matchMedia( "(max-width: 1050px)" );
      if (mq.matches) {
        // window width is at less than 570px
        activeSection = e.target.closest(".link");
      }
      else {
        // window width is greater than 570px
        activeSection = e.target;
      }
      scrollIt(activeSection.dataset.scroll);
    }, false);
  }
  document.getElementById('sendMessage').addEventListener('click', (e) => {
    e.preventDefault();

    if (!validateForm()) {
      showMessageResponse('error', 'Niste popunili obavezna polja');
      return -1;
    }

    sendMessage()
      .then( response => {
        if (response.status !== 200) {
          showMessageResponse('error', 'Niste popunili obavezna polja');
          return -1;
        }
        document.getElementById('contact-form').reset();
        showMessageResponse('success', 'Uspešno ste poslali poruku');
      } )
      .catch( () => showMessageResponse('error', 'Desila se greška') );
  });

  const classnameMenu = document.querySelectorAll(".menu-btn");
  let activeMenuType = classnameMenu[0];
  for (let i = 0; i < classnameMenu.length; i++) {
    classnameMenu[i].addEventListener('click', (e) => {

      if (e.target.classList.contains('salty')) {
        changeMenuFlavour(2);
      } else {
        changeMenuFlavour(1);
      }
    }, false);
  }
});

function validateForm() {
  let result = true;
  let list = document.getElementsByClassName("required");
  for (let item of list) {
    if (item.value == '') {
      result = false;
    }
  }
  return result;
}

function changeActiveSection(el, active) {
  active.classList.remove('active');
  el.classList.add('active');
}

function scrollIt(id) {
  let element = document.getElementById(id);
  window.scrollTo({
    'behavior': 'smooth',
    'left': 0,
    'top': element.offsetTop
  });
}

async function sendMessage() {

  const data = {
      name: document.getElementById('messageName').value,
      email: document.getElementById('messageEmail').value,
      content: document.getElementById('messageContent').value
  }

  const rawResponse = await fetch('/sendMessage', {
    method: 'POST',
    headers: {
      'Accept': 'application/json',
      'Content-Type': 'application/json',
      "X-Requested-With": "XMLHttpRequest",
      'X-CSRF-TOKEN': document.querySelector('meta[name=csrf-token]').getAttribute('content')
    },
    body: JSON.stringify(data)
  });
  return rawResponse;
}

function showMessageResponse(element = '', message = '') {
  let el = document.getElementById(element);
  el.innerText = message;
  el.style.display = 'block';
  setTimeout( () => el.style.display = 'none', 4000);
}

function changeMenuFlavour(id) {
  let itemsToHide = document.querySelectorAll(`.category`);
  for (const item of itemsToHide) {
    item.style.display = 'none';
  }

  let itemsToShow = document.querySelectorAll(`[data-flavourId="${id}"]`);
  for (const item of itemsToShow) {
    item.style.display = 'block';
  }
}
