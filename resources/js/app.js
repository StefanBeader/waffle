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
    sendMessage().then();
  });
});

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
  const rawResponse = await fetch('/sendMessage', {
    method: 'POST',
    headers: {
      'Accept': 'application/json',
      'Content-Type': 'application/json',
      "X-Requested-With": "XMLHttpRequest",
      'X-CSRF-TOKEN': document.querySelector('meta[name=csrf-token]').getAttribute('content')
    },
    body: JSON.stringify({a: 1, b: 'Textual content'})
  });
  const content = await rawResponse.json();

  console.log(content);
}
