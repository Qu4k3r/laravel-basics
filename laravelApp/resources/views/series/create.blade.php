{{--Rota "/create" --}}
@extends('layouts.app')

@section('title')
Adicionar série
@endsection

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action={{route('series.index')}}>
{{--        quando o Laravel recebe uma requisição com dados de formulário por post,--}}
{{--        ele verifica que estamos mandando para ele um token de verificação para assegurar--}}
{{--        que essa requisição está chegando pelo próprio site.--}}
{{--        Esse token pode ser enviado adicionando a linha @csrf ao nosso formulário.--}}
        @csrf
        <div class="form-group">
            <label for="name">Nome</label>
            <input type="text" class="form-control" name="name" id="name">

        </div>
        <button class="btn btn-primary">Adicionar</button>
    </form>
@endsection
