@extends('faq::layout')
@section('pageTitle','بخش سوالات متداول')

@section('content')
<article>
    @foreach($faqs as $faq)

    <h2><p>{{$faq->q}}</p></h2>
    <p>{{$faq->a}}</p>
    @endforeach

</article>
@endsection
