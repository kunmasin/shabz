document.addEventListener('DOMContentLoaded', function() {
    // Mobile Navigation Toggle
    const mobileNavToggle = document.getElementById('mobile-nav-toggle');
    const navMenu = document.querySelector('.heading1 ul');

    mobileNavToggle.addEventListener('click', function() {
        navMenu.classList.toggle('show');
    });