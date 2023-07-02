@extends('admin.master')
@section('content')
<div class="col-md-12">
    @if(Session::has('success'))
    <div class="alert alert-success">
        {{ Session::get('success') }}
    </div>
     @endif
    <table class="table table-bordered table-dark">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($categories as $item)
              <tr>
                <td>{{ $loop ->index+1 }}</td>
                <td>{{ $item->name }}</td>
                <td>
                    <nobr>
                    <a href="{{ url('admin/categoryDel/'.$item->id) }}" class="btn btn-sm btn-danger"
                        onclick="alert('Are you sure, you whant to delete this record??')"
                        >Delete</a>
                    </nobr>
                </td>
              </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
