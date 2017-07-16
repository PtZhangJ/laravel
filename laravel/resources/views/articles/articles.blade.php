@extends('peterzhang')
@section('content')
    @foreach($articles as $art)
    <h1>{{ $art->title }}</h1>
    <a href="#">{{ $art->author }}</a>
    <p>{{  $art->content }}</p>
    @endforeach
@stop
