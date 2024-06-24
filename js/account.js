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



function validationLogin(form) {
    let user = form.username.value.trim();
    let password = form.password.value;
    let email = form.email ? form.email.value.trim() : null;
    let confirmPassword = form.confirm_password ? form.confirm_password.value : null;

    let numbersRegex = /\d/;
    let passwordRegex = /^(?=.*\d)(?=.*[A-Z])(?=.*[!@#$%^&*(),.?":{}|<>]).{10,}$/;
    let emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    let validationFields = user === "" || password === "";

    if (email !== null && confirmPassword !== null) {
        validationFields = validationFields || confirmPassword === "" || email === "";
    }

    if (validationFields) {
        alert("You must fill all the fields!");
        return false;
    } else if (user.match(numbersRegex)) {
        alert("Username must not contain numbers!");
        return false;
    } else if (user.includes(" ")) {
        alert("Username must not contain spaces!");
        return false;
    } else if (email !== null && !email.match(emailRegex)) {
        alert("Invalid email format!");
        return false;
    } else if ((email !== null && confirmPassword !== null) && (password !== confirmPassword)) {
        alert("Passwords do not match!");
        return false;
    } else if (!passwordRegex.test(password)) {
        alert("Password must be at least 10 characters long and contain at least one uppercase letter, one special character, and one number!");
        return false;
    }

    return true;
}