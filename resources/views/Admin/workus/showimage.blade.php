@extends('layouts.master')

@section('title')

@stop

@section('css')


    @include('layouts.bootstrab')
@endsection

@section('title_page1')
    Images
@endsection

@section('title_page2')
    Dashboard
@endsection


@section('content')
    <div class="row">

              

                        @foreach ($images as $image)
                        <div class="col-md-6">
                            <img src='{{ asset("attachments/Workus/" . $image->image) }}'
                            style="width:400px;height:400px;" class="mb-3 m-4" alt="iqmedia">
                        <div>
                            <button type="button" class="btn btn-danger mb-4" data-bs-toggle="modal"
                                data-bs-target="#exampleModal{{ $image->id }}">
                                <i class="fa fa-trash"></i></button>
                            </button>
                        </div>
                        </div>
                        
                            @include('Admin.workus.delete')

                        @endforeach

                </div>

    </div>
@endsection

@section('scripts')


@endsection
