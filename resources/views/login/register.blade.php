@extends("htmllogin")

@section('titel'.'reg')

@section('head')
    <h1>Creat A In Page</h1>
@endsection
@section("centar")
    <form action={{ route('regester') }} method="post"     style=" display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    width: 100%;
    height: 500px;
    gap:10px">
@csrf


<label for="name">name</label>
<input type="text" name="name" id="name" style="width: 75%; height: 30px;">


<label for="email">email</label>
<input type="email" name="email" id="email" style="width: 75%; height: 30px;">


<label for="password">password</label>
<input type="password" name="password" id="password" style="width: 75%; height: 30px;">


    <label for="password_confirmation">password_confirmation</label>
    <input type="password_confirmation" name="password_confirmation" id="password_confirmation" style="width: 75%; height: 30px;">


<button type="submit" style="width: 70%;height: 45px; background-color: rgb(0, 102, 255);margin-top: 30PX;">Creat Page</button>

    </form>
@endsection
