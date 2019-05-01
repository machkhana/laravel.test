@extends('layouts.app')
@section('content')
    <p>autor: {{$questions->users->name}}</p>
    <p>{{$questions->title}}</p>
    <hr>
    comment:
    @foreach($questions->comments as $question)
        <p>avtori: {{$question->users->name}}</p>
        <p>{{$question->text}}</p>
    @endforeach

@endsection