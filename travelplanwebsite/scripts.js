document.addEventListener('DOMContentLoaded', function () {
    const registerForm = document.getElementById('register-form');
    const loginForm = document.getElementById('login-form');
    
    registerForm.addEventListener('submit', function (event) {
        // Add form validation logic here
        alert('Registration form submitted');
    });
    
    loginForm.addEventListener('submit', function (event) {
        // Add form validation logic here
        alert('Login form submitted');
    });
});
