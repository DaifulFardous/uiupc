@extends('admin.master')
@section('content')
<div class="col-md-4"></div>
<div class="col-md-4">
    @if(Session::has('success'))
    <div class="alert alert-success">
        {{ Session::get('success') }}
    </div>
     @endif
    <form action="{{ route('store.contest') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Name of Contest</label>
            <input type="text" class="form-control" name="name">
            <label>Time Limit</label>
            <input type="number" class="form-control" name="time">
        </div>
        <button type="submit" class="mt-5 btn btn-primary btn-block">Save</button>
    </form>
</div>
<div class="col-md-4"></div>
@endsection
