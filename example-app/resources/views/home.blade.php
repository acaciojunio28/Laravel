@extends('layout.man')
    
@section('titulo','BDR')

@section('conteudo')

<form action="/" method="post">
    @csrf
    </div>
    <div>
    <div class="col-md-3">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" class="form-control"/>
    </div>
    <div class="col-md-3">
        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" class="form-control"/>
    </div>
    <div class="col-md-3">
        <label for="msg">Mensagem:</label>
        <textarea id="msg" name="msg" class="form-control"></textarea>
    </div>
    <div class="mt-2 mb-3">
    <input type="submit" value="anviar" class="btn btn-success" />
    </div>
    </div>
</form>
@if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
@endif

@endsection