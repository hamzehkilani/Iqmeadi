@extends('layouts.master')

@section('title')

@stop

@section('css')


@include('layouts.bootstrab')

@endsection

@section('title_page1')
    Footers Information
@endsection

@section('title_page2')
    Dasboard
@endsection


@section('content')
    <div class="row">
        @foreach ($footers as $footer)
            <div class="col-6 mt-4">
                <div class="card shadow-lg">
                    <div class="card-body">
                        <h6 class="card-subtitle mb-2 ">Location : {{ $footer->location }}</h6>
                        <h6 class="card-subtitle mb-2 ">Phone : {{ $footer->phone }}</h6>
                        <h6 class="card-subtitle mb-2 ">Email : {{ $footer->email }}</h6>
                        <h6 class="card-subtitle mb-2 ">Facebook : {{ $footer->facebook_url }}</h6>
                        <h6 class="card-subtitle mb-2 ">Instagram : {{ $footer->instagram_url }}</h6>
                        <h6 class="card-subtitle mb-2 ">Youtube : {{ $footer->youtube_url }}</h6>

                        <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal"
                            data-bs-target="#Edit_footer{{ $footer->id }}"><i class="fa fa-edit"></i></button>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-danger btn-sm me-2" data-bs-toggle="modal"
                            data-bs-target="#exampleModal{{ $footer->id }}">
                            <i class="fa fa-trash"></i></button>
                        </button>
                    </div>
                </div>
            </div>
            @include('Admin.Footer.edit')
            @include('Admin.Footer.delete')

        @endforeach
    </div>
@endsection

@section('scripts')


@endsection
