@extends('layouts.app')
@section('content')
    @forelse($users as $user)
        <a href="{{route('question.show',$user->id)}}">{{$user->name}}</a>
    @empty
        Iformation not found
    @endforelse
@endsection