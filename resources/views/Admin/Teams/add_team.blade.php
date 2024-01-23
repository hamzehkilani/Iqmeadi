

@extends('layouts.master')

@section('title')

@stop

@section('css')


@include('layouts.bootstrab')

@endsection

@section('title_page1')
   Add Team
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

        <h1>Add Team</h1>


    </div>


    <div class="row ">
        <div class="col-lg-7 mx-auto">
            <div class="card shadow-lg mt-2 mx-auto p-4 bg-light">
                <div class="card-body bg-light">
                    <div class="container">
                        <form method="POST" action="{{ route('team.store') }}" enctype="multipart/form-data"
                            id="contact-form" role="form">
                            @csrf
                            <div class="controls">

                                <div class="row">
                                    <div class="col-md-6 mt-3">
                                        <div class="form-group">
                                            <label for="form_name"class="mb-2">Name *</label>
                                            <input id="form_name" type="text" name="Name"
                                                class="form-control" placeholder="Please Enter Your FullName *"
                                                required="required" data-error="FullName is required.">

                                        </div>
                                    </div>
                                    <div class="col-md-6 mt-3">
                                        <div class="form-group">
                                            <label for="form_name"class="mb-2">Position *</label>
                                            <input id="form_name" type="text" name="position"
                                                class="form-control" placeholder="Please Enter Position *"
                                                required="required" data-error="FullName is required.">

                                        </div>
                                    </div>


                                </div>

                                <div class="row">

                                    <div class="col-md-6 mt-3">
                                            <div class="form-group">
                                                <label for="form_lastname" class="mb-2"> Image *</label>
                                                <input id="image" type="file" name="image"
                                                    class="form-control dropify" data-height="100" />
                                            </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mt-4">
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    <input type="submit" class="btn btn-success btn-send mb-2 pt-2 btn-block "
                                       value="Save">

                                       <div class="form-group">
                                        <img id="showImage" class="mt-4" src="{{ asset('assets/img/no image.jpg') }}" alt="no image" width="120px"
                                            height="100px">
                                    </div>
                                    <br>
                                </div>
                            </div>
                    </div>

                </div>
                </form>
            </div>
        </div>


    </div>
    <!-- / -->

</div>
<!-- /.row-->
@endsection

@section('scripts')


@endsection
