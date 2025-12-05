<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @include('libraries.styles')
    <title>Home | ###</title>
</head>
<body style="height:  100">
    @include('components.nav-bar')

    <div class="container style="height:90vh">
      @yield('page')

      @yield('about-us')
      @yield('contact-us')
      @yield('projects')
      @yield('categories')

    </div>
    @include('components.footer')

    @include('libraries.scripts')
</body>
</html>
