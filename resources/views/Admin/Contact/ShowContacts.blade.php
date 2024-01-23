@extends('layouts.master')

@section('title')

@stop

@section('css')

    @include('layouts.bootstrab')

@endsection

@section('title_page1')
    Add Client
@endsection

@section('title_page2')
    Dasboard
@endsection



@section('content')


    <div class="row ">
        @isset($contact)
            <div class="col-md-4">
                <div class="card align-items-center d-flex m-5" style="width: 18rem;" dir="rtl">
                    <div class="card-body">
                        <h5 class="card-title">{{ $contact->first_name }} {{ $contact->last_name }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{ $contact->email }}</h6>
                        <p class="card-text">الرسالة : {{ $contact->message }}</p>
                        @if ($contact->replay == 0)
                            <p class="card-text bg-danger text-light">الحالة : لم يتم الرد</p>
                        @else
                            <p class="card-text bg-success text-light">الحالة : تم الرد</p>
                        @endif


                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-success me-2" data-bs-toggle="modal"
                            data-bs-target="#exampleModal{{ $contact->id }}">
                            Replay</button>
                        </button>
                    </div>
                </div>
            </div>
            @include('Admin.Contact.ReplayMessage')
        @endisset


        @isset($contacts)

            @foreach ($contacts as $contact)
                <div class="col-md-4 d-flex ">
                    <div class="card m-5" style="width: 18rem;" dir="rtl">
                        <div class="card-body">
                            <h5 class="card-title">{{ $contact->first_name }} {{ $contact->last_name }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">{{ $contact->email }}</h6>
                            <p class="card-text">الرسالة : {{ $contact->message }}</p>
                            @if ($contact->replay == 0)
                                <p class="card-text bg-danger text-light">الحالة : لم يتم الرد</p>
                            @else
                                <p class="card-text bg-success text-light">الحالة : تم الرد</p>
                            @endif
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-success me-2" data-bs-toggle="modal"
                                data-bs-target="#exampleModal{{ $contact->id }}">
                                Replay</button>
                            </button>

                        </div>
                    </div>
                </div>
                @include('Admin.Contact.ReplayMessage')
            @endforeach
        @endisset



    </div>

@endsection

@section('scripts')

@endsection
