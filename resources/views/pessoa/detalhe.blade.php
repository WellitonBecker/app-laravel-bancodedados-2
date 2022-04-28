@extends("layout")

@section('titulo')
    Detalhe da Pessoa <b>{{$pessoa->nome}}</b>
@stop

@section('conteudo')
    Detalhe da Pessoa <b>{{$pessoa->nome}}</b>
    <hr>
    Nome: {{$pessoa->nome}}<br>
    E-Mail: {{$pessoa->email}}
@stop