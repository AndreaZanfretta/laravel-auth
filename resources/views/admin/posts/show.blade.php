@extends('layouts.back')

@section('content')
    <h1>{{$post->title}}</h1>
    <p>{{$post->content}}</p>
    <h5>Pubblicato: {{$post->published ? 'si' : 'no'}}</h5>
@endsection