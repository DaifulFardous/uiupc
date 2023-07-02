@extends('admin.master')
@section('content')
<div class="col-md-4"></div>
<div class="col-md-4">
    @if(Session::has('success'))
    <div class="alert alert-success">
        {{ Session::get('success') }}
    </div>
     @endif
    <form action="{{ route('store.result') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Last Modified Date:</label>
            <input type="date" class="form-control" name="date">
           <select class="form-control" style="margin-top: 12px" name="position">
            <option selected disabled>--Select The Position--</option>
            <option value="1">1st</option>
            <option value="2">2nd</option>
            <option value="3">3rd</option>
            <option value="4">4th</option>
            <option value="5">5th</option>
           </select>
            <label>Name</label>
            <input type="text" class="form-control" name="name">
        </div>
        <button type="submit" class="mt-5 btn btn-primary btn-block">Save</button>
    </form>
    <a href="{{ route('reset.list') }}" class="btn btn-warning" style="margin-top: 12px">Reset List</a>
</div>
<div class="col-md-4"></div>
@endsection
