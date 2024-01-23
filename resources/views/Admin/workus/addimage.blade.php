@extends('layouts.master')

@section('title')

@stop

@section('css')


    @include('layouts.bootstrab')

@endsection

@section('title_page1')
    Add Images
@endsection

@section('title_page2')
    Dashboard
@endsection


@section('content')
    <style>
        body {
            font-family: 'Lato', sans-serif;
        }

        h1 {
            margin-bottom: 40px;
        }

        label {
            color: #333;
        }

        .btn-send {
            font-weight: 300;
            text-transform: uppercase;
            letter-spacing: 0.2em;
            width: 80%;
            margin-left: 3px;
        }

        .help-block.with-errors {
            color: #ff5050;
            margin-top: 5px;
        }

        .card {
            margin-left: 10px;
            margin-right: 10px;
        }
    </style>
    <div class=" text-center mt-5 ">

        <h1>Add Images</h1>


    </div>


    <div class="row ">
        <div class="col-lg-7 mx-auto">
            <div class="card shadow-lg mt-2 mx-auto p-4 bg-light">
                <div class="card-body bg-light">

                    <div class="container">
                        <form method="POST" action="{{ route('WorkUsImages') }}" id="contact-form"
                            enctype="multipart/form-data">
                            @csrf

                            <div class="controls">

                                <div class="row">
                                    <div class="col-md-6 mt-3">
                                        <div class="form-group">
                                            <label for="form_name"class="mb-2">Image *</label>
                                            <input id="form_name" type="file" name="image" class="form-control"
                                                placeholder="Please enter your image" required="required"
                                                data-error="Image is required.">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mt-4">
                                        @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif
                                        <input type="submit" class="btn btn-success btn-send pt-2 btn-block "
                                            style="margin-left: 9%" value="Add Images">
                                    </div>
                                </div>
                            </div>
                    </div>
                    </form>
                </div>
            </div>


        </div>
        <!-- /.8 -->

    </div>
    <!-- /.row-->
@endsection

@section('scripts')

@endsection
