


{{--comentario que sera descartado.--}}

@php

//para comentario php de uma unica linha

/* para comentario de mutiplas linhas
opa op
*/

@endphp

@if(count($fornecedores)>0 && count($fornecedores)< 10)

<h3>existe objeto cadastrado</h3>

@elseif(count($fornecedores)>10)
    <h3>existe mais de 10 objeto cadastrado</h3> 

@endif