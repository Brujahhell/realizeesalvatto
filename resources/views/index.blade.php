@extends('base')
@section('conteudodapagina')

    <section>
        <div class="linha">
            @foreach($categorias as $categoria)
                <div class="coluna-50">
                    <h2 class="titulo2"> {{$categoria->nome}} </h2>
                    <a href="/categoria/{{$categoria->slug}}">
                        <button><img src="{{$categoria->imagem}}">
                        </button>
                    </a>
                </div>
            @endforeach
        </div>
    </section>

@stop
@section('scripts')
@stop
