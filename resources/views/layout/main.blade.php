<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/css/bootstrap.css' integrity='sha512-9LMt8yHSTC2NNj7wxs1u0wfc8JsHPz2IO3hPj5ZOVhM60uMHDhWxEzO+Yz9wBCJRoMa4UHItzgdwW4ZxVG2O4g==' crossorigin='anonymous'/>
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    </head>
    <body>
        
        {{-- header --}}
        <header>
            @include('partials.header')
        </header>
        {{-- header --}}

        {{-- main --}}
        <main>
            @yield('main-content')
        </main>
        {{-- main --}}

        {{-- footer --}}
        <footer>
            @include('partials.footer')
        </footer>
        {{-- footer --}}
    

    <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/js/bootstrap.js' integrity='sha512-97OV/qkbsuY0wwsgvxBlZ2ooFV4TNB0jFC1bHG1FDy7PesedKU6GSYv/5UCYfm1B+Dnvc6SshUpq7VmO25KAmg==' crossorigin='anonymous'></script>
    </body>
</html>
