@extends('master')
@section('title', 'Happy Book Store')

@section('content')
    <div class="table2n">
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">Title</th>
                <th> </th> <th> </th>
                <th scope="col">Author</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($books as $book)
                    <tr>
                        <td><a href="/bookdetail/{{ $book->id }}">{{ $book->title }}</a></td>
                        <td> </td> <td> </td>
                        <td>{{ $book->detail->author }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="right">{{$books->appends($_GET)->links()}}</div>
    

    <style>
        .table{
            width: 65em;
        }

        td a{
            text-decoration: none;
            color: black;
        }

        .right{
            display: flex;
            justify-content: center;
        }
    </style>
@endsection