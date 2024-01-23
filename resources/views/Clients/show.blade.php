<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Clients</title>
    <link href="{{ asset('assets/img/IQ.png') }}" sizes="16x16" rel="icon">


    @include('layouts.bootstrab')
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/showcatorgy.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/css/showcatagory.scss') }}" rel="stylesheet">

    <style>
        #footer .social-linkss a {
            font-size: 18px;
            display: inline-block;
            background: #6b6a7c;
            color: #fff;
            line-height: 1;
            padding: 8px 0;
            margin-right: 4px;
            border-radius: 50%;
            text-align: center;
            width: 36px;
            height: 36px;
            transition: 0.3s;
        }
    </style>
</head>


<body>
    @php
        $existReel = App\Models\Video::where('client_id', $id)->count();
        $existImages = App\Models\Image::where('client_id', $id)->count();
        $existPosts = App\Models\ImagePost::where('client_id', $id)->count();
    @endphp

    <nav class="navbar navbar-expand-lg  bg-success py-2">
        <div class="container-fluid">
            <a class="nav-link scrollto active text-light" href="{{ route('welcome') }}" style="font-size: 20px"> IQ
                MEDIA</a>
        </div>
    </nav>

    <div class=" text-center ">     
        <h3 class="clientname mt-3">({{ $clientName }})</h3>
    </div>

    <div class="row justify-content-center m-2">
        @if ($existReel > 0)

            <div class="col-md-4 mt-2">
                <div class="card">
                    <span class="icon">
                        <a  href="{{ route('showReels', $id) }}" style="text-decoration: none">
                            <dotlottie-player
                                src="https://lottie.host/2c0ac914-7254-4f2a-8961-82db3bf6706f/2dCgSsb6m1.json"
                                background="transparent" speed="1"
                                style=" height: 300px;" loop
                                autoplay></dotlottie-player>

                        </a>
                    </span>

                    <h4 class="text-center">Show Reels</h4>
                    @php
                        $socialMedia = App\Models\SocialMedia::where('client_id', $id)->first();
                    @endphp
                    <h4 class="text-center mt-5" style=" text-wrap: nowrap;">Socila Media ({{ $clientName }}) :
                        <footer id="footer" class="mt-2 ">
                            <div class="social-linkss text-center text-md-right  pt-md-0">

                                @if ($socialMedia)
                                    <a href="{{ $socialMedia->facebook_url }}" class="facebook"><i
                                            class="bx bxl-facebook"></i></a>
                                    <a href="{{ $socialMedia->instagram_url }}" class="instagram"><i
                                            class="bx bxl-instagram"></i></a>
                                @else
                                    <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                                    <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                                @endif
                                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                                <a href="#" class="google-plus"><i class="bx bxl-youtube"></i></a>
            


                            </div>
                        </footer>
                    </h4>
                    <p>
                    </p>

                    <div class="shine"></div>
                    <div class="background">
                        <div class="tiles">
                            <div class="tile tile-1"></div>
                            <div class="tile tile-2"></div>
                            <div class="tile tile-3"></div>
                            <div class="tile tile-4"></div>

                            <div class="tile tile-5"></div>
                            <div class="tile tile-6"></div>
                            <div class="tile tile-7"></div>
                            <div class="tile tile-8"></div>

                            <div class="tile tile-9"></div>
                            <div class="tile tile-10"></div>
                        </div>

                        <div class="line line-1"></div>
                        <div class="line line-2"></div>
                        <div class="line line-3"></div>
                    </div>
                </div>
            </div>
        @endif

        @if ($existImages > 0)
            <div class="col-md-4 mt-2">

                <div class="card">
                    <span class="icon">
                        <a href="{{ route('showPhotos', $id) }}" style="text-decoration: none">
                                <dotlottie-player
                                    src="https://lottie.host/26af757c-1085-41b4-bfe6-c319b55ad338/85I86mAZXq.json"
                                    background="transparent" speed="1"
                                    style=" height: 300px; " loop
                                    autoplay></dotlottie-player>
                        </a>
                    </span>
                    <h4  class="text-center">Show Images</h4>
                    @php
                        $socialMedia = App\Models\SocialMedia::where('client_id', $id)->first();
                    @endphp
                    <h4 class="text-center mt-5" style=" text-wrap: nowrap;">Socila Media ({{ $clientName }}) :
                        <footer id="footer" class="mt-2 ">
                            <div class="social-linkss text-center text-md-right  pt-md-0">

                                @if ($socialMedia)
                                    <a href="{{ $socialMedia->facebook_url }}" class="facebook"><i
                                            class="bx bxl-facebook"></i></a>
                                    <a href="{{ $socialMedia->instagram_url }}" class="instagram"><i
                                            class="bx bxl-instagram"></i></a>
                                @else
                                    <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                                    <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                                @endif
                                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                                <a href="#" class="google-plus"><i class="bx bxl-youtube"></i></a>
            

                            </div>
                        </footer>
                    </h4>
                    <p>
                    </p>
                    <div class="shine"></div>
                    <div class="background">
                        <div class="tiles">
                            <div class="tile tile-1"></div>
                            <div class="tile tile-2"></div>
                            <div class="tile tile-3"></div>
                            <div class="tile tile-4"></div>

                            <div class="tile tile-5"></div>
                            <div class="tile tile-6"></div>
                            <div class="tile tile-7"></div>
                            <div class="tile tile-8"></div>

                            <div class="tile tile-9"></div>
                            <div class="tile tile-10"></div>
                        </div>

                        <div class="line line-1"></div>
                        <div class="line line-2"></div>
                        <div class="line line-3"></div>
                    </div>
                </div>
            </div>
        @endif

        @if ($existPosts > 0)

            <div class="col-md-4 mt-2">

                <div class="card">
                    <span class="icon">
                        <a href="{{ route('showPosts.show', $id) }}" style="text-decoration: none">
                            <div class="mt-2">
                                <dotlottie-player
                                    src="https://lottie.host/bd96f1bc-f342-4806-b97c-6459c5ec0ec1/Q6CMcz25hZ.json"
                                    background="transparent" speed="1"
                                    style=" height: 300px;" loop
                                    autoplay></dotlottie-player>

                            </div>
                        </a>
                    </span>
                    <h4 class="text-center">Show Posts</h4>
                    @php
                        $socialMedia = App\Models\SocialMedia::where('client_id', $id)->first();
                    @endphp
                    <h4 class="text-center mt-5" style=" text-wrap: nowrap;">Socila Media ({{ $clientName }}) :
                        <footer id="footer" class="mt-2 ">
                            <div class="social-linkss text-center text-md-right  pt-md-0">

                                @if ($socialMedia)
                                    <a href="{{ $socialMedia->facebook_url }}" class="facebook"><i
                                            class="bx bxl-facebook"></i></a>
                                    <a href="{{ $socialMedia->instagram_url }}" class="instagram"><i
                                            class="bx bxl-instagram"></i></a>
                                @else
                                    <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                                    <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                                @endif
                                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                                <a href="#" class="google-plus"><i class="bx bxl-youtube"></i></a>
            

                            </div>
                        </footer>
                    </h4>
                    <p>
                    </p>
                    <div class="shine"></div>
                    <div class="background">
                        <div class="tiles">
                            <div class="tile tile-1"></div>
                            <div class="tile tile-2"></div>
                            <div class="tile tile-3"></div>
                            <div class="tile tile-4"></div>

                            <div class="tile tile-5"></div>
                            <div class="tile tile-6"></div>
                            <div class="tile tile-7"></div>
                            <div class="tile tile-8"></div>

                            <div class="tile tile-9"></div>
                            <div class="tile tile-10"></div>
                        </div>

                        <div class="line line-1"></div>
                        <div class="line line-2"></div>
                        <div class="line line-3"></div>
                    </div>
                </div>
            </div>
        @endif
        @if ($existReel < 1 && $existImages < 1)
            <h1 style="color: red;font-size:60px" class="text-center">No Data Now</h1>
        @endif

    </div>
    @include('Share.footer')

    <label class="day-night">
        <input type="checkbox" checked />
        <div></div>
    </label>

    <!-- twitter -->
    <script src="{{ asset('assets/js/showcatagory.js') }}"></script>
    <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>


</body>

</html>
