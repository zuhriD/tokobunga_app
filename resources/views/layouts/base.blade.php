<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    @yield('title')
  </title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  {{-- call css from public folder --}}
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <script src="{{ asset('js/code.jquery.com_jquery-3.6.0.min.js') }}"></script>
    <!-- Add this to the head section of your HTML -->


</head>
<body>

    @include('layouts.navbar')


    @yield('content')

    @include('layouts.footer')

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    {{-- call js from public folder --}}
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap" async defer></script>
    <script src="{{ asset('js/home.js') }}"></script>
</body>
</html>
