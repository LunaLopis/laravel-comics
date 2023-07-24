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
    
    @include('partials.header')
    <div class="jumbotron">

    </div>
    <section class="bg-black pt-5">
        <div class="container">
            <div class="row">
                @foreach ($comics as $comic)
                    <div class="col col-lg-2 col-md-4 col-sm-12">
                        <div class="card mb-3 bg-black" >
                            <img src="https://picsum.photos/200/300" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-white">{{$comic['series']}}</h5>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@include('partials.footer') 

</body>

</html>