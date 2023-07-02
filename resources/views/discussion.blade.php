@extends('master')
@section('content')
<section>
    <div class="container">
        <div class="row">
          <div class="col-md-6 pr-4 mt-4" style="">
            <div class="my-container-1">
                <div class="problem-decription p-5">
                    <div class="problem-name">
                        <h3>{{ $problem->name }}</h3>
                        <hr>
                        <p>{{ $problem->description }}</p>
                    </div>
                    <div class="output">
                        <h3>Output</h3>
                        <br>
                        <p>{{ $problem->output }}</p>
                    </div>

                </div>
            </div>
          </div>

          <div class="col-md-1">

          </div>

          <div class="col-md-4 pl-4 mt-4">
            <div class="my-container-2">
                <div class="p-5">
                    <div class="card card-body">
                        <h6 class="card-title">Leave a Comment</h6>
                        @if(Session::has('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                        </div>
                    @endif
                        <form action="{{ url("store/comment") }}" method="post">
                            @csrf
                            <input type="hidden" name="prob_id" value="{{ $problem->id }}">
                            <textarea name="body" class="form-control" rows="3" required></textarea>
                            <button type="submit" class="btn btn-primary mt-3">Comment</button>
                        </form>
                    </div>
                    <div class="card card-body shadow-sm mt-3">
                       @if(Session::has('deleted'))
                        <div class="alert alert-danger">
                            {{ Session::get('deleted') }}
                        </div>
                         @endif
                        @forelse ($comments as $comment)
                        <div class="m-2">
                            <div class="detail-area">
                                <h6>{{ $comment->user->name}}
                                 <small class="text-primary">Commented on: {{ $comment->created_at->format("d-m-y") }}</small>
                                </h6>
                                <p>{{ $comment->body }}</p>
                             </div>
                             @if (Auth::check() && Auth::id() == $comment->user_id)
                             <div>
                                <a href="{{ url('delete/comment/'.$comment->id) }}" class="btn btn-danger btn-sm">Delete</a>
                            </div>
                            @endif
                        </div>
                        @empty
                            <div class="m-2">
                                <div class="alert alert-success">
                                No such comment!!
                                </div>
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
          </div>
        </div>
      </div>
      <br>
</section>
@endsection
