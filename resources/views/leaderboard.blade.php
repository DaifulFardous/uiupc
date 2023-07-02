@extends('master')
@section('content')
 <!-- Leader board starts here -->

    <div class="container mt-4">
        <h1 style="font-family: 'Aldrich', sans-serif;">Leader<span style="color: #FF5C00;">Board</span> </h1>
        <table class="table">
          <thead>
            <tr>
              <th class="header"><img src="https://img.icons8.com/office/30/null/user.png"/> Name</th>
              <th class="header" ><img src="https://img.icons8.com/fluency/30/null/star.png"/> Points</th>

              <th class="header"><img src="https://img.icons8.com/offices/30/null/olympic-medal-silver.png"/> Rank</th>

            </tr>
          </thead>
          <tbody>
            <tr>
              @foreach ($users as $user)
              <tr>
                  <td>{{ $user->user_name }}</td>
                  <td>{{ $user->rank*10 }}</td>
                  <td class="rank">{{ $loop ->index+1 }}</td>
             </tr>
              @endforeach
            </tr>
          </tbody>
        </table>
      </div>

    <!-- Leaderboard ends here -->
@endsection
