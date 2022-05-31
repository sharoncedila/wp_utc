@extends('master')
@section('title', 'book')

@section('content')
    <div class="card mb-3 card-detail" style="width: 70em">
        <div class="row g-0">
        <div class="col-md-3 picture-gap">
            <img src="{{ asset($book->picture) }}.jpg" class="img-fluid rounded-start" alt="{{ $book->title }}">
        </div>
        <div class="col-md-9">
            <div class="card-body">
                <div class="divi">
                    <div class="book-title-year">
                        <h5 class="card-title">{{ $book->title }}</h5>
                        <span class="card-text"><small class="text-muted">{{ $book->detail->year }}</small></span> <br>
                    </div>
                </div>
                <div class="divi">
                    <span><b>{{ $book->detail->author }}</b></span>
                    <span class="card-text"><small class="text-muted">author</small></span> <br>
                </div>
                <div class="divi">
                    <span><b>{{ $book->detail->publisher }}</b></span>
                    <span class="card-text"><small class="text-muted">publisher</small></span> 
                </div>
                <div class="divi">
                    <p class="card-text">{{ $book->detail->description }}</p>
                </div>
            </div>
        </div>
        </div>
    </div>

    <style>
        .picture-gap{
            padding: 1.5em;
        }

        .card-detail{
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: center;
        }
        
        span{
            margin-right: 0.5rem;
        }

        .book-title-year{
            display: flex;
            flex-direction: row;
            gap: 0.5rem;
        }

        .card-body{
            display: flex;
            flex-direction: column;
            gap: 0.25rem;
            margin-right: 2em;
        }
    </style>
@endsection