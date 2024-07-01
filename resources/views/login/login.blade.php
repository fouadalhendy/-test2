@extends("htmllogin")
@section('titel'.'reg')

@section('head')
    <h1>Login In To Get Start</h1>
@endsection
@section("centar")
    <form action={{ route('login') }} method="post"   style=" display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    width: 100%;
    height: 500px;
    gap:10px">
@csrf
<label for="email"><h2>email</h2></label>
<input type="email" name="email" id="email" style="width: 75%; height: 30px;">

<label for="password"><h2>password</h2></label>
<input type="passwor" name="password" id="password"  style="width: 75%; height: 30px;">
<button type="submit"  style="width: 70%;height: 45px; background-color: rgb(0, 102, 255);margin-top: 30PX;"><h4>Login To Page </h4></button>
<a href="reg" > regest</a>
    </form>
@endsection
