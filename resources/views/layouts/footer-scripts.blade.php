  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/dashboard/vendor/apexcharts/apexcharts.min.js') }}"></script>
  <script src="{{ asset('assets/dashboard/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  @livewireScripts

  <!-- Template Main JS File -->
  <script src="{{ asset('assets/dashboard/js/main.js') }}"></script>
  <script type="text/javascript">
      $(document).ready(function() {
          $('#image').change(function(e) {
              var reader = new FileReader();
              reader.onload = function(e) {
                  $('#showImage').attr('src', e.target.result);
              }
              reader.readAsDataURL(e.target.files['0']);
          });
      });
  </script>
  
  @yield('scripts')
