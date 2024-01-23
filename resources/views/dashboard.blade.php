@extends('layouts.master')

@section('title')

@stop

@section('css')

@endsection

@section('title_page1')
    الرئيسية
@endsection

@section('title_page2')
    لوحة التحكم
@endsection

@section('content')

    <section class="section dashboard">
        <div class="row">

            <!-- Left side columns -->
            <div class="col-lg-12">
                <div class="row">

                    <!-- Sales Card -->
                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card sales-card">

                            <div class="filter">
                                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>


                            </div>
                            <a href="{{ route('client.index') }}">

                                <div class="card-body">
                                    <h5 class="card-title">Clients <span></span></h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="fa fa-user-o"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{ $clients }}</h6>


                                        </div>
                                    </div>
                                </div>
                            </a>

                        </div>
                    </div><!-- End Sales Card -->

                    <!-- Revenue Card -->
                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card revenue-card">

                            <div class="filter">
                                <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                        class="bi bi-three-dots"></i></a>

                            </div>
                            <a href="{{ route('video.index') }}">

                                <div class="card-body">
                                    <h5 class="card-title">Reels <span></span></h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="fa fa-video-camera"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{ $reels }}</h6>

                                        </div>
                                    </div>
                            </a>

                        </div>

                    </div>
                </div><!-- End Revenue Card -->


                <!-- Revenue Card -->
                <div class="col-xxl-4 col-md-6">
                    <div class="card info-card revenue-card">

                        <div class="filter">
                            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>

                        </div>
                        <a href="{{ route('images.index') }}">

                            <div class="card-body">
                                <h5 class="card-title">Images<span></span></h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="fa fa-photo"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>{{ $images }}</h6>

                                    </div>
                                </div>
                        </a>

                    </div>

                </div>
            </div><!-- End Revenue Card -->


            <!-- Customers Card -->
            <div class="col-xxl-4 col-xl-12">

                <div class="card info-card customers-card">

                    <div class="filter">
                        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>

                    </div>
                    <a href="{{ route('user.index') }}">
                        <div class="card-body">
                            <h5 class="card-title">Users<span></span></h5>

                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-people"></i>
                                </div>
                                <div class="ps-3">
                                    <h6>
                                        <h6>{{ $users }}</h6>
                                    </h6>

                                </div>
                            </div>

                        </div>
                    </a>

                </div>

            </div><!-- End Customers Card -->
        </div>












        </div><!-- End Right side columns -->

        </div>
    </section>

@endsection
