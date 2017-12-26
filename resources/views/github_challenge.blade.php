@extends('template.layout')

@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <img style="height:200px; width:200px;padding:2px;border:solid 2px;" id="profilePic" />
                </div>
                <div class="col-md-4 text-left">
                    <p><b>Name :</b> <span id="name"> </span></p>
                    <p><b>UserName :</b> <span id="login"> </span></p>
                    <p><b>Bio :</b> <span id="bio"> </span></p>
                    <p><b>URL :</b> <span id="url"> </span></p>
                </div>
            </div>
        </div>
        <hr>
        <div class="form-group">
            <input class ="form-control text-center" id="username" placeholder="Github User" />
        </div>
        <a class="btn btn-primary" href="{{route('home')}}">Voltar</a>
        <a class="btn btn-secondary" onclick="github_web()">Pesquisar!</a>
    </div>
</div>
@endsection
