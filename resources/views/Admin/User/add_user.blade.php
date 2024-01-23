@extends('layouts.master')

@section('title')

@stop

@section('css')


    @include('layouts.bootstrab')

@endsection

@section('title_page1')
    المستخدمين
@endsection

@section('title_page2')
    لوحة التحكم
@endsection


@section('content')
    <style>
        .card-registration .select-input.form-control[readonly]:not([disabled]) {
            font-size: 1rem;
            line-height: 2.15;
            padding-left: .75em;
            padding-right: .75em;
        }

        .card-registration .select-arrow {
            top: 13px;
        }
    </style>
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-12 col-lg-9 col-xl-7">
                    <div class="card shadow-lg card-registration" style="border-radius: 15px;">
                        <div class="card-body p-4 p-md-5">
                            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Registration User</h3>
                            <form method="POST" action="{{ route('user.store') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 mb-4">

                                        <div class="form-outline">
                                            <input type="text" id="firstName" name="fname"
                                                class="form-control form-control-lg" />
                                            <label class="form-label" for="firstName">First Name</label>
                                        </div>

                                    </div>
                                    <div class="col-md-6 mb-4">

                                        <div class="form-outline">
                                            <input type="text" id="lastName" name="lname"
                                                class="form-control form-control-lg" />
                                            <label class="form-label" for="lastName">Last Name</label>
                                        </div>

                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-md-6 mb-4 pb-2">

                                        <div class="form-outline">
                                            <input type="email" name="email" id="emailAddress"
                                                class="form-control form-control-lg" />
                                            <label class="form-label" for="emailAddress">Email</label>
                                        </div>

                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-6 mb-4">

                                        <label class="form-label select-label">Choose Roles</label>
                                        <select class="select form-control-sm" name="role_id">
                                            <option value="1" disabled>Choose Roles</option>
                                            @foreach ($roles as $role)
                                                <option value="{{ $role->id }}">{{ $role->name }}</option>
                                            @endforeach
                                        </select>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-4 pb-2">

                                        <div class="form-outline">
                                            <input type="password" name="password" id="emailAddress"
                                                class="form-control form-control-lg" />
                                            <label class="form-label" for="emailAddress">Password</label>
                                        </div>

                                    </div>

                                    <div class="col-md-6 mb-4 pb-2">

                                        <div class="form-outline">
                                            <input type="password" name="confirmPassword" id="emailAddress"
                                                class="form-control form-control-lg" />
                                            <label class="form-label" for="emailAddress">Confirm Password</label>
                                        </div>

                                    </div>

                                </div>


                                <div class="mt-4 pt-2">
                                    <input class="btn btn-primary btn-md" type="submit" value="Register" />
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('scripts')


@endsection
