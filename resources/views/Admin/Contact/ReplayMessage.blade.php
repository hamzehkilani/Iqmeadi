 <!-- Modal -->
 <div class="modal fade" id="exampleModal{{ $contact->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Replay Message</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('ReplayMessage') }}" method="post">
                    @csrf
                    <input type="hidden" name="email" value="{{$contact->email}}" id="">
                    <input type="hidden" name="id" value="{{$contact->id}}" id="">

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1" class="mb-2">Replay Message</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" name="message" rows="3"></textarea>
                      </div>


                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Send Message</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>