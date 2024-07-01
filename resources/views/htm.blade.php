
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <title>@yield('titel')</title>
</head>
<body style=" display: flex;
flex-direction: column;
justify-content: center;
align-items: center;
padding-top: 20px;
">
    <div class="hea" style="position: relative;">
        @yield('hea')
    </div>
    <div class="con "
    style="width: 33.3%;
    border: 1px black solid;
    " >
        @yield('con')
    </div>
</body>

<div style="display: flex;

padding-top: 10px;" >
<div class="fot "
style="display: flex;

padding-top: 10px;" >
    @yield('fot')
</div>


<div class="fot2"> @yield('fot2')</div>

</div>

</html>
