{{--Rota "/" --}}
@extends('layouts.app')

{{--Se uma secao nao for declarada, na view principal essa view nao aparece (como se nao existisse)--}}
{{--e nenhuma mensagem de erro eh exibida--}}

@section('title')
Séries
@endsection

@section('content')
    <a href="/series/create">Adicionar</a>

    <ul class="list-group">
        @foreach($series as $serie)
        <li class="list-group-item"><?= $serie; ?></li>
        @endforeach
    </ul>
@endsection
