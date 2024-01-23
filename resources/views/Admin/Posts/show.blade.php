@extends('layouts.master')

@section('title')

@stop

@section('css')


    @include('layouts.bootstrab')
@endsection

@section('title_page1')
    Posts
@endsection

@section('title_page2')
    Dashboard
@endsection


@section('content')
    <div class="row">

        <form action="{{ route('filterPosts') }}" method="POST">
            @csrf
            <select class="selectpicker form-control w-25 p-2" data-style="btn-info" name="client_id" required>
                <option value="" selected disabled>Choose Clients
                </option>
                @foreach ($clients as $client)
                    <option value="{{ $client->id }}">{{ $client->name }}</option>
                @endforeach
            </select>
            <button type="submit" class="btn btn-primary mt-4">Search</button>
        </form>

        @if (isset($images))
            <?php $List_images = $images;
              ?>
                <div class="col-md-6 mt-4">
                    <div class="card-body">

                        @foreach ($List_images as $img)

                            <img src='{{ asset("attachments/Posts/$clientName/" . $img->image) }}'
                                style="width:400px;height:400px;" class="mb-3 m-4" alt="iqmedia">
                            <div>
                                <button type="button" class="btn btn-danger mb-4" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal{{ $img->id }}">
                                    <i class="fa fa-trash"></i></button>
                                </button>
                            </div>
                            @include('Admin.Posts.delete')
                        @endforeach

                    </div>
                </div>



            @else
                <h2 class="mt-4" style="color: red">There are currently no Images for the client</h2>
        @endif
    </div>
@endsection

@section('scripts')


@endsection
