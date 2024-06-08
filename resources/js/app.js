import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();


//  JavaScript to handle dropdown toggle 

document.addEventListener('DOMContentLoaded', function() {
    var menuButton = document.getElementById('user-menu-button');
    var dropdownMenu = document.getElementById('user-dropdown-menu');

    menuButton.addEventListener('click', function(event) {
        event.preventDefault();
        dropdownMenu.classList.toggle('hidden');
    });

    window.addEventListener('click', function(event) {
        if (!menuButton.contains(event.target) && !dropdownMenu.contains(event.target)) {
            dropdownMenu.classList.add('hidden');
        }
    });
});