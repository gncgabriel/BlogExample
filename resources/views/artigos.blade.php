@extends('layouts.layout')

@section('header')
    @component('components.header', ['artigos_active' => 'active'])

    @endcomponent
@endsection

@section('conteudo')
    <div class="title_page pt-3">
        <h1 class="font-sen-extra-bold">Artigos</h1>
    </div>
    <div class="d-flex  justify-content-center justify-content-lg-between flex-wrap">
        @for ($i = 0; $i < 10; $i++)
            @component('components.card', [
                'imagem' => asset('images/DataScience.png'),
                'titulo' => 'Ciência de Dados e Covid, Uma análise de dados',
                'spoiler' => 'Desde o surgimento da COVID-19, um dos maiores desafios é minimizar o contágio do vírus',
                ])

            @endcomponent

        @endfor
    </div>
@endsection
