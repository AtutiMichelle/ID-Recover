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

const loginsec=document.querySelector('.login-section1')
const loginlink=document.querySelector('.login-link')
const registerlink=document.querySelector('.register-link')
registerlink.addEventListener('click',()=>{
    loginsec.classList.add('active')
})
loginlink.addEventListener('click',()=>{
    loginsec.classList.remove('active')
})

const hamBurger = document.querySelector(".toggle-btn");

hamBurger.addEventListener("click", function () {
  document.querySelector("#sidebar").classList.toggle("expand");
});

// scripts.js

function showContent(sectionId) {
    var sections = document.getElementsByClassName('content-section');
    for (var i = 0; i < sections.length; i++) {
        sections[i].classList.remove('active');
    }
    document.getElementById(sectionId).classList.add('active');
}

document.addEventListener('DOMContentLoaded', function () {
    document.querySelector('.toggle-btn').addEventListener('click', function () {
        document.getElementById('sidebar').classList.toggle('expand');
    });
});

       

function toggleSidebar() {
    document.getElementById('sidebar').classList.toggle('expand');
}

function showFoundIdForm() {
    const mainContent = document.getElementById('main-content');
    mainContent.innerHTML = '';
    
    const formHtml = `
        <div class="form-box1 login">
            <!-- Your form HTML here -->
            <h2>Submit Found ID</h2>
            <form method="POST" action="{{ route('submit-found-id') }}">
                @csrf
                <!-- Your form fields here -->
                <button class="btn1">Submit</button>
            </form>
        </div>
    `;
    mainContent.innerHTML = formHtml;
}

