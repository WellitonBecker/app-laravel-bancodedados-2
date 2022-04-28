@extends("layout")

@section('titulo')
    Listagem de Pessoas
@stop

@section('conteudo')
    Listagem de Pessoas
    <hr>
    <table class="table">
        <tr>
            <td>ID</td>
            <td>Nome</td>
            <td>E-Mail</td>
            <td>Ações</td>
        </tr>
        @foreach ($pessoa as $p)
            <tr>
                <td><a href="pessoa/{{$p->id}}">{{$p->id}}</a></td>
                <td>{{$p->nome}}</td>
                <td>{{$p->email}}</td>
                <td><a href="pessoa_delete/{{$p->id}}">Deletar</td>
            </tr>
        @endforeach
    </table>
@stop