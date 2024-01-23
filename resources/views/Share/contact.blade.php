@php
$footer = App\Models\Footer::first();
@endphp
        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact" dir="rtl">
            <div class="container">

                <div class="section-title">
                    <h2>التواصل</h2>
                    <h3>تواصل <span>معنا</span></h3>

                </div>

                {{-- <div>
                    <iframe style="border:0; width: 100%; height: 270px;"
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621"
                        frameborder="0" allowfullscreen></iframe>
                </div> --}}

                <div class="row mt-5">

                    <div class="col-lg-4">
                        <div class="info">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>الموقع: </h4>
                                <p>{{$footer->location}}</p>
                            </div>

                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4>الايميل :</h4>
                                <p>{{$footer->email}}</p>
                            </div>

                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>الهاتف :</h4>
                                <p>{{$footer->phone}}</p>
                            </div>

                        </div>

                    </div>

                    <div class="col-lg-8 mt-5 mt-lg-0">

                        <form action="{{route('contact.store')}}" method="post" role="form" >
                            @csrf
                            <div class="row">
                                <div class="col-md-6 form-group mb-2">
                                    <input type="text" name="fname" class="form-control" id="name"
                                        placeholder="الاسم الاول" required>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0 mb-2">
                                    <input type="text" class="form-control" name="lname" id="email"
                                        placeholder="الاسم الاخير" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="email" class="form-control" id="email"
                                        placeholder="الايميل" required>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="message" rows="5" placeholder="الرسالة" required></textarea>
                            </div>
                            <div class="my-3">

                            <div class="text-center"><button class="btn btn-secondary" type="submit"> ارسال الرسالة</button></div>
                        </form>

                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->