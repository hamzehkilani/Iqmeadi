@php
$teams = App\Models\Team::all();
@endphp

<!-- ======= Team Section ======= -->
<section id="team" class="team" dir="rtl">
  <div class="container">

      <div class="section-title">
          <h2>فريق العمل</h2>
          <h3>فريق العمل الدؤوب <span>لدينا</span></h3>

      </div>

      <div class="row" dir="rtl">{{--  --}}
          @foreach ($teams as $team)
              
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
              <div class="member">
                  <div class="member-img">
                      <img src="{{ asset('attachments/team/' . $team->image) }}" 
                          class="img-fluid" alt="iqmedia" style="width: 954px;height:350px">
                      <div class="social">
                          <a href=""><i class="bi bi-twitter"></i></a>
                          <a href=""><i class="bi bi-facebook"></i></a>
                          <a href=""><i class="bi bi-instagram"></i></a>
                          <a href=""><i class="bi bi-linkedin"></i></a>
                      </div>
                  </div>
                  <div class="member-info">
                      <h4>{{$team->name}} </h4>
                      <span style="font-weight: bold"> {{$team->position}}  </span>
                  </div>
              </div>
          </div>
          @endforeach



          

      </div>

  </div>
</section><!-- End Team Section -->