require('./bootstrap');
import Splide from '@splidejs/splide';
import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();


document.addEventListener( 'DOMContentLoaded', function () {
	new Splide( '#image-slider', {
        'cover'      : true,
		'heightRatio': 0.6,
        'rewind'     : true,
        'type'  : 'fade',
    }
     ).mount();
} );


document.addEventListener("DOMContentLoaded", function () {
    const modal = document.getElementById("modal");
    const closeModal = document.getElementById("closeModal");

    // Check if the cookie is set
    if (!getCookie("modalClosed")) {
        showModal();
    }

    // Close modal on any click
    modal.addEventListener("click", function () {
        hideModal();
        setCookie("modalClosed", "true", 1); // Set a cookie for 1 day
    });

    // This will stop the event from propagating up to the modal when clicked inside the modal content.
    // So the modal won't close when clicked inside, but will close when clicked outside.
    modal.children[0].addEventListener("click", function(event) {
        event.stopPropagation();
    });

    closeModal.addEventListener("click", function (event) {
        hideModal();
        setCookie("modalClosed", "true", 1); // Set a cookie for 1 day
        event.stopPropagation(); // This stops the modal from reopening due to the event propagation
    });

    function showModal() {
        modal.style.opacity = "1";
        modal.style.visibility = "visible";
        modal.style.pointerEvents = "auto";
    }

    function hideModal() {
        modal.style.opacity = "0";
        modal.style.visibility = "hidden";
        modal.style.pointerEvents = "none";
    }

    function setCookie(cname, cvalue, exdays) {
        const d = new Date();
        d.setTime(d.getTime());
        const expires = "expires=" + d.toUTCString();
        document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
    }

    function getCookie(cname) {
        const name = cname + "=";
        const decodedCookie = decodeURIComponent(document.cookie);
        const ca = decodedCookie.split(';');
        for (let i = 0; i < ca.length; i++) {
            let c = ca[i];
            while (c.charAt(0) == ' ') {
                c = c.substring(1);
            }
            if (c.indexOf(name) == 0) {
                return c.substring(name.length, c.length);
            }
        }
        return "";
    }
});