@extends('template.layout')

@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        <h2>Just for demonstration</h2>
        <br/>
        <div class="container">
            <form class="row">
                <div class="form-group col-md-6">
                    <label for="cep">CEP</label>
                    <input id="cep" class="form-control text-center" onkeyup="fetch_cep()" type='text'/>
                </div>
                <div class="form-group col-md-6">
                    <label for="cidade">Cidade</label>
                    <input id="cidade" class="form-control text-center" type="text" />
                </div>
                <div class="form-group col-md-6">
                    <label for="logradouro">Logradouro</label>
                    <input id="logradouro" class="form-control text-center" type="text" />
                </div>
                <div class="form-group col-md-6">
                    <label for="bairro">Bairro</label>
                    <input id="bairro" class="form-control text-center" type="text" />
                </div>
                <div class="form-group col-md-6">
                    <label for="complemento">Complemento</label>
                    <input id="complemento" class="form-control text-center" type="text" />
                </div>
                <div class="form-group col-md-6">
                    <label for="numero">Número</label>
                    <input id="numero" class="form-control text-center" type="number" max="9999" />
                </div>
            </form>
        </div>
        <hr>
        <a class="btn btn-primary" href="{{route('home')}}">Return</a>
    </div>
</div>
@endsection
