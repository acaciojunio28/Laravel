@extends('layout.man')
    
@section('titulo','BDR')

@section('conteudo')

<form action="/" method="post">
    @csrf
    <div>
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome"/>
    </div>
    <div>
        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" />
    </div>
    <div>
        <label for="msg">Mensagem:</label>
        <textarea id="msg" name="msg"></textarea>
    </div>
    <input type="submit" value="anviar" />
</form>

@endsection