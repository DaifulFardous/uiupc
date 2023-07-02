@extends('master')
@section('content')
     <!-- Problem Description and submission part starts here -->
     <section>
        <div class="container">
            <div class="row">
              <div class="col-md-7 pr-4 mt-4" style="">
                <div class="my-container-1">
                    <div class="problem-decription p-5">
                        <div class="problem-name">
                            <h3>{{ $problem->name }}</h3>
                            <hr>
                            <p>{{ $problem->description }}</p>
                        </div>

                        {{-- <div class="input">
                            <h3>Input</h3>
                            <br>
                            <p>The input will contain an integer A.</p>
                        </div> --}}

                        <div class="output">
                            <h3>Output</h3>
                            <br>
                            <p>{{ $problem->output }}</p>
                        </div>

                    </div>
                </div>
              </div>

              <div class="col-md-1">

              </div>
            </div>
          </div>
          <br>
          <meta name="csrf-token" content="{{ csrf_token() }}">
    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{ asset('assets/frontend/editor') }}/js/lib/ace.js"></script>
    <script src="{{ asset('assets/frontend/editor') }}/js/lib/theme-monokai.js"></script>
    <script src="{{ asset('assets/frontend/editor') }}/js/ide.js"></script>
    <script>
        function display(){
            var storedValue = editor.getSession().getValue();
            document.getElementById('code').value = storedValue;
        }
    </script>
@endsection
