@extends('master')
@section('content')
 <!-- Problem Categories code starts here -->
 <section>

    <div class="my-container m-5">
        <div class="p-5">
            <h1>Categories</h1>
        </div>
        <hr>
        @foreach ($categories as $item)
        <div class="">
            <a class="p-5 categories-styling" href="{{ url('problems/'.$item->id) }}">{{ $item->name }}</a>
        </div>
        <hr>
        <br>
        @endforeach
    </div>
</section>
<!-- Problem Categories codes end here -->

@endsection
