document.addEventListener('DOMContentLoaded', function () {
    const loadingBar = document.querySelector('.loading-bar');
    const container = document.querySelector('.container');
    const loginForm = document.getElementById('login-form');
    const registerForm = document.getElementById('register-form');
    const loginButton = document.getElementById('login-button');
    const registerButton = document.getElementById('register-button');

    // Recuperamos el último estado del formulario desde localStorage
    const lastForm = localStorage.getItem('lastForm');

    if (lastForm === 'register') {
        loginForm.style.opacity = '0';
        registerForm.style.opacity = '1';
        setTimeout(() => {
            loginForm.style.display = 'none';
            registerForm.style.display = 'block';
        }, 300);
    } else {
        // Por defecto, mostramos el formulario de inicio de sesión
        loginForm.style.opacity = '1';
        registerForm.style.opacity = '0';
        setTimeout(() => {
            loginForm.style.display = 'block';
            registerForm.style.display = 'none';
        }, 300);
    }

    loginButton.addEventListener('click', function () {
        loginForm.style.opacity = '1';
        registerForm.style.opacity = '0';
        setTimeout(() => {
            loginForm.style.display = 'block';
            registerForm.style.display = 'none';
            // Al hacer clic en "Volver al Login", guardamos el estado en localStorage
            localStorage.setItem('lastForm', 'login');
        }, 300);
    });

    registerButton.addEventListener('click', function () {
        loginForm.style.opacity = '0';
        registerForm.style.opacity = '1';
        setTimeout(() => {
            loginForm.style.display = 'none';
            registerForm.style.display = 'block';
            // Al hacer clic en "Registrar", guardamos el estado en localStorage
            localStorage.setItem('lastForm', 'register');
        }, 300);
    });

    window.addEventListener('load', function () {
        container.style.display = 'block';
        loadingBar.style.display = 'none';
    });
});
