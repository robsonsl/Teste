@extends('cadastros.layout')
@section('container')
<div class="container">
<a name="" id="" class="btn btn-primary" href="/developers" role="button">Listar</a>
<br>
<br>
    <form action="/developers/{{$cadastro->id}}/update" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
          <label for="">Nome:</label>
          <input type="text" value="{{$cadastro->nome}}"
            class="form-control" name="nome" id="" aria-describedby="helpId" placeholder="">
        </div>

       

        
        <div class="form-group">
          <label for="">Sexo</label>
          <select class="form-control" name="sexo" id="sexo" >
            <option value="">Seleciona</option>
            <option value="Masculino">Masculino</option>
            <option value="Feminino">Feminino</option>
          </select>
        </div>
        <div class="form-group">
          <label for="">Idade:</label>
          <input type="number" value="{{$cadastro->idade}}"
          class="form-control" name="idade" id="" aria-describedby="helpId" placeholder="">
        </div>
        <div class="form-group">
          <label for="">Robby:</label>
          <input type="text" value="{{$cadastro->robby}}"
          class="form-control" name="robby" id="" aria-describedby="helpId" placeholder="">
        </div>
        <div class="form-group">
          <label for="">Data de Nacimento:</label>
          <input type="" value="{{datetimeformat($cadastro->datanascimento, 'd/m/Y')}}"
          class="form-control" name="datanascimento" id="" aria-describedby="helpId" placeholder="">
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
</div>
<script type="text/javascript">
   

  
   $("#sexo").val("{{$cadastro->sexo}}");
  
  
</script>
@endsection

