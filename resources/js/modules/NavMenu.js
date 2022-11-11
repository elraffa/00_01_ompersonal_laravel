class NavMenu {
    constructor() {
        this.events()
    }

    events() {
        this.om_open_nav();
    }

    om_open_nav(x) {
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
}

export default NavMenu;