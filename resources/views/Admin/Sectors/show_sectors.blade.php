@extends('layouts.master')

@section('title')

@stop

@section('css')


@include('layouts.bootstrab')

@endsection

@section('title_page1')
    Setors
@endsection

@section('title_page2')
   Dasboard
@endsection


@section('content')
<div class="row">
    @foreach ($sectors as $sector)
        <div class="col-md-6">
            <div class="card shadow-lg" >
                <div class="card-body">
                    <img src="{{ asset('attachments/clientsImage/' . $sector->image) }}"  height="120px" alt="iqmedia">
                    <h5 class="card-title">  Name Sector: {{ $sector->name }}</h5>
                    <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal"
                    data-bs-target="#Edit_sector{{$sector->id}}"><i class="fa fa-edit"></i></button>
                    <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                    data-bs-target="#exampleModal{{$sector->id}}"><i class="fa fa-trash"></i></button>
                </div>
            </div>
        </div>
        @include('Admin.Sectors.delete')
        @include('Admin.Sectors.edit')
    @endforeach
  

</div>
@endsection

@section('scripts')


@endsection
