@extends('master')
@section('title', "Book List")

@section('content')
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Title</th>
            <th> </th> <th> </th>
            <th scope="col">Author</th>
        </tr>
        </thead>
        <tbody>
            <div class="genre-name">
                <div class="genre-ituan">
                    Genre
                </div> 
                <div class="bold">
                    <b>{{ $category->category }}</b>
                </div>
            </div>
            
            @forelse ($books as $book)
                <tr>
                    <td><a href="/bookdetail/{{ $book->id }}">{{ $book->title }}</a></td>
                    <td> </td> <td> </td>
                    <td>{{ $book->detail->author }}</td>
                </tr>
            @empty
                <tr>
                    <td>No Data</td>
                    <td> </td> <td> </td>
                    <td> </td>
            @endforelse
        </tbody>
    </table>

    <style>
        .table{
            width: 65em;
        }

        td a{
            text-decoration: none;
            color: black;
        }

        .genre-name{
            font-size: 1.25em;
            display: flex;
            flex-direction: row;
            gap: 0.4rem;
            justify-content: center;
            border-top: 1.5px solid #efcc00;
            border-bottom: 1.5px solid #efcc00;
            padding: 0.25em;
        }
    </style>
@endsection