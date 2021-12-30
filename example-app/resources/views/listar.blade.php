@extends('layout.man')
    
@section('titulo','BDR')

@section('conteudo')
@if ($message = Session::get('success'))
        <div class="alert alert-danger">
            <p>{{ $message }}</p>
        </div>
@endif
@if ($message = Session::get('Edit'))
        <div class="alert alert-warning ">
            <p>{{ $message }}</p>
        </div>
@endif
<table class="table table-bordered table-responsive-lg">
<tr>
            
    <th>Name</th>
    <th>E-mail</th>
    <th>Mensagem</th>

            
</tr>
@foreach ($projects as $p)
<tr>
<td>{{ $p->name }}</td>
<td>{{ $p->email }}</td>
<td>{{ $p->msg }}</td>
<td>
<div class="row">
<div class="col-md-3">
<form action="/editar/{{$p->id}}" method="get">
    @csrf
    <button type="submit" class="btn btn-primary">Editar</button>
</form>
</div>
<div class="col-md-3">
<form action="/listar/{{$p->id}}" method="POST">
@csrf
@method('DELETE')
<button type="submit" class="btn btn-danger">Deletar</button>
</form>
</div>
</div>
</td>
</tr>
@endforeach
</table>
<div class="d-flex justify-content-center ">
{!!$projects->links()!!}
</div>
@endsection