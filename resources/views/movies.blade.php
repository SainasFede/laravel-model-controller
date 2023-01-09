@extends('layout.main')

@section('content')
    <div class="container d-flex justify-center">
        <h1>Film</h1>
    </div>
    <div class="container">
        <ul>
            @foreach ($movies as movie )
            <li>{{$movie->title}}</li>
            @endforeach
        </ul>
    </div>
@endsection
