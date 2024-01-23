@extends('layouts.master')

@section('title')

@stop

@section('css')


    @include('layouts.bootstrab')

@endsection

@section('title_page1')
    Add Reel
@endsection

@section('title_page2')
    Dashboard
@endsection


@section('content')
    <style>
        body {
            font-family: 'Lato', sans-serif;
        }

        h1 {
            margin-bottom: 40px;
        }

        label {
            color: #333;
        }

        .btn-send {
            font-weight: 300;
            text-transform: uppercase;
            letter-spacing: 0.2em;
            width: 80%;
            margin-left: 3px;
        }

        .help-block.with-errors {
            color: #ff5050;
            margin-top: 5px;
        }

        .card {
            margin-left: 10px;
            margin-right: 10px;
        }
    </style>
    <div class=" text-center mt-5 ">

        <h1>Add Reel</h1>


    </div>
<livewire:vediopage>
@endsection

@section('scripts')

@endsection
