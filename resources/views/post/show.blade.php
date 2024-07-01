@extends('htm')
@section('titil' ,'creat')


@section('hea')
<h1>Show The Post</h1>
@endsection

@section('con')
<div style="display:flex; flex-direction:column; align-items:center; width:100%;gap:10px;">
    <h2 >{{$post->titel}}</h2>
    <p style="">{{$post->description}}</p>
    <img src="../imges/{{$post->img}}" alt="" style="width: 300px;">
<form action={{route('post.comtag',$post->id)}} method="post">
    @csrf
    <input type="text" name="coment">
    <select name="tags" >
    <option value="null">null</option>
    @foreach ( $users as  $user)
    @foreach ( $user as $key=> $use)
    <option value="{{$key}}">{{$use}}</option>
    @endforeach
    @endforeach
    </select>
    <button type="submit" name="Comente">Comente</button>
</form>
</div>
<a href="{{route('post.index')}}" style="text-decoration: none;"> posts</a>
@endsection

@section('fot')

<div>
    @forelse ($tag as $tags )

        <p>{{$tags['name']."=>"}}</p>
    @empty
        كن اول من يعلق
    @endforelse
</div>

<div>
    @forelse ($com as $coment )
        <p>{{$coment['coment']}}</p>
    @empty

    @endforelse
</div>

@endsection
