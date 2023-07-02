@extends('master')
@section('content')
<section>

    <div class="my-container m-5">
        <div class="p-5">
            <h1>Contest Problems</h1>
        </div>
        <hr>
     <div class="row">
        <div class="col-md-5">
            @foreach ($problems as $item)
            <a class="p-5 categories-styling" href="{{ url('pcproblem/'.$item->id) }}">{{ $item->name }}</a>
            <br>
            <hr>
            <br>
            <br>
            @endforeach
        </div>
        <div class="col-md-2"></div>
        <div class="col-md-5">
            <p>Upload your answer Here.</p><br>
            <p>You must Upload in zip format</p>
            @if(Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
            </div>
        @endif
            @if(Session::has('danger'))
            <div class="alert alert-danger">
                {{ Session::get('danger') }}
            </div>
        @endif
           <form action="{{ route('contest.upload') }}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" value="{{ $contest->name }}" name="contest">
            <input class="form-control" type="file" name="pcSubmission">
            <button class="mt-2 btn btn-success">Upload</button>
           </form>
        </div>
     </div>
    </div>
</section>
@endsection
