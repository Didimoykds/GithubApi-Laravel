@extends('template.layout')

@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            Welcome!
        </div>
        <a class="just_phrase" href="https://laravel-news.com/category/laravel-5.5"> Get updated to Laravel 5.5!</a>
        <div class="links">
            <a href="{{route('get_github')}}">Consult Github</a>
            <a href="{{route('get_ip')}}">Consult Ip</a>
            <a href="{{route('get_cep')}}">Consult Cep Address</a>
        </div>
    </div>
</div>
@endsection
