@extends('faq::layout')
@section('title','سوالات متداول')

@section('content')
    <article>
        @foreach($data as $it)
        <h2><a href="/faq/{{$it->id}}"> {{$it->q}}</a></h2>
        <p>{{$it->a}}</p>
            @endforeach
    </article>
@endsection
