<!-- Edit User Information -->
<div class="modal fade" id="Edit_User{{ $user->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title" id="exampleModalLabel">Edit User</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('team.update', 'test') }}" method="post">
                    @csrf
                    @method('PUT')

                    <input type="hidden" name="id" value="{{ $user->id }}">
                    <div class="col-md-6 mb-4">

                        <div class="form-outline">
                            <label class="form-label" for="firstName">First Name</label>
                            <input type="text" value="{{ $user->first_name }}" id="firstName" name="fname"
                                class="form-control form-control-lg" />
                        </div>

                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="lastName">Last Name</label>
                            <input type="text" value="{{ $user->last_name }}" id="lastName" name="lname"
                                class="form-control  form-control-lg" />
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6 mb-4">

                            <label class="form-label select-label">Choose Roles</label>
                            <select class="select form-control-sm" name="role_id">
                                <option value="1" disabled>{{ $user->role->name }}</option>
                                @foreach ($roles as $role)
                                    <option value="{{ $role->id }}">{{ $role->name }}</option>
                                @endforeach
                            </select>

                        </div>
                    </div>

                    <div class="col-md-6 mb-4">

                        <div class="form-outline">
                            <label class="form-label" for="lastName">Password</label>
                            <input type="password" id="password" name="password" class="form-control form-control-lg" />
                        </div>

                    </div>

                    <div class="col-md-6 mb-4">

                        <div class="form-outline">
                            <label class="form-label" for="lastName">Confirm Password</label>
                            <input type="password" id="password" name="Confirmpassword"
                                class="form-control form-control-lg" />
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
