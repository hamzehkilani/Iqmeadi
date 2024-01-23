<!-- Edit User Information -->
<div class="modal fade" id="Edit_Service{{ $service->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title" id="exampleModalLabel">Edit Service</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('service.update', 'test') }}" method="post">
                    @csrf
                    @method('PUT')

                    <input type="hidden" name="id" value="{{ $service->id }}">
                    <div class="col-md-6 mb-4">

                        <div class="form-outline">
                            <label class="form-label" for="firstName">Name</label>
                            <input type="text" value="{{ $service->name }}" id="firstName" name="name"
                                class="form-control" />
                        </div>

                    </div>
                    {{-- <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="lastName">Last Name</label>
                            <input type="text" value="{{ $user->last_name }}" id="lastName" name="lname"
                                class="form-control  form-control-lg" />
                        </div>
                    </div> --}}

     
    
              
     
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
