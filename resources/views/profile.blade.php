@extends('master')
@section('content')
<section class="vh-100" style="background-color: #f4f5f7;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-lg-6 mb-4 mb-lg-0">
          <div class="card mb-3" style="border-radius: .5rem;">
            <div class="row g-0">
              <div class="col-md-4 gradient-custom text-center text-white"
                style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava1-bg.webp"
                  alt="Avatar" class="img-fluid my-5" style="width: 80px;" />
                <i class="far fa-edit mb-5"></i>
              </div>
              <div class="col-md-8">
                <div class="card-body p-4">
                  <h6>Information</h6>
                  <hr class="mt-0 mb-4">
                  <div class="row pt-1">
                    <div class="col-6 mb-3">
                      <h6>Name</h6>
                      <p class="text-muted">{{ $user->name }}</p>
                    </div>
                    <div class="col-6 mb-3">
                        <h6>Email</h6>
                        <p class="text-muted">{{ $user->email }}</p>
                      </div>
                  </div>
                  <hr class="mt-0 mb-4">
                  <div class="row pt-1">
                    <div class="col-6 mb-3">
                      <h6>Submissions</h6>
                      @foreach ($submissions as $item)
                      @if($item->problem)
                      <a class="categories-styling" href="{{ url('problem/'.$item->prob_id) }}">{{ $item->problem->name }}</a>
                      @endif
                      @endforeach
                    </div>
                    <div class="col-6 mb-3">
                        <h6>Points</h6>
                        <p class="text-muted">{{ $point*10 }}</p>
                      </div>
                  </div>
                  <div class="d-flex justify-content-start">
                    <a href="#!"><i class="fab fa-facebook-f fa-lg me-3"></i></a>
                    <a href="#!"><i class="fab fa-twitter fa-lg me-3"></i></a>
                    <a href="#!"><i class="fab fa-instagram fa-lg"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
