class MobileMenu {
    constructor() {
      this.menu = document.querySelector(".navbar__navbar")
      this.openButton = document.querySelector(".js-hamburger-button")
      this.events()
    }
  
    // Events
    events() {
      this.openButton.addEventListener("click", () => this.openMenu())
    }
    
    // Methods
    openMenu() {
      this.openButton.classList.toggle("expanded")
      this.menu.classList.toggle("expanded")
    }
  }

  export default MobileMenu
  