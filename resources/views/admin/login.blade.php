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
        <div class="title login">Admin Login Form</div>
      </div>
      <div class="form-container">
             <!-- Session Status -->
             <x-auth-session-status class="mb-4" :status="session('error')" />

        <div class="form-inner">
          <form action="{{ route('admin.login') }}" class="login" method="post">
            @csrf
            <div class="field">
              <input type="email" name="email" placeholder="Email Address" required>
            </div>
            <div class="field">
              <input type="password" name="password" placeholder="Password"  required autocomplete="current-password">
            </div>
            <div class="field btn">
              <div class="btn-layer"></div>
              <input type="submit" value="Login">
            </div>
            <div class="signup-link">Not have an account? <a href="#">Register now</a></div>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
