class MobileMenu {
    constructor() {
      this.menu = document.querySelector(".navbar__navbar")
      this.openButton = document.querySelector(".js-hamburger-button")
      console.log(this.openButton);
      this.events()
    }
  
    events() {
      this.openButton.addEventListener("click", () => this.openMenu())
    }
  
    openMenu() {
      this.openButton.classList.toggle("expanded")
      this.openButton.classList.toggle("fa-window-close")
      this.menu.classList.toggle("expanded")
    }
  }

  export default MobileMenu
  