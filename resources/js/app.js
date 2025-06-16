import "./bootstrap";
import AOS from "aos";
import "aos/dist/aos.css";

import VenoBox from "venobox/dist/venobox.min";
import "venobox/dist/venobox.min.css";

AOS.init({
    once: true,
    duration: 800,
    easing: "ease-out-cubic",
});

document.addEventListener("DOMContentLoaded", function () {
    new VenoBox({
        selector: ".venobox",
        autoplay: true,
    });
});
