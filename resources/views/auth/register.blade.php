<head>
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  @vite(['resources/css/app.css', 'resources/js/app.js']) 
  @vite(['resources/css/sign.css', 'resources/js/sign.js']) 
  <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
</head>


<!-- LOGIN AND REGISTRATION FORMS -->
<div class="container">
  <div class="forms-container">
      <div class="signin-signup">
          <!-- Sign In Form -->
          <form method="POST" action="{{ route('login') }}" class="sign-in-form" id="login-form">
            @csrf
            <x-auth-session-status class="mb-4" :status="session('status')" />
            <h2 class="title">Sign in</h2>
        
            <div class="input-field">
                <i class="fas fa-user"></i>
                <x-text-input id="email" type="email" name="email" :value="old('email')" required placeholder="Email" pattern=".+@strathmore\.edu" title="Email must end with @strathmore.edu" />
                <br>
                @error('email')
                    <div class="text-danger mt-1">{{ $message }}</div>
                @enderror
            </div>
            <br>
            <div class="input-field">
                <i class="fas fa-lock"></i>
                <x-text-input id="password" type="password" name="password" required placeholder="Password" />
                <br>
                @error('password')
                    <div class="text-danger mt-1">{{ $message }}</div>
                @enderror
            </div>
            <br>
            <div class="terms-and-conditions">
                <label>
                    <input type="checkbox" name="terms" required> I agree that some of my school ID information may be made public.
                </label>
            </div>
            
            <input type="submit" value="Login" class="btn solid" />
            
            <p class="social-text">Or Sign in with social platforms</p>
            <div class="social-media">
                <a href="/socialite/github" class="social-icon">
                    <i class="fab fa-github"></i>
                </a>
                <a href="/socialite/google" class="social-icon">
                    <i class="fab fa-google"></i>
                </a>
            </div>
        </form>
        
        
    
          <!-- Sign Up Form -->
          <form method="POST" action="{{ route('register') }}" class="sign-up-form" id="register-form">
            @csrf
            <h2 class="title">Sign up</h2>
            
            <div class="input-field">
                <i class="fas fa-user"></i>
                <x-text-input id="admission" type="number" name="admission" :value="old('admission')" required autofocus placeholder="Admission Number" />
                <br>
                
            </div>
            <br>
            <div class="input-field">
                <i class="fas fa-user"></i>
                <x-text-input id="name" type="text" name="name" :value="old('name')" required autofocus placeholder="Full Name" />
                
            </div>
            <br>            
            <div class="input-field">
                <i class="fas fa-envelope"></i>
                <x-text-input id="email" type="email" name="email" :value="old('email')" required placeholder="Email" pattern=".+@strathmore\.edu" title="Email must end with @strathmore.edu" />
               
            </div>
            <br>
            <div class="input-field">
                <i class="fas fa-lock"></i>
                <x-text-input id="password" type="password" name="password" required placeholder="Password" />
                <br>
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>
            <br>
            <div class="input-field">
                <i class="fas fa-lock"></i>
                <x-text-input id="password_confirmation" type="password" name="password_confirmation" required placeholder="Confirm Password" />
                <br>
                 <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>
            <br>
            <div class="remember-password">
                <label>
                    <input type="checkbox"> I agree that some of my school ID information may be made public.
                </label>
            </div>
            
            <input type="submit" class="btn" value="Sign up"/>
        </form>
        
      </div>
  </div>

  <div class="panels-container">
      <div class="panel left-panel">
          <div class="content">
              <h3>New here ?</h3>
              <p>Welcome! Our platform helps you recover lost school IDs efficiently. Report your lost ID, and we’ll ensure it gets back to you swiftly.</p>
              <button class="btn transparent" id="sign-up-btn">Sign up</button>
          </div>
          <img src="login.svg" class="image" alt="" />
      </div>
      <div class="panel right-panel">
          <div class="content">
              <h3>One of us ?</h3>
              <p>Lost your school ID? Our system helps you report and recover lost IDs quickly. Join us in keeping our school connected and secure.</p>
              <button class="btn transparent" id="sign-in-btn">Sign in</button>
          </div>
          <img src="login.svg" class="image" alt="" />
      </div>
  </div>
</div>
<script>
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

</script>