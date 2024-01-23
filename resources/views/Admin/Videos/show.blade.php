@extends('layouts.master')

@section('title')

@stop

@section('css')


    @include('layouts.bootstrab')

@endsection

@section('title_page1')
    Reels
@endsection

@section('title_page2')
    Dashboard
@endsection


@section('content')
    <div class="row">

        <form action="{{ route('filterVideo') }}" method="POST">
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

        @if (isset($details))
            <?php $List_videos = $details; ?>


            @forelse ($List_videos as $videos)
                <div class="col-md-6">
                    <div class="card-body">



                        <iframe width="400" height="300" 
                        src="{{ file_exists(public_path('/assets/Videos/' . $videos->video)) 
                            ? asset('/assets/Videos/' . $videos->video) 
                            : $videos->video}}"
                  
                                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>


                        <div>
                            <button type="button" class="btn btn-danger mb-4" data-bs-toggle="modal"
                                data-bs-target="#DeleteVideo{{ $videos->id }}">
                                <i class="fa fa-trash"></i></button>
                            </button>
                        </div>

                    </div>
                </div>


                @include('Admin.Videos.delete')

            @empty
                <h2 class="mt-4" style="color: red">There are currently no videos for the client </h2>
            @endforelse
        @endif
    </div>
@endsection

@section('scripts')


@endsection
