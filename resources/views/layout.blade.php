<!DOCTYPE html>
<html lang="en" class="no-js">
  <head>
    @include('_partials.meta')
    @include('_partials.styles')
  </head>
  <body>
    <div id="preloader">
      <div id="status">
        <div class="spinner">
          <div class="double-bounce1"></div>
          <div class="double-bounce2"></div>
        </div>
      </div>
    </div>
    <header id="topnav" class="defaultscroll scroll-active">
      <div class="container">
        <div class="menu-extras">
          <div class="menu-item">
            <a class="navbar-toggle">
              <div class="lines"><span></span> <span></span> <span></span></div>
            </a>
          </div>
        </div>
      </div>
    </header>
    @yield('page-content')
    <footer class="footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-12 mb-0 mb-md-4 pb-0 pb-md-2">
            <p class="mt-4">Energy Performance Certificate Finder & Analysis Tool</p>
          </div>
        </div>
      </div>
    </footer>
    <hr />
    <footer class="footer footer-bar">
      <div class="container text-center">
        <div class="row justify-content-center">
          <div class="col-12">
            <div class="">
              <p class="mb-0">© 2021 EPC Application</p>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <a href="#" class="back-to-top rounded text-center" id="back-to-top"> <i class="mdi mdi-chevron-up d-block"> </i> </a>
    @include('_partials.scripts')
  </body>
</html>