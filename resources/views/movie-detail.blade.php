@extends('layout.main')

@section('content')
    <div class="container">
        <h1>{{movie->title}}</h1>
        <h3>{{movie->original_title}}</h3>
        <h4>{{movie->nationality}}</h4>
        <h6>{{movie->date}}</h6>
        <h6>{{movie->vote}}</h6>
    </div>
@endsection
