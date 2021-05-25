<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>RA</title>
     <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  </head>
  <body>
    @include('inc.navbar')

    <div class="container">
      @if(Request::is('/'))
        @include('inc.showcase')
      @endif
      <div class="row">
        <div class="col-md-8 col-lg-8">
          @include('inc.messages')
          @yield('content')
        </div>
        <div class="col-md-4 col-lg-4">
          @include('inc.sidebar')
        </div>
      </div>
    </div>

    <footer id="footer"  class="p-3 text-white  text-center bottom-0 position-absolute w-100 bg-primary">
      <p>Copyright 2021 &copy; Rashed Afridi</p>
    </footer>
  </body>
</html>
