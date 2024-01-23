@extends('layouts.master')

@section('title')

@stop

@section('css')


@include('layouts.bootstrab')

@endsection

@section('title_page1')
    Add Client
@endsection

@section('title_page2')
    Dasboard
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

        <h1>ADD CLIENT</h1>


    </div>


    <div class="row ">
        <div class="col-lg-7 mx-auto">
            <div class="card shadow-lg  mt-2 mx-auto p-4 bg-light">
                <div class="card-body bg-light">

                    <div class="container">
                        <form method="POST" action="{{ route('client.store') }}" id="contact-form" role="form" enctype="multipart/form-data">
                            @csrf


                            <div class="controls">

                                <div class="row">

                                    <div class="col-md-6 mt-3">
                                        <div class="form-group">
                                            <label for="form_lastname" class="mb-2"> Name *</label>
                                            <input id="form_lastname" type="text" name="name" class="form-control"
                                                placeholder="Please enter your  Name *" required="required"
                                                data-error="Company is required.">
                                        </div>
                                    </div>

                                    <div class="col-md-6 mt-3">
                                        <div class="form-group">
                                            <label for="form_lastname" class="mb-2"> Email *</label>
                                            <input id="form_lastname" type="text" name="email" class="form-control"
                                                placeholder="Please enter your Email  *" required="required"
                                                data-error="Company is required.">
                                        </div>
                                    </div>
                                </div>



                                <div class="row">

                                    <div class="col-md-6 mt-3">
                                        <div class="form-group ">
                                            <label for="form_email">Phone *</label>
                                            <input id="form_email" type="phone" name="phone" class="form-control"
                                                placeholder="Please enter your phone *" required="required"
                                                data-error="Valid phone is required.">

                                        </div>
                                    </div>


                                    <div class="col-md-6 mt-3">
                                        <div class="form-group">
                                            <label for="form_email" class="mb-2">Location *</label>
                                            <input id="form_email" type="text" name="location" class="form-control"
                                                placeholder="Please enter your location *" required="required"
                                                data-error="Valid location is required.">


                                        </div>
                                    </div>


                                </div>


                                <div class="row">

                                    <div class="col-md-6 mt-3">
                                        <div class="form-group ">
                                            <label for="form_email" class="mb-2">duration *</label>
                                            <input id="form_email" type="phone" name="duration" class="form-control"
                                                placeholder="Please enter duration *" required="required"
                                                data-error="Valid phone is required.">

                                        </div>
                                    </div>

                                    <div class="col-md-6 mt-3">
                                        <div class="form-group">
                                            <label for="form_email" class="mb-2">price *</label>
                                            <input id="form_email" type="number" name="price" class="form-control"
                                                placeholder="Please enter price *" required="required"
                                                data-error="Valid price is required.">


                                        </div>
                                    </div>

                                </div>



                                <div class="row">
                                    <div class="col-md-6 mt-3">
                                        <div class="form-group">
                                            <label for="form_name"class="mb-2">Image *</label>
                                            <input id="form_name" type="file" name="image" class="form-control"
                                                multiple placeholder="Please enter your image *" required="required"
                                                data-error="Image is required.">

                                        </div>
                                    </div>



                                </div>

                                <div class="row">
                                    <div class="form-group mt-4">
                                        <label for="form_message" class="mb-2">Note (Optional)</label>
                                        <textarea id="form_message" name="note" class="form-control" placeholder="Write your Note ." rows="4"
                                            data-error="Please, leave us a message."></textarea>
                                    </div>
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
                                            style="margin-left: 9%" value="Save Info ">
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
    <!-- row-->


@endsection

@section('scripts')

@endsection
