@extends('template.layout')

@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            Welcome!
        </div>
        <a class="just_phrase" href="https://laravel-news.com/category/laravel-5.5"> Get updated to Laravel 5.5!</a>
        <p>I know how to develop on Laravel 5.4 too! </p>
        <div class="links">
            <a href="{{route('get_github')}}">Github Challenge!</a>
        </div>
    </div>
</div>
@endsection
