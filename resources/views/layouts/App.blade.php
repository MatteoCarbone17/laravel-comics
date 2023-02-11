<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title','Laravel Comics' )</title>

    @vite('resources/js/app.js')
</head>
<body>
    <main>
        <section class="container">
            <div class="row">
                @foreach ($comics as $comic)
                    <div class="card" style="width: 10rem;">
                        <img src={{$comic['thumb'] }} class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $comic['title'] }}</h5>
                            <span>{{ $comic['series'] }}  </span>
                            <p class="card-text"></p>
                        </div>
                    </div>
                 @endforeach
            </div>
        </section>
    </main>
    
</body>
</html>