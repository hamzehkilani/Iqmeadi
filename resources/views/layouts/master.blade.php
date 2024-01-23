<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="description">
    <meta content="" name="keywords">

    <title>IQMedia</title>
    @include('layouts.head')
    
</head>

<body>

    @include('layouts.main-header')

    @include('layouts.main-sidebar')

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">@yield('title_page1')</a></li>
                    <li class="breadcrumb-item active">@yield('title_page2')</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->


        @yield('content')

    </main><!-- End #main -->

    @include('layouts.footer')
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    @include('layouts.footer-scripts')

</body>

</html>
