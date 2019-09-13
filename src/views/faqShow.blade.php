@extends('faq::layout')
@section('pageTitle','مشاهده سوال و پاسخ')

@section('content')
<article>

{{"ردیف: ".$faq->id}}
    <h2>
        <p>{{"سوال: ".$faq->q}}</p>
    </h2>
    <p>{{"پاسخ: ".$faq->a}}</p>
   

</article>
@endsection
