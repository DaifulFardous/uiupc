@extends('admin.master')
@section('content')
<div class="col-md-12">
    <table class="table table-bordered table-dark">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">File</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($submissions as $item)
              <tr>
                <td>{{ $loop ->index+1 }}</td>
                <td>{{ $item ->user->name }}</td>
                <td>{{ $item->file }}</td>

                <td>
                    <nobr>
                    <a href="{{ url('/admin/download/'.$item->id) }}" class="btn btn-sm btn-warning"
                        >Download</a>
                    </nobr>
                </td>
              </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
