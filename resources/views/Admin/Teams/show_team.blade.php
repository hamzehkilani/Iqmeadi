@extends('layouts.master')

@section('title')

@stop

@section('css')


    @include('layouts.bootstrab')

@endsection

@section('title_page1')
    Teams
@endsection

@section('title_page2')
    Dashboard
@endsection


@section('content')
    <div class="container" id="team">

        <div class="section-title mt-2">
            <h2 class="text-center mt-3 mb-3">Team</h2>
        </div>
        <div class="row justify-content-center">


            @foreach ($teams as $team)
                <div class="col-md-4 splide__slide mb-5 ">
                    <div class="card text-white bg-dark d-flex mx-auto" style="width:300px;">
                        <img class="card-img-top" src="{{ asset('attachments/team/' . $team->image) }}"
                            style="width: 300px;height:300px" alt="iqmedia">
                        <div class="card-body">
                            <h4 class="card-title text-light">Name : {{ $team->name }} </h4>
                            <p class="card-text">Position : {{ $team->position }}</p>
                            <div class="d-flex">
                                <button type="button" class="btn btn-success btn-sm me-4" data-bs-toggle="modal"
                                    data-bs-target="#Edit_Team{{ $team->id }}"><i class="fa fa-edit"></i></button>


                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-danger me-2" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">
                                    <i class="fa fa-trash"></i></button>
                                </button>

                            </div>
                        </div>
                    </div>
                </div>

                @include('Admin.Teams.edit')

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Delete Team</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('team.destroy', 'test') }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('DELETE')

                                    <input type="hidden" name="id" value="{{ $team->id }}">

                                    <h5>Are You Sure To Delete ?</h5>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-danger">Save changes</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            @endforeach

        </div>

    </div>

@endsection

@section('scripts')
