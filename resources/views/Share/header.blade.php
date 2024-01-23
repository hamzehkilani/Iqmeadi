    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center justify-content-between">

            <h1 class="logo"><a href="{{route('welcome')}}"><img src="{{asset('assets/img/IQ.png')}}"  width="70" height="90"></a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar" dir="rtl">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">الصفحة الرئيسية</a></li>
                    <li><a class="nav-link scrollto" href="#about">من نحن</a></li>
                    <li><a class="nav-link scrollto" href="#services">الخدمات</a></li>
                    <li><a class="nav-link scrollto " href="#portfolio">المعرض</a></li>
                    <li><a class="nav-link scrollto" href="#team">فريق العمل</a></li>
                    <li><a class="nav-link scrollto" href="#contact">التواصل</a></li>
                       {{-- <li><a class="nav-link scrollto" href="{{route('clients.index')}}">العملاء</a></li> --}}

                </ul>

                <!--<i class="bi bi-list mobile-nav-toggle"></i>-->
                <!--@if (Route::has('login'))-->
                <!--<div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">-->
                <!--    @auth-->
                <!--        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">لوحة-->
                <!--            التحكم</a>-->
                <!--    @else-->
                <!--        <a href="{{ route('login') }}" class="text-sm text-gray-700 m-4 dark:text-gray-500 underline">تسجيل-->
                <!--            دخول</a>-->

                <!--        {{-- @if (Route::has('register'))-->
                <!--            <a href="{{ route('register') }}"-->
                <!--                class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">تسجيل</a>-->
                <!--        @endif --}}-->
                <!--    @endauth-->
                </div>
            @endif
            </nav><!-- .navbar -->
            
        </div>
    </header><!-- End Header -->