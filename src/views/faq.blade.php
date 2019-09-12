@extends('faq::layout')
@section('pageTitle','بخش سوالات متداول')

@section('content')
<article>
    @foreach($faqs as $faq)

    <p>{{$faq->q}}</p>
    <p>{{$faq->a}}</p>
    @endforeach
</article>
@endsection
