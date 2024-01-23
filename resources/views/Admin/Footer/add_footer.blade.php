@extends('layouts.master')

@section('title')

@stop

@section('css')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">

    @include('layouts.bootstrab')

@endsection

@section('title_page1')
    Add Footer
@endsection


@section('title_page2')
    Dashboard
@endsection


@section('content')
    <div class="row justify-content-center">
        <div class="col-md-4 shadow-lg mt-5 bg-light rounded">
            <h1 class="text-center font-weight-bold text-primary">Footer </h1>
            <hr class="bg-light">
            <h5 class="text-center text-success"></h5>
            <form action="{{ route('footer.store') }}" method="post" id="form-box" class="p-2">
                @csrf
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-map-marker m-1"></i></span>
                    </div>
                    <input type="text" name="location" class="form-control" placeholder="Enter your Location" required>
                </div>
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                    </div>
                    <input type="email" name="email" class="form-control" placeholder="Enter your email" required>
                </div>
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-phone"></i></span>
                    </div>
                    <input type="text" name="phone" class="form-control" placeholder="Enter Phone" required>
                </div>

                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fab fa-facebook-f"></i></span>
                    </div>
                    <input type="text" name="facebook" class="form-control" placeholder="Enter Facebook">
                </div>

                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-instagram"></i></span>
                    </div>
                    <input type="text" name="Instagram" class="form-control" placeholder="Enter Instagram">
                </div>

                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-youtube"></i></span>
                    </div>
                    <input type="text" name="Youtube" class="form-control" placeholder="Enter Youtube">
                </div>

                <div class="form-group">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <input type="submit" name="submit" id="submit" class="btn btn-primary btn-block" value="Save">
                </div>
            </form>
        </div>
    </div>
@endsection

@section('scripts')


@endsection
