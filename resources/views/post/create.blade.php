@extends('htm')
@section('titil' ,'creat')


@section('hea')
<h1>creat</h1>
@endsection

@section('con')
<form action={{ route('post.store') }} method="post" enctype="multipart/form-data"
style=" display: flex;
flex-direction: column;
justify-content: center;
align-items: center;
width: 100%;
height: 600px;
justify-content: space-around;">
@csrf


    <select name="category" >
    @foreach ( $cates as  $cate)

    <option name="category" value={{$cate['id']}}>{{$cate['category']}}</option>

    @endforeach
    </select>

<label for="titel"><h3>titel</h3></label>
<input type="text" name="titel" id="titel" style="width: 90%; height: 30px;">

<label for="description"><h3>description</h3></label>
<textarea type="text" name="description" id="description" style="width: 90%; height: 90px;"></textarea>
<label for="img"><h3>img</h3></label>
<input type="file" name="img" id="img" >
<button type="submit" style="width: 70%;height: 45px; background-color: rgb(0, 102, 255);margin-top: 30PX;">Create The Post</button>
</form>
@endsection


@section('fot')

@endsection

