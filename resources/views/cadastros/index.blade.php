@extends('cadastros.layout')
@section('container')
<h1 style="margin-left: 250px;">Lista de Desenvolvedor</h1>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Sexo</th>
            <th>Idade</th>
            <th>Robby</th>
            <th>Data de Nacimento</th>
            <th>Opções</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($cadastros as $cadastro)
            <tr>
                <td>{{$cadastro->id}}</td>
                <td>{{$cadastro->nome}}</td>
                <td>{{$cadastro->sexo}}</td>
                <td>{{$cadastro->idade}}</td>
                <td>{{$cadastro->robby}}</td>
                <td>{{datetimeformat($cadastro->datanascimento, 'd/m/Y')}}</td>
             
                <td>
                    <div class="btn-group" role="group" aria-label="">
                        <a name="" id="" class="btn btn-primary" href="/developers/{{$cadastro->id}}/edit" role="button">Editar</a>
                        <form action="{{route('cadastros.delete',['id' => $cadastro->id])}}" method="POST">
                            @csrf
                            @method("DELETE")
                            <button class="btn btn-danger" type="submit">Remover</button>
                        </form>
                    </div>
                </td>
                
            </tr>
        @endforeach
    </tbody>
</table>
<a name="" id="" class="btn btn-primary" href="/developers/create" role="button">Novo Cadastro</a>
@endsection
