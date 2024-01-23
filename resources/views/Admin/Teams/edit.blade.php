<!-- Edit User Information -->
<div class="modal fade" id="Edit_Team{{ $team->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title" id="exampleModalLabel">Edit Team</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('team.update', 'test') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <input type="hidden" name="id" value="{{ $team->id }}">
                    <input type="hidden" value="{{$team->image}}" name="image2" >

                    <div class="col-md-6 mb-4">

                        <div class="form-outline">
                            <label class="form-label" for="firstName">Name</label>
                            <input type="text" value="{{ $team->name }}" id="firstName" name="name"
                                class="form-control" />
                        </div>

                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="lastName">Position</label>
                            <input type="text" value="{{ $team->position }}" id="lastName" name="position"
                                class="form-control form-control" />
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="image">Image</label>
                            <input type="file" value="{{ $team->image }}" id="image" name="image"
                                class="form-control form-control" />
                        </div>
                    </div>
              
     
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Save changes</button>
                    </div>
                    <div class="form-group">
                        <img id="showImage" src="{{ asset('attachments/team/' . $team->image) }}"
                            alt="iqmedia" width="120px" height="100px">
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</div>

