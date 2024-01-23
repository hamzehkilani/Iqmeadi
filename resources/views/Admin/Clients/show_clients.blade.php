
@extends('layouts.master')

@section('title')

@stop

@section('css')


@include('layouts.bootstrab')

@endsection

@section('title_page1')
    Clients
@endsection

@section('title_page2')
   Dasboard
@endsection


@section('content')
<div class="row">
    @foreach ($clients as $client)
        <div class="col-md-6">
            <div class="card shadow-lg" >
                <div class="card-body">
                    <img src="{{ asset('attachments/clientsImage/' . $client->image) }}"  height="120px" alt="iqmedia">
                    <h5 class="card-title"> Full Name : {{ $client->name }}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Phone : {{ $client->phone }}</h6>
                    <h6 class="card-subtitle mb-2 text-muted">Location : {{ $client->location }}</h6>
                    <h6 class="card-subtitle mb-2 text-muted">Duration : {{ $client->duration }}</h6>
                    <h6 class="card-subtitle mb-2 text-muted">Price : {{ $client->price }}</h6>
                    <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal"
                    data-bs-target="#Edit_client{{$client->id}}"><i class="fa fa-edit"></i></button>
                    <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                    data-bs-target="#exampleModal{{$client->id}}"><i class="fa fa-trash"></i></button>
                </div>
            </div>
        </div>
        @include('Admin.Clients.delete')
        @include('Admin.Clients.edit')
    @endforeach
        {{$clients->links()}}

</div>
@endsection

@section('scripts')


@endsection
