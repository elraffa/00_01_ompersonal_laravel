class FaqAccordion {
    constructor() {
        this.accordion = document.querySelectorAll(".accordion");
        this.events();        
    }

    events() {
        this.accordionToggle();
    }

    accordionToggle() {
        let i;
        for (i = 0; i < this.accordion.length; i++) {
            this.accordion[i].addEventListener('click', function () {
                 this.classList.toggle('active');
                var panel = this.nextElementSibling;
                if (panel.style.maxHeight) {
                    panel.style.maxHeight = null;
                } else {
                    panel.style.maxHeight = panel.scrollHeight + 'px';
                }
            });
        }
    }
}

export default FaqAccordion;