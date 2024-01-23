
@php
    $footer = App\Models\Footer::first();
@endphp

<hr>
<footer id="footer" dir="rtl">

    <div class="footer-top" style="margin-top: 50px">
        <div class="container">
            <!--<div class="row">-->

            <!--    <div class="col-lg-3 col-md-6 footer-contact">-->
            <!--        <h3> IQ MEDIA</h3>-->
            <!--        <p>-->
            <!--            <p>الموقع : {{$footer->location}}</p>-->
            <!--            <strong>الهاتف :</strong> {{$footer->phone}}<br>-->
            <!--            <strong>الايميل :</strong> {{$footer->email}}<br>-->
            <!--        </p>-->
            <!--    </div>-->



            <!--</div>-->
        </div>
    </div>

    <div class="container py-4"  >

        <div class="me-md-auto text-center mb-2" style="margin-left: 5px">
            <div class="copyright">
                &copy; حقوق النشر محفوظة <strong><span>IQ MEDIA</span></strong>.
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/tempo-free-onepage-bootstrap-theme/ -->
                Designed by <a style="color: green;font-size:15px" target="_blank" rel="noopener noreferrer">RQ TECHNOLOGY</a>
            </div>
        </div>
        
        <div class="social-links text-center text-md-right pt-3 pt-md-0" style="margin-left: 5px" dir="ltr">

            <a href="{{$footer->facebook_url}}" class="facebook"><i class="bx bxl-facebook"></i></a>
            <a href="{{$footer->instagram_url}}" class="instagram"><i class="bx bxl-instagram"></i></a>
            <a href="{{$footer->youtube_url}}" class="google-plus"><i class="bx bxl-youtube"></i></a>
            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
    </div>
</footer><!-- End Footer -->
