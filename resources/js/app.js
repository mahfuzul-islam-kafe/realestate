import "./bootstrap";

import "../sass/app.scss"; // Import your custom SCSS
import "toastr/build/toastr.min.js"; // Import Bootstrap JS bundle
import "bootstrap/dist/js/bootstrap.bundle.min.js"; // Import Bootstrap JS bundle

import Swiper from "swiper/bundle";

import toastr from "toastr/build/toastr.min.js";

const formGroups = document.querySelectorAll(".form-group-inner");

formGroups.forEach((group) => {
    const input = group.querySelector("input");
    const label = group.querySelector("label");

    // Handle input event for both text and number types
    input.addEventListener("input", function () {
        if (input.value) {
            label.style.opacity = "0";
            label.style.transform = "translateY(-20px)";
        } else {
            label.style.opacity = "0.8";
            label.style.transform = "translateY(0)";
        }
    });

    // Optional: Initial check to set label visibility based on existing value
    if (input.value) {
        label.style.opacity = "0";
        label.style.transform = "translateY(-20px)";
    }
});
for (let e of document.querySelectorAll(
    'input[type="range"].slider-progress'
)) {
    e.style.setProperty("--value", e.value);
    e.style.setProperty("--min", e.min == "" ? "0" : e.min);
    e.style.setProperty("--max", e.max == "" ? "100" : e.max);
    e.addEventListener("input", () => e.style.setProperty("--value", e.value));
}
