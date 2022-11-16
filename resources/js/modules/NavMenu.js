class NavMenu {
    constructor() {
        this.btnCursos = document.querySelector('#navbtn_cursos');
        this.btnAprendizaje = document.querySelector('#navbtn_aprendizaje');
        this.btnListening = document.querySelector('#navbtn_listening');
        this.btnServicios = document.querySelector('#navbtn_servicios');
        this.icon = document.getElementsByTagName('i');
        this.closeBtn = document.querySelector('.nav_close_btn');
        console.log(document.querySelectorAll('.nav_close_btn'));
        this.events()
    }

    events() {
        this.btnCursos.addEventListener('click', () => {
            this.om_open_nav('cursos');
        })
        this.btnAprendizaje.addEventListener('click', () => {
            this.om_open_nav('aprendizaje');
        })
        this.btnListening.addEventListener('click', () => {
            this.om_open_nav('listening');
        })
        this.btnServicios.addEventListener('click', () => {
            this.om_open_nav('servicios');
        })
        this.closeBtn.addEventListener('click', () => {
          this.om_close_nav(x);
        })
    }

    om_open_nav(x) {
        if (document.getElementById('nav_' + x).style.display == 'block') {
          this.om_close_nav(x);
        } else {
          this.om_close_nav('cursos');
          this.om_close_nav('aprendizaje');
          this.om_close_nav('listening');
          this.om_close_nav('servicios');
          document.getElementById('nav_' + x).style.display = 'block';
      
          if (document.getElementById('navbtn_' + x)) {
            document.querySelector('#navbtn_' + x).getElementsByTagName('i').style.display = 'none';
            console.log((document.querySelector('#navbtn_' + x)).getElementsByTagName('i'));
            document.getElementById('navbtn_' + x)
            this.icon[1].style.display = 'inline';
            document.getElementById('navbtn_' + x).classList.add('navbtn_active');
          }
        }
      }

      om_close_nav(x) {
        document.getElementById('nav_' + x).style.display = 'none';
        if (document.getElementById('navbtn_' + x)) {
          document.getElementById('navbtn_' + x)
          this.icon[0].style.display = 'inline';
          document.getElementById('navbtn_' + x)
          this.icon[1].style.display = 'none';
          document.getElementById('navbtn_' + x).classList.remove('navbtn_active');
        }
      }

      om_close_all_nav() {
        this.om_close_nav(x);
        this.om_close_nav('cursos');
        this.om_close_nav('aprendizaje');
        this.om_close_nav('listening');
        this.om_close_nav('servicios');
      }
      
}

export default NavMenu;