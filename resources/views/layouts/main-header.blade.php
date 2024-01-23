  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
      <div class="d-flex align-items-center justify-content-between">
          <a href="{{ route('welcome') }}" class="logo d-flex align-items-center">
              <img src="assets/img/logo.png" alt="">
              <span class="d-none d-lg-block">IQ MEDIA</span>
          </a>
          <i class="bi bi-list toggle-sidebar-btn"></i>
      </div><!-- End Logo -->

      <div class="nav-item dropdown">
        <a href="#" class="nav-link dropdown-toggle m-4" data-bs-toggle="dropdown">
            <i class="fa fa-bell me-lg-2 "></i>
            <span class="d-none d-lg-inline-flex">Notification
                ({{ Auth::User()->unreadNotifications->count() }})</span>
        </a>
        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
            @foreach (Auth::User()->unreadNotifications as $notifications)
                <a class="dropdown-item" href="{{route('contact.show', $notifications->data['message_id'])}}">
                        <h5>{{ $notifications->data['body'] }}</h5>
                    </form>
                    <small>{{ $notifications->created_at }}</small>
                </a>
                <hr class="dropdown-divider">
            @endforeach
            <a href="{{ route('contact.index') }}" class="dropdown-item text-center">See all notifications</a>
        </div>
    </div>

      <nav class="header-nav ms-auto">
          <ul class="d-flex align-items-center">

            

              <li class="nav-item dropdown pe-3">

                  <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#"
                      data-bs-toggle="dropdown">
                      <img src="{{ asset('assets/img/IQ.png') }}" alt="Profile" class="rounded-circle">
                      <span class="d-none d-md-block dropdown-toggle ps-2">{{ auth()->user()->first_name }}
                          {{ auth()->user()->last_name }}</span>
                  </a><!-- End Profile Iamge Icon -->

                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                      <li class="dropdown-header">
                          <h6> {{ auth()->user()->first_name }} {{ auth()->user()->last_name }}</h6>
                          <span>Web Designer</span>
                      </li>
                      <li>
                          <hr class="dropdown-divider">
                      </li>

                      {{-- <li>
                          <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                              <i class="bi bi-person"></i>
                              <span>My Profile</span>
                          </a>
                      </li> --}}
                      <li>
                          <hr class="dropdown-divider">
                      </li>


                      <li>
                          <a class="dropdown-item d-flex align-items-center" href="{{ route('logout') }}">
                              <i class="bi bi-box-arrow-right"></i>
                              <span>Sign Out</span>
                          </a>
                      </li>

                  </ul><!-- End Profile Dropdown Items -->
              </li><!-- End Profile Nav -->

          </ul>
      </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->
