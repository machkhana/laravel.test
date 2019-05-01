@extends('layouts.app')
@section('content')
    @forelse($questions as $question)
        {{$questions->title}}
    @empty
        Iformation not found
    @endforelse
@endsection