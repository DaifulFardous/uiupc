@extends('admin.master')
@section('content')
<div class="col-md-3"></div>
<div class="col-md-6">
    @if(Session::has('success'))
    <div class="alert alert-success">
        {{ Session::get('success') }}
    </div>
     @endif
    <form action="{{ route('store.pcproblem') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <select class="form-control form-select" name="contest_id">
                <option value="">Select a Contest</option>
                @foreach ($contests as $item)
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="form-group">
            <label>Description</label>
            <textarea class="form-control" rows="3" name="description"></textarea>
        </div>
        <div class="form-group">
            <label>Output</label>
            <input type="text" class="form-control" name="output">
        </div>
        <button type="submit" class="mt-5 btn btn-primary btn-block">Save</button>
    </form>
</div>
<div class="col-md-3"></div>
@endsection
