@extends('layouts.layout')



@section('header')
    @component('components.header', ['noticias_active' => 'active'])

    @endcomponent
@endsection

@section('anuncio')
<div class="box_anuncio">
    <div class="container">

    </div>
</div>
@endsection

@section('conteudo')
    <div class="banner">
        @component('components.banner')

        @endcomponent
    </div>
    <div class="noticias_home_container d-md-flex justify-content-between">
        <div class="card_noticias d-flex justify-content-center justify-content-lg-between flex-wrap">
            <div class="mais_lidas_mobile d-flex d-lg-none col-lg-12 flex-column justify-content-center align-items-center">
                <div>
                    <h3>Destaques</h3>
                </div>
                <div class="swiper-container swiper_mais_lidas_mobile">
                    <div class="swiper-wrapper">
                        @for ($j = 0; $j < 4; $j++)
                            <div class="swiper-slide text-left">
                                @component('components.card_list', [
                                    'titulo' => 'Ciência de Dados e Covid, Uma análise de dados',
                                    'spoiler' => 'Desde o surgimento da COVID-19, um dos maiores desafios é
                                        minimizar o contágio do vírus',
                                    'autor' => 'NC Tocha'
                                    ])
                                @endcomponent
                            </div>
                        @endfor
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
            <div class="title_section mt-3">
                <h3>Notícias</h3>
            </div>
            @for ($i = 0; $i < 10; $i++)
                @component('components.card', [
                    'imagem' => asset('images/News.jpeg'),
                    'titulo' => 'Covid-19 e a Ciência de dados: Driblando a Epidemia.',
                    'spoiler' => 'Desde o surgimento da COVID-19, um dos maiores desafios é minimizar o contágio do vírus',
                    ])
                @endcomponent
            @endfor
        </div>
        <div class="d-none d-lg-block mais_lidas">
            <div class="title_section mt-3">
                <h3>Mais Lidas</h3>
            </div>
            <div class="d-flex justify-content-center justify-content-md-between flex-wrap">
                @for ($i = 0; $i < 4; $i++)
                    @component('components.card_list', [
                        'titulo' => 'Covid-19 e a Ciência de dados: Driblando a Epidemia.',
                        'spoiler' => 'Desde o surgimento da COVID-19, um dos maiores desafios é minimizar o contágio do vírus',
                        'autor' => 'NC Tocha',
                        ])
                    @endcomponent
                @endfor
            </div>
        </div>
    </div>
@endsection
