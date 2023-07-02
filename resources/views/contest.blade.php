@extends('master')
@section('content')
<div class="container mt-4">
    <h1 style="font-family: 'Aldrich', sans-serif;">Con<span style="color: #FF5C00;">test</span> </h1>
<div class="row">
    <div class="col-sm-6 mt-4 mb-4">
    @forelse ($contets as $item)
        <div class="card mt-3">
          <div class="card-body">
            <h5 class="card-title">{{ $item->name }}</h5>
            <h4 class="card-text">Time limit: <span style="color: #FF5C00;">{{ $item->time }}</span><span style="color: #FF5C00;">Hours</span></h4>
            <a href="{{ url('contest/problems/'.$item->id) }}" class="btn btn-warning">Join Contest</a>
          </div>
        </div>
    @empty
      <h4>No Items..</h4>
    @endforelse
    </div>
    <div class="col-sm-6 mt-4 mb-4">
        <div class="card mt-3">
            <div class="card-body">
              <h5 class="card-title">Result:</h5>
              <p>Last Modified: {{ $date }}</p>
              <table class="table table-dark">
                <thead>
                  <tr>
                    <th scope="col">Position</th>
                    <th scope="col">Name</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($results as $item)
                    <tr>
                        <td>{{ $item->position }}</td>
                        <td>{{ $item->name }}</td>
                      </tr>
                    @endforeach
                </tbody>
              </table>
            </div>
          </div>
    </div>
  </div>
</div>
@endsection
