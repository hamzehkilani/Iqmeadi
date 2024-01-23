@php
    $services = DB::select('select * from services');
@endphp

<!-- Edit User Information -->
<div class="modal fade" id="Edit_client{{ $client->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title" id="exampleModalLabel">Edit Client</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('client.update', 'test') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <input type="hidden" name="id" value="{{ $client->id }}">
                    <div class="col-md-6 mb-4">
                        <div>
                            <label class="form-label" for="firstName">Name</label>
                            <input type="text" value="{{ $client->name }}" id="firstName" name="name"
                                class="form-control" />
                        </div>

                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="phone">Phone </label>
                            <input type="text" value="{{ $client->phone }}" id="phone" name="phone"
                                class="form-control  form-control-lg" />
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="lastName">Location</label>
                            <input type="text" value="{{ $client->location }}" id="lastName" name="location"
                                class="form-control  form-control-lg" />
                        </div>
                    </div>


                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="lastName">Duration</label>
                            <input type="text" value="{{ $client->duration }}" id="duration" name="duration"
                                class="form-control  form-control-lg" />
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="lastName">Price</label>
                            <input type="text" value="{{ $client->price }}" id="lastName" name="price"
                                class="form-control  form-control-lg" />
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="form-group">
                            <label for="form_name"class="mb-2">Image *</label>
                            <input id="form_name" type="file" name="image" class="form-control" multiple
                                placeholder="Please enter your image *"
                                data-error="Image is required.">

                        </div>
                    </div>




            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
            </form>
        </div>
    </div>
</div>
</div>
