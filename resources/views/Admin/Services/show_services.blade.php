@extends('layouts.master')

@section('title')

@stop

@section('css')


@include('layouts.bootstrab')

@endsection

@section('title_page1')
    Services
@endsection

@section('title_page2')
    Dashboard
@endsection


@section('content')

    <div class=" text-center mt-5 ">

        <h1>ADD SERVICE</h1>


    </div>


    <div class="row">
        @foreach ($services as $service)
            <div class="col-4 mt-4">
                <div class="card shadow-lg">
                    @if ($service->image != null)
                        <img src="{{ asset('attachments/Service/' . $service->image) }}" class="card-img-top"
                            alt="...">
                    @endif

                    <div class="card-body">
                        <p class="card-text">{{ $service->name }}</p>

                        <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal"
                            data-bs-target="#Edit_Service{{ $service->id }}"><i class="fa fa-edit"></i></button>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-danger btn-sm me-2" data-bs-toggle="modal"
                            data-bs-target="#exampleModal{{$service->id}}">
                            <i class="fa fa-trash"></i></button>
                        </button>
                    </div>


                </div>

            </div>
            @include('Admin.Services.delete')
            @include('Admin.Services.edit')
        @endforeach
    </div>
@endsection

@section('scripts')


@endsection
