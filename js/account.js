// TogglePassword
document.addEventListener('DOMContentLoaded', function() {
    const passwordContainer = document.getElementById('password-container');
    const togglePassword = passwordContainer.querySelector('#togglePassword');
    const passwordInput = passwordContainer.querySelector('input[type="password"]');

    togglePassword.addEventListener('click', function() {
        const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordInput.setAttribute('type', type);
        this.classList.toggle('fa-eye-slash');
        this.classList.toggle('fa-eye');
    });
});