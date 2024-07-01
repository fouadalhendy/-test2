@extends('htm')
@section('titil' ,'indxe')
@php
    $usernow=auth()->user()

@endphp

@section('hea')
<form action="{{ route('logout') }}" method="post">
    @csrf
    <button type="submit" style="position: fixed; left:10%;">logout</button>
    <h1 style="width: 500px;">All Post</h1>
</form>
<a href={{ route('post.create') }} class="btn btn-primary" style="text-decoration: none;position: fixed; left:10%;">craet</a>
@if ($usernow['admin']==true)
<a href={{ route('admin.user') }} class="btn btn-primary" style="text-decoration: none; left:10%;">users</a>
<a href={{ route('category.user') }} class="btn btn-primary">category</a>
@endif
@endsection


@section('con')



@forelse ( $posts as $post )

@forelse ($tag as $tags )

    @if ($tags['post_id']==$post->id && $tags['tag']==$usernow['id'])
        <p style="color: red">o</p>
    @endif
@empty

@endforelse

<p>{{"category".$post->category_id}}</p>

@foreach ($use as  $values)

    {{-- @if (intval($key+1)==intval($post->id)) --}}
        {{$values}}
    {{-- @endif --}}

@endforeach
<div  style=" display: flex;
flex-direction: column;
justify-content: center;
align-items: center;
width: 100%;
height: 400px;
justify-content: space-around;
margin-top: 60PX;">



        <h3>{{$post->titel}}</h3>
        <p>{{$post->description}}</p>
        <img src="../imges/{{$post->img}}" alt="" style="width: 300px;height: 300px;;">





</div>
<div
style=" display: flex;
border: 1px black solid;
justify-content: center;
align-items: center;
width: 100%;
height: 40px;
justify-content: space-between;
padding: 0 30px;">
    <a href={{ route('post.show',$post->id) }} style="text-decoration: none;text-decoration: none;border: 4px rgb(0, 140, 255) solid;background-color: rgb(0, 140, 255);color:white;">  Show  </a>
@php
    $iduser=auth()->user();
@endphp
        @if( intval($iduser['id'])===intval($post->user_id)||$usernow['admin']==true)

        <a href={{ route('post.edit',$post->id) }} style="text-decoration: none;text-decoration: none;border: 4px rgb(25, 185, 110) solid;background-color: rgb(25, 185, 110);color:white;">Update</a>
        <form action="{{ route('post.destroy',$post->id) }}" method="post" style=" display: flex;
            flex-direction: column;">
            @csrf
            @method('DELETE')
            <button type="submit" style="background-color: rgb(255, 0, 0);color:white;border:none; height:33px;">Delete</button>

        </form>
        @endif
</div>

@empty

{{"insert data"}}
@endforelse




@endsection




@section('fot')



@endsection
