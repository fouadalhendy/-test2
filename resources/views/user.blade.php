@extends('htm')


        @php
            $i=0;
        @endphp
    <table class="table">
        <thead>
        <tr>

            <th scope="col">name</th>
            <th scope="col">ameil</th>
            <th scope="col">buton</th>
        </tr>
        </thead>

        @foreach ($users as $key=>$user)
        @php
        $i++;
        $name=auth()->user();
        @endphp
        @if ($name['id']!=$user['id'])
        <tbody>
            <tr>
            <td >

                {{$user['name']}}

            </td>
            <td>{{$user['email']}}</td>
            <td>
                <form action="{{Route('delet.user',$i)}}" method="post">
                    @method('DELETE')
                    @csrf
                    <button type="submit" style="color: white;background-color: rgb(185, 33, 25);">
                        delete
                    </button>
                    </form>
            </td>
            </tr>
        </tbody>

        @endif
        @endforeach

    </table>

