@extends('master')
@section('content')
    <!-- Hero Section starts here-->
      <section class=" p-5 p-lg-0 pt-lg-5 text-center text-center text-sm-start">
        <div class="">
            <div class="d-sm-flex align-items-center justify-content-between">
                <div class="ms-5">
                    <h2>The <span style="color: #FF5C00;">Place</span> for Competitive Programmers</h2>
                    <p class="lead content">Code hunter is where programmers participate in programming contests, solve algorithm <br> and data structure challenges and become a part of astonishing community
                    </p>
                    <!-- <button class="btn btn-primary btn-lg my-4 text-sm-start">Start The Enrollment</button> -->
                    <button class="join">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M11 9l10 7.675-4.236.71 2.659 5.422-2.44 1.193-2.675-5.474-3.308 2.863v-12.389zm0-5c-2.209 0-4 1.791-4 4 0 1.477.81 2.752 2 3.445v-1.225c-.609-.55-1-1.337-1-2.22 0-1.654 1.346-3 3-3s3 1.346 3 3c0 .246-.038.481-.094.709l.842.646c.154-.424.252-.877.252-1.355 0-2.209-1.791-4-4-4zm-2 9.65c-2.327-.826-4-3.044-4-5.65 0-3.309 2.691-6 6-6s6 2.691 6 6c0 .939-.223 1.824-.609 2.617l1.617 1.241c.631-1.145.992-2.459.992-3.858 0-4.418-3.581-8-8-8-4.418 0-8 3.582-8 8 0 3.727 2.551 6.849 6 7.738v-2.088z"/></svg>
                      <a href="{{ route('login') }}">Join Us</a>
                  </button>
                  <button class="contestant ms-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M18.926 5.722c-.482 1.41-.484 1.139 0 2.555.05.147.074.297.074.445 0 .449-.222.883-.615 1.156-1.256.87-1.09.651-1.562 2.067-.198.591-.77.99-1.415.99h-.003c-1.549-.005-1.28-.088-2.528.789-.262.184-.569.276-.877.276s-.615-.092-.876-.275c-1.249-.878-.98-.794-2.528-.789h-.004c-.645 0-1.216-.399-1.413-.99-.473-1.417-.311-1.198-1.562-2.067-.395-.274-.617-.708-.617-1.157 0-.148.024-.298.074-.444.483-1.411.484-1.139 0-2.555-.05-.147-.074-.297-.074-.445 0-.45.222-.883.616-1.157 1.251-.868 1.089-.648 1.562-2.067.197-.591.769-.99 1.413-.99h.004c1.545.005 1.271.095 2.528-.79.262-.183.569-.274.877-.274s.615.091.876.274c1.248.878.98.795 2.528.79h.003c.646 0 1.217.399 1.415.99.473 1.416.307 1.197 1.562 2.067.394.273.616.707.616 1.156 0 .148-.024.299-.074.445zm-1.926 1.278c0-2.761-2.238-5-5-5s-5 2.239-5 5 2.238 5 5 5 5-2.24 5-5zm-3 8v4.974l-1.945-1.474-2.055 1.525v-5.025h-2v9l4.042-3 3.958 3v-9h-2zm-2-11c1.653 0 2.999 1.346 2.999 3s-1.346 3-2.999 3c-1.654 0-3-1.346-3-3s1.346-3 3-3zm0-1c-2.209 0-4 1.791-4 4s1.791 4 4 4c2.208 0 3.999-1.791 3.999-4s-1.791-4-3.999-4z"/></svg>
                    <a href="{{ route('contest') }}">Join a contest</a>
                </button>
                </div>
                <img class="img-fluid w-25 h-50 me-4 d-none d-sm-block" src="{{ asset('assets/frontend') }}/images/hero.png" alt="">
            </div>
        </div>
    </section>

    <!-- Hero section ends here -->
    <hr>


      <!-- progress -->
      <section>

        <div class="container-fluid ms-4 mt-5 ">

          <h1 class="text-center">Practice to <span style="color: #FF5C00;">level up</span>, complete for glory</h1>

          <h2>Problems for Practice</h2>
          <div class="progress" role="progressbar" aria-label="Default striped example" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">

            <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 45%">120k</div>
          </div>

          <br>

          <h2>Accepted Solutions</h2>
          <div class="progress" role="progressbar" aria-label="Default striped example" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">

            <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" style="width: 55%">120k</div>
          </div>

          <br>

          <h2>Submissions since 2015</h2>
          <div class="progress" role="progressbar" aria-label="Default striped example" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">

            <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" style="width: 65%">12k</div>
          </div>

          <br>

          <h2>Contest Authors</h2>
          <div class="progress" role="progressbar" aria-label="Default striped example" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">

            <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" style="width: 75%">100+</div>
          </div>

          <br>

          <h2>Programming languages</h2>
          <div class="progress" role="progressbar" aria-label="Default striped example" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">

            <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" style="width: 85%">20</div>
          </div>

        </div>

        <hr>
      </section>

      <section>

          <div class="container-fluid mt-5 ms-4">

            <div class="card" style="width: 18rem;">
              <h3 class="text-center">Upcoming Contest</h3>
              <hr>
              <div class="card-body">
                <a href=""> <h5 class="card-title">Coders Combat 3.0</h5> </a>
                <hr>

                <a href=""> <h5 class="card-title">UIU girls coding contest</h5> </a>
                <hr>

                <a href=""> <h5 class="card-title"> Tough Dash</h5> </a>

              </div>
            </div>


          </div>
      <hr>
      </section>

      <!-- question section -->


      <section>

          <div class="container mt-5">

              <h3 class="text-center">An easy to use user interface built for <span style="color: #FF5C00;">UIU</span> Students. Scallable from a few to thousand of <span style="color: #FF5C00;">UIUans</span></h3>


              <button class="question mt-3">

                Have Questions?
            </button>
          </div>
          <br>
      </section>

      <!-- footer section starts here -->
@endsection
