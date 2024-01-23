@extends('layouts.master')

@section('title')

@stop

@section('css')

    @include('layouts.bootstrab'){{--  --}}

@endsection

@section('title_page1')
    معلومات الشركة
@endsection

@section('title_page2')
    لوحة التحكم
@endsection


@section('content')
    <div class="row">
        @foreach ($infos as $info)
            <div class="col-6 mt-4">
                <div class="card shadow-lg">
                    <div class="card-body">
                        <img src="{{ asset('attachments/InfoCompany/' . $info->image) }}" height="150px" alt="iqmedia">
                        <h6 class="card-subtitle mb-2 mt-2 ">Name : {{ $info->name }}</h6>
                        <p class="card-subtitle mb-2 text-muted">Description : {{ $info->description }}</p>
                        <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal"
                            data-bs-target="#Edit_Info{{ $info->id }}"><i class="fa fa-edit"></i></button>
                        <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                            data-bs-target="#exampleModal"><i class="fa fa-trash"></i></button>
                    </div>
                </div>
            </div>
            @include('Admin.InfoCompany.edit')

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Delete InfoCompany</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('infoCompany.destroy', 'test') }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                @method('DELETE')

                                <input type="hidden" name="id" value="{{ $info->id }}">

                                <h5>Are You Sure To Delete ?</h5>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-danger">Save changes</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection

@section('scripts')


@endsection
