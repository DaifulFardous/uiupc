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

                        {{-- <div class="sample-input">
                            <h3>Sample-input</h3>
                            <br>
                            <p>A = 123</p>
                        </div> --}}

                        {{-- <div class="sample-output">
                            <h3>Sample Output</h3>
                            <br>
                            <p>321</p>
                        </div> --}}
                    </div>
                </div>
              </div>

              <div class="col-md-1">

              </div>

              <div class="col-md-3 pl-4 mt-4">
                <div class="my-container-2">
                    <div class="p-5">
                        <div class="">
                            <p>Click The Compiler button. A modal will appear</p>
                            <br>
                            <button type="button" class="submit btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Compiler
                            </button>
                            <h3 class="mt-3">Your Output</h3><hr>
                            @if(Session::has('success'))
                                <div class="alert alert-success">
                                    {{ Session::get('success') }}
                                </div>
                            @endif
                            @if(Session::has('warning'))
                                <div class="alert alert-warning">
                                    {{ Session::get('warning') }}
                                </div>
                            @endif
                            @if(Session::has('danger'))
                                <div class="alert alert-danger">
                                    {{ Session::get('danger') }}
                                </div>
                            @endif
                            <form action="{{ url("submission") }}" method="POST">
                                @csrf
                                @if(Session::has('output'))
                                  <input type="text" class="output" value="{{ Session::get('output') }}">
                                  <input type="text" class="output" value="{{ Session::get('output') }}" name="output" hidden>
                                @else
                                    <input type="text" class="output">
                                 @endif
                                 <input type="number" hidden value="{{ $problem->id }}" name="prob_id">
                                <button type="submit" class="btn btn-success mt-3">
                                    <img src="https://img.icons8.com/material-rounded/24/null/upload--v2.png"/>
                                    Submit</button>
                            </form>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Submit Code Here</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form action="{{ url('compile') }}" method="POST">
                                        @csrf
                                        <div class="modal-body">
                                            <select id="languages" class="languages" onchange="changeLanguage()" name="language">
                                                <option value="c"> C </option>
                                                <option value="cpp"> C++ </option>
                                                <option value="php"> PHP </option>
                                                <option value="python"> Python </option>
                                                <option value="node"> Node JS </option>
                                            </select>
                                                <div class="editor" id="editor" style="height: 300px" onkeyup="display()">
                                                </div>
                                                <textarea id="code" name="code" hidden></textarea>
                                        </div>
                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" id="run" class="btn btn-primary">Compile</button>
                                        </div>
                                    </form>
                                </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
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
    {{-- <script>
        $(document).ready(function() {
            $("#run").click(function(e) {
                $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
                });
                $.ajax({
                    url: "{{ route('compile') }}",
                    type: "POST",
                    data: {
                        language: $("#languages").val(),
                        code: editor.getSession().getValue()
                    },

                    success: function(response) {
                        $(".output").text(response)
                    }
                })
            });
        });
        </script> --}}
    <!-- Problem Description and submission part ends here -->
@endsection
