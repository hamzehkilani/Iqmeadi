<div>


    <div class="row ">
        <div class="col-lg-7 mx-auto">
            <div class="card shadow-lg mt-2 mx-auto p-4 bg-light">
                <div class="card-body bg-light">

                    <div class="container">
                        <form method="POST" action="{{ route('video.store') }}" id="contact-form"
                            enctype="multipart/form-data">
                            @csrf

                            <div class="controls">

                                <div class="row">
                                    <div class="col-md-6 mt-3">
                                        <div class="form-group">

                                            <label for="exampleFormControlTextarea1" class="mb-2">Reel </label>
                                            <input type="file" class="form-control" id="exampleFormControlTextarea1" name="video">
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    {{-- <div class="col-md-6 mt-4">
                                        <div class="form-group">
                                            <label for="form_need" class="mt-2">Please specify Service *</label>
                                            <select id="form_need" name="service_id" class="form-control"
                                                data-error="Please specify your need.">
                                                <option value="" selected disabled>--Select Service--
                                                </option>
                                                @foreach ($services as $service)
                                                    <option value="{{ $service->id }}">{{ $service->name }}
                                                    </option>
                                                @endforeach

                                            </select>

                                        </div>
                                    </div> --}}

                                    <div class="col-md-6 mt-4">
                                        <div class="form-group">
                                            <label for="form_need" class="mt-2">Please specify Client *</label>
                                            <select id="form_need" name="client_id" class="form-control" required="required"
                                                data-error="Please specify your need.">
                                                <option value="" selected disabled>--Select Client--
                                                </option>
                                                @foreach ($clients as $client)
                                                    <option value="{{ $client->id }}">{{ $client->name }}
                                                    </option>
                                                @endforeach
                                            </select>
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
                                            style="margin-left: 9%" value="Add Reel">
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
</div>
