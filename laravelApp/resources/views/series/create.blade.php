{{--Rota "/create" --}}
@extends('layouts.app')

@section('title')
Adicionar série
@endsection

@section('content')
    <form method="POST">
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" name="nome" id="nome">

        </div>
        <button class="btn btn-primary">Adicionar</button>
    </form>
@endsection
