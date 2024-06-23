<head>
  @vite(['resources/css/app.css', 'resources/js/app.js']) 
  @vite(['resources/css/sign.css', 'resources/js/sign.js']) 
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
</head>
<nav class="navbar navbar-expand-lg navbar-light sticky-top">
  <div class="container-fluid">
      <a class="navbar-brand" href="#">ID Recover</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav flex-grow-1 justify-content-center">
              <li class="nav-item">
                  <a class="nav-link rounded-md px-3 py-2 ring-3 ring-transparent transition hover:text-black hover:shadow-md focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-black dark:focus-visible:ring-white" aria-current="page" href="/#home">Home</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link rounded-md px-3 py-2 ring-3 ring-transparent transition hover:text-black hover:shadow-md focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-black dark:focus-visible:ring-white" href="/#about-section">About Us</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link rounded-md px-3 py-2 ring-3 ring-transparent transition hover:text-black hover:shadow-md focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-black dark:focus-visible:ring-white" href="/#services-section">Services</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link rounded-md px-3 py-2 ring-3 ring-transparent transition hover:text-black hover:shadow-md focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-black dark:focus-visible:ring-white" href="#services">Contact</a>
              </li>
          </ul>
          <ul class="navbar-nav ms-auto">
              @if (Route::has('login'))
                  @auth
                      <li class="nav-item">
                          <a href="{{ url('/dashboard') }}" class="nav-link rounded-md px-3 py-2 ring-3 ring-transparent transition hover:text-black hover:shadow-md focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-black dark:focus-visible:ring-white">
                              Dashboard
                          </a>
                      </li>
                      @if (Route::has('register'))
                          <li class="nav-item">
                              <a href="{{ route('register') }}" class="nav-link rounded-md px-3 py-2 ring-3 ring-transparent transition hover:text-black hover:shadow-md focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-black dark:focus-visible:ring-white">
                                  Register
                              </a>
                          </li>
                      @endif
                  @endauth
              @endif
          </ul>
      </div>
  </div>
</nav>

<!-- LOGIN AND REGISTRATION FORMS -->
<div class="container">
  <div class="forms-container">
      <div class="signin-signup">
          <!-- Sign In Form -->
          <form method="POST" action="{{ route('login') }}" class="sign-in-form">
              @csrf
              <h2 class="title">Sign in</h2>
              <x-auth-session-status class="mb-4" :status="session('status')" />
              <div class="input-field">
                  <i class="fas fa-user"></i>
                  <x-text-input id="email" type="email" name="email" :value="old('email')" required autofocus placeholder="Email" />
                  <x-input-error :messages="$errors->get('email')" class="mt-2" />
              </div>
              <div class="input-field">
                  <i class="fas fa-lock"></i>
                  <x-text-input id="password" type="password" name="password" required placeholder="Password" />
                  <x-input-error :messages="$errors->get('password')" class="mt-2" />
              </div>
              <div class="terms-and-conditions">
                <label>
                    <input type="checkbox" name="terms" required> I agree that my school ID information may be made public.
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
          <form method="POST" action="{{ route('register') }}" class="sign-up-form">
              @csrf
              <h2 class="title">Sign up</h2>
              <div class="input-field">
                  <i class="fas fa-user"></i>
                  <x-text-input id="name" type="text" name="name" :value="old('name')" required autofocus placeholder="Username" />
                  <x-input-error :messages="$errors->get('name')" class="mt-2" />
              </div>
              <div class="input-field">
                  <i class="fas fa-envelope"></i>
                  <x-text-input id="email" type="email" name="email" :value="old('email')" required placeholder="Email" />
                  <x-input-error :messages="$errors->get('email')" class="mt-2" />
              </div>
              <div class="input-field">
                  <i class="fas fa-lock"></i>
                  <x-text-input id="password" type="password" name="password" required placeholder="Password" />
                  <x-input-error :messages="$errors->get('password')" class="mt-2" />
              </div>
              <div class="input-field">
                  <i class="fas fa-lock"></i>
                  <x-text-input id="password_confirmation" type="password" name="password_confirmation" required placeholder="Confirm Password" />
                  <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
              </div>
              <div class="remember-password">
                  <label><input type="checkbox"> I agree with this statement</label>
              </div>
              <input type="submit" class="btn" value="Sign up" />
              <p class="social-text">Or Sign up with social platforms</p>
              <div class="social-media">
                  <a href="/socialite/github" class="social-icon">
                      <i class="fab fa-github"></i>
                  </a>
                  <a href="/socialite/google" class="social-icon">
                      <i class="fab fa-google"></i>
                  </a>
              </div>
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
<!-- SIGN UP FORM CREATION -->

{{-- <x-guest-layout>
  <form method="POST" action="{{ route('register') }}">
      @csrf

      <!-- Name -->
      <div>
          <x-input-label for="name" :value="__('Name')" />
          <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
          <x-input-error :messages="$errors->get('name')" class="mt-2" />
      </div>

      <!-- Email Address -->
      <div class="mt-4">
          <x-input-label for="email" :value="__('Email')" />
          <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
          <x-input-error :messages="$errors->get('email')" class="mt-2" />
      </div>

      <!-- Password -->
      <div class="mt-4">
          <x-input-label for="password" :value="__('Password')" />

          <x-text-input id="password" class="block mt-1 w-full"
                          type="password"
                          name="password"
                          required autocomplete="new-password" />

          <x-input-error :messages="$errors->get('password')" class="mt-2" />
      </div>

      <!-- Confirm Password -->
      <div class="mt-4">
          <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

          <x-text-input id="password_confirmation" class="block mt-1 w-full"
                          type="password"
                          name="password_confirmation" required autocomplete="new-password" />

          <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
      </div>

      <div class="flex items-center justify-end mt-4">
          <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
              {{ __('Already registered?') }}
          </a>

          <x-primary-button class="ms-4">
              {{ __('Register') }}
          </x-primary-button>
      </div>
  </form>
</x-guest-layout> --}}
