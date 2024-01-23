<!-- Edit User Information -->
<div class="modal fade" id="Edit_Info{{ $info->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title" id="exampleModalLabel">Edit InfoCompany
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('infoCompany.update', 'test') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <input type="hidden" name="id" value="{{ $info->id }}">
                    <input type="hidden" value="{{ $info->image }}" name="image2">

                    <div class="col-md-6 mb-4">

                        <div class="form-outline">
                            <label class="form-label" for="firstName">Name</label>
                            <input type="text" value="{{ $info->name }}" id="firstName" name="name"
                                class="form-control" />
                        </div>

                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="lastName">Image</label>
                            <input type="file" value="{{ $info->image }}" id="image" name="image"
                                class="form-control form-control" />
                        </div>
                    </div>

                    <div class="col-md-12 mb-4">
                        <div class="form-outline">
                            <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                            <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3">{{ $info->description }}</textarea>
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
                    <div class="form-group">
                        <img id="showImage" src="{{ asset('assets/img/no image.jpg') }}" alt="no image" width="120px"
                            height="100px">
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>
