<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>UCAM Extender</title>
    <link rel="stylesheet" href="{{ asset('assets/form/css/style.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <div class="wrapper">
      <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <img class="center" src="{{ asset("assets/form/images/CodeHunter.png") }}" alt="">
      <img class="center" src="{{ asset('assets/form/images/codesandbox.png') }}" alt="">
      <div class="title-text">
        {{-- <div class="title login">Login Form</div> --}}
        <div class="title signup">Registration Form</div>
      </div>
      <div class="form-container">
        {{-- <div class="slide-controls"> --}}
          {{-- <input type="radio" name="slide" id="login" checked>
          <input type="radio" name="slide" id="signup"> --}}
          {{-- <label for="login" class="slide login">Login</label> --}}
          {{-- <label for="signup" class="signup">Registration</label> --}}
          {{-- <div class="slider-tab"></div>
        </div> --}}
        <div class="form-inner">
          {{-- <form action="{{ route('login') }}" class="login" method="post">
            @csrf
            <div class="field">
              <input type="email" name="email" placeholder="Email Address" required>
            </div>
            <div class="field">
              <input type="password" name="password" placeholder="Password"  required autocomplete="current-password">
            </div>
            <div class="pass-link"><a href="{{ route('password.request') }}">Forgot password?</a></div>
            <div class="field btn">
              <div class="btn-layer"></div>
              <input type="submit" value="Login">
            </div>
            <div class="signup-link">Not have an account? <a href="">Register now</a></div>
          </form> --}}
          <form action="{{ route('register') }}" class="signup" method="post">
            @csrf
            <div class="field">
              <input type="text" placeholder="Username" name="name" required>
            </div>
            <div class="field">
              <input type="email" placeholder="Email Address" name="email" :value="old('email')" required required>
            </div>
            <div class="field">
              <input type="password" placeholder="Password" name="password" required>
            </div>
            <div class="field">
              <input type="password" placeholder="Confirm password" name="password_confirmation" required>
            </div>
            <div class="field btn">
              <div class="btn-layer"></div>
              <input type="submit" value="Register">
            </div>
          </form>
        </div>
      </div>
    </div>

    <script>
     // const loginText = document.querySelector(".title-text .login");
     // const loginForm = document.querySelector("form.login");
     // const loginBtn = document.querySelector("label.login");
      //const signupBtn = document.querySelector("label.signup");
      //const signupLink = document.querySelector("form .signup-link a");
    //   signupBtn.onclick = (()=>{
    //     //loginForm.style.marginLeft = "-50%";
    //    // loginText.style.marginLeft = "-50%";
    //     route('register');
    //   });
    //   loginBtn.onclick = (()=>{
    //     //loginForm.style.marginLeft = "0%";
    //     //loginText.style.marginLeft = "0%";
    //     route('login');
    //   });
    //   signupLink.onclick = (()=>{
    //     signupBtn.click();
    //     return false;
    //   });
    </script>

  </body>
</html>

{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf
            <h1>Login</h1>
            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout> --}}
