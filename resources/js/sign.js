document.addEventListener("DOMContentLoaded", function() {
  const sign_in_btn = document.querySelector("#sign-in-btn");
  const sign_up_btn = document.querySelector("#sign-up-btn");
  const container = document.querySelector(".container");
  const registerForm = document.getElementById("register-form");
  const loginForm = document.getElementById("login-form");
  const signUpButton = document.querySelector(".sign-up-form .btn");
  const loginButton = document.querySelector(".sign-in-form .btn");

  sign_up_btn.addEventListener("click", () => {
      container.classList.add("sign-up-mode");
  });

  sign_in_btn.addEventListener("click", () => {
      container.classList.remove("sign-up-mode");
  });

  registerForm.addEventListener("submit", function(event) {
      if (!this.checkValidity()) {
          event.preventDefault();
          event.stopPropagation();
      } else {
          // Clear previous error messages
          clearValidationErrors(this);
      }
      this.classList.add('was-validated');
  });

  loginForm.addEventListener("submit", function(event) {
      if (!this.checkValidity()) {
          event.preventDefault();
          event.stopPropagation();
      } else {
          // Clear previous error messages
          clearValidationErrors(this);
      }
      this.classList.add('was-validated');
  });

  signUpButton.addEventListener("click", function(event) {
      const currentForm = document.querySelector('.sign-up-mode .sign-up-form');
      if (!currentForm.checkValidity()) {
          event.preventDefault();
          event.stopPropagation();
          currentForm.classList.add('was-validated');
      } else {
          // Clear previous error messages
          clearValidationErrors(currentForm);
      }
  });

  loginButton.addEventListener("click", function(event) {
      const currentForm = document.querySelector('.sign-in-form');
      if (!currentForm.checkValidity()) {
          event.preventDefault();
          event.stopPropagation();
          currentForm.classList.add('was-validated');
      } else {
          // Clear previous error messages
          clearValidationErrors(currentForm);
      }
  });

  // Function to clear validation errors
  function clearValidationErrors(form) {
      const errorFields = form.querySelectorAll('.text-danger');
      errorFields.forEach(errorField => errorField.textContent = '');
  }
});
