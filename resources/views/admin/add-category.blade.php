@extends('admin.master')
@section('content')
<div class="col-md-4"></div>
<div class="col-md-4">
    @if(Session::has('success'))
    <div class="alert alert-success">
        {{ Session::get('success') }}
    </div>
     @endif
    <form action="{{ route('store.category') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Name of Problem Category</label>
            <input type="text" class="form-control" name="name">
        </div>
        <button type="submit" class="mt-5 btn btn-primary btn-block">Save</button>
    </form>
</div>
<div class="col-md-4"></div>
@endsection
