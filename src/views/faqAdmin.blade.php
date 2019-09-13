@extends('faq::layout')

@section('pageTitle', 'مدیریت بخش سوالات متداول')


@section('content')

<article>
    <h2>افزودن بخش جدید</h2>
    <form action="#" method="post" class="{{asset('css/style.css')}}">
        <label for="question">سوال</label>
        <input type="text" name="question" id="question">

        <label for="answer">پاسخ</label>
        <textarea name="answer" id="answer" cols="30" rows="10"></textarea>

        <input type="submit" value="ذخیره">

    </form>
</article>
<hr>

<article>
    <h2>ویرایش بخش های قبلی</h2>
    <table border="1">
        <thead>برای ویرایش هر بخش از قسمت عملیات مقابل هر یک از عناوین استفاده کنید</thead>
        <tbody>
            <tr>
                <td>ردیف</td>
                <td>عناوین</td>
                <td>مشاهده</td>
                <td>ویرایش</td>
                <td>حذف</td>
            </tr>
            @foreach ($questionList as $faq)
            <tr>
                <td>{{$faq->id}}</td>
                <td><a href="/faq/{{$faq->id}}">{{$faq->q}}</a></td>
                <td><a href="/faq/{{$faq->id}}">مشاهده</a></td>
                <td>ویرایش</td>
                <td>حذف</td>
            </tr>
<hr>
            @endforeach
        </tbody>
    </table>
</article>
@endsection
