@extends('cadastros.layout')
@section('container')
<div class="container">
<h1 style="margin-left: 200px;">Cadastro de Desenvolvedor</h1>
<a name="" id="" class="btn btn-primary" href="/developers" role="button">Listar</a>
<br>
<br>
    <form action="/developers/store" method="POST">
        @csrf
        <div class="form-group">
          <label for="">Nome:</label>
          <input type="text"
            class="form-control" name="nome" id="" aria-describedby="helpId" placeholder="">
        </div>
        <div class="form-group">
          <label for="">Sexo</label>
          <select class="form-control" name="sexo" id="">
            <option value="">Seleciona</option>
            <option value="Masculino">Masculino</option>
            <option value="Feminino">Feminino</option>
          </select>
        </div>
        <div class="form-group">
          <label for="">Idade:</label>
          <input type="number" class="form-control" name="idade" id="" aria-describedby="helpId" placeholder="">
        </div>
        <div class="form-group">
          <label for="">Robby:</label>
          <input type="text" class="form-control" name="robby" id="" aria-describedby="helpId" placeholder="">
        </div>
        <div class="form-group">
          <label for="">Data de Nacimento:</label>
          <input type="date" class="form-control" name="datanascimento" id="" aria-describedby="helpId" placeholder="">
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
</div>
@endsection
