@extends('master')
@section('content')

    <section>

        <div class="my-container m-5">
            <div class="p-5">
                <h1>Problems to Discuss</h1>
            </div>
            <hr>
            @foreach ($problems as $item)
            <div class="">
                <a class="p-5 categories-styling" href="{{ url('discussion/'.$item->id) }}">{{ $item->name }}</a>
            </div>
            <hr>
            <br>
            @endforeach
        </div>
    </section>

@endsection
