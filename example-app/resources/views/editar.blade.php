@extends('layout.man')
    
@section('titulo','BDR')

@section('conteudo')
@if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
@endif

<form action="/editar/update/{{$edit->id}}" method="POST">
    @csrf
    @method('PUT')
    </div>
    <div>
    <div class="col-md-3">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="name" value= "{{$edit->name}}"  class="form-control"/>
    </div>
    <div class="col-md-3">
        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" value= "{{$edit->email}}"class="form-control"/>
    </div>
    <div class="col-md-3">
        <label for="msg">Mensagem:</label>
        <textarea id="msg" name="msg" class="form-control">{{$edit->msg}}</textarea>
    </div>
    <div class="mt-2 mb-3">
    <input type="submit" value="Editar" class="btn btn-success" />
    </div>
    </div>
</form>
@endsection