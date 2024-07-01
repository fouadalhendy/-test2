@extends('htm')
@section('titil' ,'creat')


@section('hea')
<h1>edit</h1>
@endsection

@section('con')
<form action={{ route('post.update',$post->id) }} method="post" enctype="multipart/form-data" style="display:flex; flex-direction:column; align-items:center; width:100%;">
    @csrf
    <select name="category" >
        @foreach ( $cates as  $cate)

        <option name="category" value={{$cate['id']}}>{{$cate['category']}}</option>

        @endforeach
        </select>
    @method('put')
<label for="titel"><h2>titel</h2></label>
<input type="text" name="titel" id="titel" value={{$post->titel}}>


<label for="description"><h2>description</h2></label>
<textarea type="text" name="description" id="description">{{$post->description}}</textarea>
<img src="../imges/{{$post->img}}" alt="" style="width: 300px;">
<label for="img"><h2>img</h2></label>
<input type="file" name="img" id="img">


@endsection
@section('fot')
<button type="submit">selecte</button>
@endsection
</form>
