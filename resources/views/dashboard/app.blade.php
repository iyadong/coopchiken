<!doctype html>
<html lang="en">
    @include('layout.head')
   <body>
      <!-- Wrapper Start -->
      <div class="wrapper d-flex flex-column min-vh-100">
         @include('layout.sidebar')
         <!-- TOP Nav Bar -->
         @include('layout.navbar')
         <!-- TOP Nav Bar END -->
         <!-- Page Content  -->
         <div class="flex-grow-1">
            @yield('konten')
         </div>
         <!-- Footer -->
         <footer class="bg-white iq-footer mt-auto">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-lg-6">
                     <ul class="list-inline mb-0">
                        <li class="list-inline-item"><a href="privacy-policy.html" style="color: green;">Privacy Policy</a></li> <!-- Change the color to green -->
                        <li class="list-inline-item"><a href="terms-of-service.html" style="color: green;">Terms of Use</a></li> <!-- Change the color to green -->
                     </ul>
                  </div>
                  <div class="col-lg-6 text-right" style="color: green;"> <!-- Change the color to green -->
                     Copyright 2020 <a href="#" style="color: green;">Sofbox</a> All Rights Reserved. <!-- Change the color to green -->
                  </div>
               </div>
            </div>
         </footer>
         <!-- Footer END -->
      </div>
      <!-- Wrapper END -->
      
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <!-- Appear JavaScript -->
      <script src="js/jquery.appear.js"></script>
      <!-- Countdown JavaScript -->
      <script src="js/countdown.min.js"></script>
      <!-- Counterup JavaScript -->
      <script src="js/waypoints.min.js"></script>
      <script src="js/jquery.counterup.min.js"></script>
      <!-- Wow JavaScript -->
      <script src="js/wow.min.js"></script>
      <!-- Apexcharts JavaScript -->
      <script src="js/apexcharts.js"></script>
      <!-- Slick JavaScript -->
      <script src="js/slick.min.js"></script>
      <!-- Select2 JavaScript -->
      <script src="js/select2.min.js"></script>
      <!-- Owl Carousel JavaScript -->
      <script src="js/owl.carousel.min.js"></script>
      <!-- Magnific Popup JavaScript -->
      <script src="js/jquery.magnific-popup.min.js"></script>
      <!-- Smooth Scrollbar JavaScript -->
      <script src="js/smooth-scrollbar.js"></script>
      <!-- lottie JavaScript -->
      <script src="js/lottie.js"></script>
      <!-- Chart Custom JavaScript -->
      <script src="js/chart-custom.js"></script>
      <!-- Custom JavaScript -->
      <script src="js/custom.js"></script>
      <script>
         document.addEventListener('DOMContentLoaded', function() {
             var menuItems = document.querySelectorAll('.iq-menu li a');
 
             menuItems.forEach(function(item) {
                 item.addEventListener('click', function() {
                     menuItems.forEach(function(menu) {
                         menu.parentElement.classList.remove('active');
                     });
                     item.parentElement.classList.add('active');
                 });
             });
         });
     </script>
     <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
     <script>
      document.addEventListener("DOMContentLoaded", function() {
          var path = window.location.pathname;
          var menuItems = {
              "/dashboard": "menu-dashboard",
              "/config_heater": "menu-config-heater",
              "/config_lamp": "menu-config-lamp",
              "/Muser": "menu-manage-user",
              "/Mdevices": "menu-manage-devices"
          };
  
          for (var key in menuItems) {
              if (menuItems.hasOwnProperty(key)) {
                  var menuItem = document.getElementById(menuItems[key]);
                  if (key === path) {
                      menuItem.classList.add("active");
                  } else {
                      menuItem.classList.remove("active");
                  }
              }
          }
      });
      
  </script>
  
     @stack('scripts')
   </body>
</html>
