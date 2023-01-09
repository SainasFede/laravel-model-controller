@extends('layout.main')

@section('content')
    <div class="container d-flex justify-center mb-5">
        <h1>Film</h1>
    </div>
    <div class="container">
        <div class="row">
            @foreach ($movies as $movie)
            <div class="col-4 mb-2">
                <a href="{{route('movieDetail', $movie->id)}}"><h3 class="text-danger">{{$movie->title}}</h3></a>
                <h5>{{$movie->date}}</h5>
            </div>
            @endforeach
        </div>
    </div>
@endsection
