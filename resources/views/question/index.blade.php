@extends('layouts.app')
@section('content')
    @forelse($questions as $question)
        {{$question->users->name}}
    @endforelse
@endsection