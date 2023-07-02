<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Homepage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/frontend') }}/css/homepage.css">

  </head>
  <body>
    <!-- Navbar starts -->

        <section>

            <nav class="navbar navbar-expand-lg ">
                <div class="container-fluid ms-4">
                  <img src="{{ asset('assets/frontend') }}/images/logo.png" alt="Logo" width="45" height="50" class="d-inline-block align-text-top">
                  <a class="navbar-brand" href="{{ route('/') }}">Code<span style="color: #FF5C00;">Hunter</span></a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">


                      <li class="nav-item">
                        <a class="nav-link active fw-bold " aria-current="page" href="{{ route('contest') }}">Contest</a>
                      </li>


                      <li class="nav-item">
                        <a class="nav-link fw-bold" href="{{ route('categories') }}">Problems</a>
                      </li>

                      <li class="nav-item">
                        <a class="nav-link fw-bold" href="{{ route('leaderboard') }}">LeaderBoard</a>

                      </li>

                      <li class="nav-item">
                        <a class="nav-link fw-bold" href="{{ route('discussions') }}">Discussions</a>
                      </li>
                      @if(Auth::user())
                        <li class="nav-item">
                            <a class="nav-link fw-bold" href="{{ url('user/profile/'.Auth::user()->id) }}">User Profile</a>
                          </li>
                      @endif
                    </ul>
                    @if(Auth::user())
                            <option selected>{{ Auth::user()->name }}</option>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                    @else
                    <form class="d-flex" role="search">
                        <button class="btn btn-light fw-bold fs-5" type="submit"> <img class="mb-1" src="{{ asset('assets/frontend') }}/images/lock.svg" alt=""><a href="{{ route('login') }}" style="text-decoration: none; color: black;" >Login</a></button>
                        <button class="btn btn-light fw-bold fs-5" type="submit"> <img class="mb-1" src="{{ asset('assets/frontend') }}/images/lock.svg" alt=""><a href="{{ route('register') }}" style="text-decoration: none; color: black;" >Register</a></button>
                      </form>
                    @endif
                  </div>
                </div>

              </nav>
              <hr>
        </section>


    <!-- Navbar ends -->
@yield('content')

<section>
    <hr>
    <footer>
        <div class="row">
            <div class="col-md-1">
            </div>
          <div class="col-md-5">
            <div class="footer-logo">
              <!-- <img src="logo.png" alt="Company logo"> -->
              <img src="{{ asset('assets/frontend') }}/images/logo.png" alt="Logo" width="45" height="50" class=" d-inline-block align-text-top">
              <!-- <h4>Company Name</h4> -->
              <a class="footer-title" href="#">Code<span style="color: #FF5C00;">Hunter</span></a> <br>
            </div>
            <h6 class="mt-2">A competitive programming platform for UIUans</h6>
            <div class="footer-social mt-3">
              <a href=""><img src="https://img.icons8.com/color/48/null/linkedin.png"/></a>
              <a href=""><img src="https://img.icons8.com/color/48/null/facebook-new.png"/></a>
              <a href=""><img src="https://img.icons8.com/fluency/48/null/instagram-new.png"/></a>
            </div>

          </div>
          <div class="col-md-5">
            <ul class="footer-links">
              <li><a style="text-decoration: none; font-size: 23px;" href="#">Contact <span style="color: #FF5C00;">Us</span></a></li> <br>
              <li><a style="text-decoration: none; font-size: 23px;" href="{{ route('login') }}">Log<span style="color: #FF5C00;">in</span></a></li> <br>
              <li><a style="text-decoration: none; font-size: 23px;" href="{{ route('register') }}">Sign<span style="color: #FF5C00;">up</span></a></li>
            </ul>
          </div>
          <div class="col-md-1">
        </div>
        </div>
    </footer>

  </section>


  <!-- Footer section ends here -->


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>
