import MobileMenu from './modules/MobileMenu'
import NavMenu from './modules/NavMenu'
import FaqAccordion from './modules/FaqAccordion'

const mobileMenu = new MobileMenu();
const faqAccordion = new FaqAccordion();
const navMenu = new NavMenu();

let buttonNav = document.getElementById('navbtn_cursos');
buttonNav.addEventListener('click', om_open_nav('cursos'));

function om_open_nav(x) {
  if (document.getElementById('nav_' + x).style.display == 'block') {
    om_close_nav(x);
  } else {
    om_close_nav('cursos');
    om_close_nav('aprendizaje');
    om_close_nav('listening');
    om_close_nav('servicios');
    document.getElementById('nav_' + x).style.display = 'block';

    if (document.getElementById('navbtn_' + x)) {
      document
        .getElementById('navbtn_' + x)
        .getElementsByTagName('i')[0].style.display = 'none';
      document
        .getElementById('navbtn_' + x)
        .getElementsByTagName('i')[1].style.display = 'inline';
      document.getElementById('navbtn_' + x).classList.add('navbtn_active');
    }
  }
}

function om_close_nav(x) {
  document.getElementById('nav_' + x).style.display = 'none';
  if (document.getElementById('navbtn_' + x)) {
    document
      .getElementById('navbtn_' + x)
      .getElementsByTagName('i')[0].style.display = 'inline';
    document
      .getElementById('navbtn_' + x)
      .getElementsByTagName('i')[1].style.display = 'none';
    document.getElementById('navbtn_' + x).classList.remove('navbtn_active');
  }
}

function om_close_all_nav() {
  om_close_nav('cursos');
  om_close_nav('aprendizaje');
  om_close_nav('listening');
  om_close_nav('servicios');
  om_close();
}

// FAQ Accordion
var acc = document.getElementsByClassName('accordion');
console.log(acc);
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener('click', function () {
    this.classList.toggle('active');
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + 'px';
    }
  });
}

