<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titel')</title>
</head>
<body style=" display: flex;
flex-direction: column;
justify-content: center;
align-items: center;
padding-top: 50px;
">
    <div class="head"
    style=" display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    width: 100vw;">
        @yield('head')
    </div>

    <div class="centar"
    style="width: 33.3%;
    border: 1px black solid;" >
        @yield('centar')
    </div>

    <div class="footer">
        @yield('footer')

    </div>

</body>
</html>
