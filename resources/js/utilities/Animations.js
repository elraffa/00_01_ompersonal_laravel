import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";

/**
 * Class Animations
 *
 */
class Animations {
    /**
     * Constructor
     */
    constructor() {
        this.title = document.querySelector(".hero__title");
        console.log(title);
    }

    /**
     * Events
     */
    events() {
        this.fadeIn();
    }

    /**
     * Methods
     */
    fadeIn() {
        gsap.fromTo(
            this.title,
            {
                opacity: 0,
            },
            { opacity: 0.5, duration: 1 }
        );
    }
}

export default Animations;
