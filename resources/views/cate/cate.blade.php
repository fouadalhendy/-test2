<a href={{ route('cat.creat') }}>create category</a>
@forelse ($cate as $cates )
    <p>{{$cates['category']}} </p>
    <form action={{ route('cate.destroy', $cates['id']) }} method="post">
        <button type="submit">deleat</button>
    </form>
@empty

@endforelse
