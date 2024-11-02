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