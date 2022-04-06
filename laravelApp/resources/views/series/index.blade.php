{{--Rota "/" --}}
@extends('layouts.app')

{{--Se uma secao nao for declarada, na view principal essa view nao aparece (como se nao existisse)--}}
{{--e nenhuma mensagem de erro eh exibida--}}

@section('title')
Séries
@endsection

@section('content')

    {{ $message }}

    <a href={{route('series.create')}}>Adicionar</a>

    <ul class="list-group">
        @foreach($series as $serie)
        <li class="list-group-item">
            {{$serie->name}}

            <form
                method="POST"
                action={{route('series.destroy', ['series' => $serie->id])}}
                onsubmit="return confirm('Tem certeza que deseja remover a serie {{addslashes($serie->name)}}?')"
            >
                @csrf
                @method('DELETE')
                <button>Excluir</button>
            </form>
        </li>
        @endforeach
    </ul>
@endsection
