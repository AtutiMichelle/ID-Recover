import './bootstrap';
import Alpine from 'alpinejs';

window.Alpine = Alpine;
Alpine.start();

document.addEventListener('DOMContentLoaded', function () {
    // Dropdown toggle
    var menuButton = document.getElementById('user-menu-button');
    var dropdownMenu = document.getElementById('user-dropdown-menu');
    if (menuButton && dropdownMenu) {
        menuButton.addEventListener('click', function (event) {
            event.preventDefault();
            dropdownMenu.classList.toggle('hidden');
        });

        window.addEventListener('click', function (event) {
            if (!menuButton.contains(event.target) && !dropdownMenu.contains(event.target)) {
                dropdownMenu.classList.add('hidden');
            }
        });
    }

    // Login and register link handling
    const loginsec = document.querySelector('.login-section1');
    const loginlink = document.querySelector('.login-link');
    const registerlink = document.querySelector('.register-link');
    if (registerlink && loginlink && loginsec) {
        registerlink.addEventListener('click', () => {
            loginsec.classList.add('active');
        });
        loginlink.addEventListener('click', () => {
            loginsec.classList.remove('active');
        });
    }

    // Hamburger menu handling
    const hamBurger = document.querySelector(".toggle-btn");
    if (hamBurger) {
        hamBurger.addEventListener("click", function () {
            document.querySelector("#sidebar").classList.toggle("expand");
        });
    }

    // Show Found ID form
    function showFoundIdForm() {
        const mainContent = document.getElementById('main-content');
        if (mainContent) {
            mainContent.innerHTML = '';

            const formHtml = `
                <div class="form-box1 login">
                    <h2>Submit Found ID</h2>
                    <form method="POST" action="{{ route('submit-found-id') }}">
                        @csrf
                        <button class="btn1">Submit</button>
                    </form>
                </div>
            `;
            mainContent.innerHTML = formHtml;
        }
    }

    // Show content function
    function showContent(sectionId) {
        var sections = document.getElementsByClassName('content-section');
        for (var i = 0; i < sections.length; i++) {
            sections[i].classList.remove('active');
        }
        var targetSection = document.getElementById(sectionId);
        if (targetSection) {
            targetSection.classList.add('active');
        }
    }

    // Date input initialization
    var dateInput = document.getElementById("date_found");
    if (dateInput) {
        var today = new Date().toISOString().split('T')[0];
        dateInput.setAttribute('min', today);
        dateInput.setAttribute('max', today);
        dateInput.value = today;
    }
});
//landing page background
var swiper = new Swiper(".mySwiper", {
    slidesPerView: 1,
    spaceBetween: 30,
    loop: true,
  });