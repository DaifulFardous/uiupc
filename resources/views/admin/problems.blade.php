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
            <th scope="col">Category</th>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Output</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($problems as $item)
              <tr>
                <td>{{ $loop ->index+1 }}</td>
                @if ($item->category)
                <td>
                    {{ $item->category->name }}
                </td>
                @else
                <td>
                   Null
                </td>
                @endif
                <td>{{ $item->name }}</td>
                <td>{{ $item->description }}</td>
                <td>{{ $item->output }}</td>
                <td>
                    <nobr>
                    <a href="{{ url('admin/problemDel/'.$item->id) }}" class="btn btn-sm btn-danger"
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
