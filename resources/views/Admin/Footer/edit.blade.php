<!-- Edit User Information -->
<div class="modal fade" id="Edit_footer{{$footer->id}}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title" id="exampleModalLabel">Edit Footer
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('footer.update', 'test') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <input type="hidden" name="id" value="{{ $footer->id }}">

                    <div class="col-md-6 mb-4">

                        <div class="form-outline">
                            <label class="form-label" for="firstName">Location</label>
                            <input type="text" value="{{ $footer->location }}" id="firstName" name="location"
                                class="form-control" />
                        </div>

                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="lastName">phone</label>
                            <input type="phone" value="{{ $footer->phone }}" id="image" name="phone"
                                class="form-control form-control" />
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="lastName">Email</label>
                            <input type="phone" value="{{ $footer->email }}" id="image" name="email"
                                class="form-control form-control" />
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="lastName">Facebook</label>
                            <input type="text" value="{{ $footer->facebook_url }}" id="image" name="Facebook"
                                class="form-control form-control" />
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="lastName">Instagram</label>
                            <input type="text" value="{{ $footer->instagram_url }}" id="image" name="Instagram"
                                class="form-control form-control" />
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="lastName">Youtube</label>
                            <input type="text" value="{{ $footer->youtube_url }}" id="image" name="youtube"
                                class="form-control form-control" />
                        </div>
                    </div>
                    
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Save changes</button>
                    </div>

                </form>
            </div>
        </div>
    </div>

</div>
