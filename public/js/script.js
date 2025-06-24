document.addEventListener('DOMContentLoaded', function () {
    'use strict';
    /**
     * element toggle function
     */
    const elemToggleFunc = function(elem) {
        if (elem) elem.classList.toggle("active");
    }
    /**
     * header sticky & go to top
     */
    const header = document.querySelector("[data-header]");
    const goTopBtn = document.querySelector("[data-go-top]");
    window.addEventListener("scroll", function() {
        if (window.scrollY >= 10) {
            if (header) header.classList.add("active");
            if (goTopBtn) goTopBtn.classList.add("active");
        } else {
            if (header) header.classList.remove("active");
            if (goTopBtn) goTopBtn.classList.remove("active");
        }
    });
    /**
     * navbar toggle
     */
    const navToggleBtn = document.querySelector("[data-nav-toggle-btn]");
    const navbar = document.querySelector("[data-navbar]");
    if (navToggleBtn && navbar) {
        navToggleBtn.addEventListener("click", function() {
            elemToggleFunc(navToggleBtn);
            elemToggleFunc(navbar);
            elemToggleFunc(document.body);
        });
        // Keyboard accessibility
        navToggleBtn.addEventListener("keydown", function(e) {
            if (e.key === 'Enter' || e.key === ' ') {
                e.preventDefault();
                navToggleBtn.click();
            }
        });
    }
    /**
     * skills toggle
     */
    const toggleBtnBox = document.querySelector("[data-toggle-box]");
    const toggleBtns = document.querySelectorAll("[data-toggle-btn]");
    const skillsBox = document.querySelector("[data-skills-box]");
    if (toggleBtnBox && toggleBtns.length && skillsBox) {
        for (let i = 0; i < toggleBtns.length; i++) {
            toggleBtns[i].addEventListener("click", function() {
                elemToggleFunc(toggleBtnBox);
                for (let j = 0; j < toggleBtns.length; j++) {
                    elemToggleFunc(toggleBtns[j]);
                }
                elemToggleFunc(skillsBox);
            });
            // Keyboard accessibility
            toggleBtns[i].addEventListener("keydown", function(e) {
                if (e.key === 'Enter' || e.key === ' ') {
                    e.preventDefault();
                    toggleBtns[i].click();
                }
            });
        }
    }
    /**
     * dark & light theme toggle
     */
    const themeToggleBtn = document.querySelector("[data-theme-btn]");
    if (themeToggleBtn) {
        themeToggleBtn.addEventListener("click", function() {
            elemToggleFunc(themeToggleBtn);
            if (themeToggleBtn.classList.contains("active")) {
                document.body.classList.remove("dark_theme");
                document.body.classList.add("light_theme");
                localStorage.setItem("theme", "light_theme");
            } else {
                document.body.classList.add("dark_theme");
                document.body.classList.remove("light_theme");
                localStorage.setItem("theme", "dark_theme");
            }
        });
        // Keyboard accessibility
        themeToggleBtn.addEventListener("keydown", function(e) {
            if (e.key === 'Enter' || e.key === ' ') {
                e.preventDefault();
                themeToggleBtn.click();
            }
        });
        // Apply last selected theme
        if (localStorage.getItem("theme") === "light_theme") {
            themeToggleBtn.classList.add("active");
            document.body.classList.remove("dark_theme");
            document.body.classList.add("light_theme");
        } else {
            themeToggleBtn.classList.remove("active");
            document.body.classList.remove("light_theme");
            document.body.classList.add("dark_theme");
        }
    }
});