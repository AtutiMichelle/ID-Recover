<head>
    @vite(['resources/css/app.css', 'resources/js/app.js']) 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
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
<div class="background1">
    <img src="{{ asset('back6.jpg') }}" alt="Background">
</div>
<div class="container1">
    <img src="{{ asset('back6.jpg') }}" alt="Background">
    <div class="item1">
        <h2 class="logo"><i class='bx bxl-xing'></i>ID Recover</h2>
        <div class="text-item1">
            <h2>Welcome! <br></h2>
            <p>
                Our system ensures lost IDs are returned efficiently. Report losses easily and facilitate quick returns. Keeping our school community connected.
            </p>
            
        </div>
    </div>
    <div class="login-section1">
        <div class="form-box1 login">
          
                <x-auth-session-status class="mb-4" :status="session('status')" />
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <h2>Sign In With</h2>
                    <div class="-mx-3 flex flex-1 justify-center">
                        <div class="grid grid-cols-2">
                            <a href="/socialite/github" class="px-3 py-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                                    <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27s1.36.09 2 .27c1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.01 8.01 0 0 0 16 8c0-4.42-3.58-8-8-8"/>
                                  </svg>
                            </a>
                            
                            <a href="/socialite/google" class="px-3 py-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-google" viewBox="0 0 16 16">
                                    <path d="M15.545 6.558a9.4 9.4 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.7 7.7 0 0 1 5.352 2.082l-2.284 2.284A4.35 4.35 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.8 4.8 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.7 3.7 0 0 0 1.599-2.431H8v-3.08z"/>
                                  </svg>
                            </a>
            
                        </div>
                    </div>
                    <hr>
                    <h2>Or</h2>
                   
                    <div class="input-box1">
                        <span class="icon"><i class='bx bxs-envelope'></i></span>
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                        <label>Email</label>
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
                    <div class="input-box1">
                        <span class="icon"><i class='bx bxs-lock-alt'></i></span>
                        <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                        <label>Password</label>
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>
                    <div class="remember-password1">
                        <label for="remember_me"><input id="remember_me" type="checkbox" name="remember">Remember Me</label>
                        <a href="{{ route('password.request') }}">Forget Password</a>
                    </div>
                    <button class="btn1">Login In</button>
                    <div class="create-account1">
                        <p>Create A New Account? <a href="#" class="register-link">Sign Up</a></p>
                    </div>
                    
                </form>
            
        </div>
        <div class="form-box1 register">
           
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <h2>Sign Up</h2>
                    <div class="input-box1">
                        <span class="icon"><i class='bx bxs-user'></i></span>
                        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                        <label>Username</label>
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>
                    <div class="input-box1">
                        <span class="icon"><i class='bx bxs-envelope'></i></span>
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                        <label>Email</label>
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
                    <div class="input-box1">
                        <span class="icon"><i class='bx bxs-lock-alt'></i></span>
                        <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                        <label>Password</label>
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>
                    <div class="input-box1">
                        <span class="icon"><i class='bx bxs-lock-alt'></i></span>
                        <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                        <label>Confirm Password</label>
                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>
                    <div class="remember-password1">
                        <label><input type="checkbox">I agree with this statement</label>
                    </div>
                    <button class="btn1">Sign Up</button>
                    <div class="create-account1">
                        <p>Already Have An Account? <a href="#" class="login-link">Sign In</a></p>
                    </div>
                </form>
            
        </div>
    </div>
</div
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
