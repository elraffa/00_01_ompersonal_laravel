class NavMenu {
  constructor() {
    this.btnCursos = document.querySelector('#navbtn_cursos');
    this.btnAprendizaje = document.querySelector('#navbtn_aprendizaje');
    this.btnListening = document.querySelector('#navbtn_listening');
    this.btnServicios = document.querySelector('#navbtn_servicios');
    this.icon = document.getElementsByTagName('i');
    this.closeBtn = document.querySelector('.nav_close_btn');
    console.log(this.closeBtn)
    this.events()
  }

  events() {
    this.btnCursos.addEventListener('click', () => {
      this.om_open_nav('cursos');
      this.btnCursos.getElementsByTagName('i')[0].style.display = 'none';
      this.btnCursos.getElementsByTagName('i')[1].style.display = 'inline';
      this.btnCursos.classList.add('navbtn_active');

    })
    this.btnAprendizaje.addEventListener('click', () => {
      if (document.querySelector('#nav_aprendizaje').style.display = 'none') {
        document.querySelector('#nav_aprendizaje').style.display = 'block';
        this.btnAprendizaje.getElementsByTagName('i')[0].style.display = 'none';
        this.btnAprendizaje.getElementsByTagName('i')[1].style.display = 'inline';
        this.btnAprendizaje.classList.add('navbtn_active');
      }
      else {
        document.querySelector('#nav_aprendizaje').style.display = 'none';
        this.btnAprendizaje.getElementsByTagName('i')[0].style.display = 'inline';
        this.btnAprendizaje.getElementsByTagName('i')[1].style.display = 'none';
        this.btnAprendizaje.classList.remove('navbtn_active');
      }
    })
    this.btnListening.addEventListener('click', () => {
      this.om_open_nav('listening');
    })
    this.btnServicios.addEventListener('click', () => {
      this.om_open_nav('servicios');
    })
  }

  om_open_nav(x) {
    if (document.querySelector('.nav_dropdown').style.display == 'block') {
      this.om_close_nav(x);
    } else {
      this.om_close_nav('cursos');
      this.om_close_nav('aprendizaje');
      this.om_close_nav('listening');
      this.om_close_nav('servicios');
      document.getElementById('nav_' + x).classList.toggle = 'show';

      // if (document.getElementById('navbtn_' + x)) {
      //   document.querySelector('#navbtn_' + x).getElementsByTagName('i').style.display = 'none';
      //   console.log(document.querySelector('#navbtn_' + x).getElementsByTagName('i'));
      //   document.getElementById('navbtn_' + x).getElementsByTagName('i')[1].style.display = 'inline';
      //   //this.icon[1].style.display = 'inline';
      //   document.getElementById('navbtn_' + x).classList.add('navbtn_active');
      // }
    }
  }

  om_close_nav(x) {
    document.getElementById('nav_' + x).style.display = 'none';
    if (document.querySelector('#navbtn_' + x)) {
      document.querySelector('#navbtn_' + x).getElementsByTagName('i')[0].style.display = 'inline';
      document.querySelector('#navbtn_' + x).getElementsByTagName('i')[1].style.display = 'none';
      document.querySelector('#navbtn_' + x).classList.remove('navbtn_active');
    }
  }


  om_close_all_nav() {
    //this.om_close_nav(x);
    this.om_close_nav('cursos');
    this.om_close_nav('aprendizaje');
    this.om_close_nav('listening');
    this.om_close_nav('servicios');
  }

}

export default NavMenu;