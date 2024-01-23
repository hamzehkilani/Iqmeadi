<!-- Modal -->
<div class="modal fade" id="exampleModal{{$sector->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete Sector</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('sector.destroy', 'test') }}" method="post">
                    @csrf
                    @method('DELETE')

                    <input type="hidden" name="id" value="{{$sector->id}}">


                
                    <h5>Are You Sure To Delete ? </h5>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger">Save changes</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
