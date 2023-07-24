<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    @include('partials.header');
    <div class="cont-blu d-flex justify-content-end text-white bg-success p-2">
          <h5>DC POWER-VISA</h5>
          <h5>ADDITIONAL DC SITES</h5>
    </div>

    
  

</body>

</html>