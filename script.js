// ===============================
// PASSWORD SHOW / HIDE
// ===============================

const password = document.getElementById("password");
const confirmPassword = document.getElementById("confirmPassword");

const togglePassword = document.getElementById("togglePassword");
const toggleConfirmPassword = document.getElementById("toggleConfirmPassword");


// Toggle Password
togglePassword.addEventListener("click", function () {

    if (password.type === "password") {

        password.type = "text";

        this.classList.remove("fa-eye-slash");
        this.classList.add("fa-eye");

    } else {

        password.type = "password";

        this.classList.remove("fa-eye");
        this.classList.add("fa-eye-slash");

    }

});


// Toggle Confirm Password
toggleConfirmPassword.addEventListener("click", function () {

    if (confirmPassword.type === "password") {

        confirmPassword.type = "text";

        this.classList.remove("fa-eye-slash");
        this.classList.add("fa-eye");

    } else {

        confirmPassword.type = "password";

        this.classList.remove("fa-eye");
        this.classList.add("fa-eye-slash");

    }

});


// =====================================
// PASSWORD MATCH VALIDATION
// =====================================

document.querySelector("form").addEventListener("submit", function (e) {

    if (password.value !== confirmPassword.value) {

        e.preventDefault();

        alert("Passwords do not match!");

        confirmPassword.focus();

        return false;
    }

});