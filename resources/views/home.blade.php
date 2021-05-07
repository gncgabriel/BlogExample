
@extends('layouts.layout',  ['home_active' => 'active'])


@section('anuncio')

    @component('components.anuncio')
    @endcomponent

@endsection

@section('conteudo')


<div class="d-flex justify-content-center ">
    <h1 style="font-weight: bold; font-size: 50px" >Media Tech</h1>
</div>


<div class="title_page pt-3">
    <h3 class="font-sen-extra-bold">Destaques</h3>
</div>
<div class="d-flex  justify-content-center justify-content-lg-start flex-wrap">
    @for ($i = 0; $i < 3; $i++)
        @component('components.card', [
            'imagem' => asset('images/DataScience.png'),
            'titulo' => 'Google apoia novo padrão de segurança para aplicativos VPN no smartphone',
            //'spoiler' => 'Desde o surgimento da COVID-19, um dos maiores desafios é minimizar o contágio do vírus',
            ])

        @endcomponent

    @endfor
</div>


<div class="title_page pt-3">
    <h3 class="font-sen-extra-bold">Todos</h3>
</div>
<div class="d-flex  justify-content-center justify-content-lg-start flex-wrap">
    @for ($i = 0; $i < 8; $i++)
        @component('components.card', [
            'imagem' => asset('images/DataScience.png'),
            'titulo' => 'Google apoia novo padrão de segurança para aplicativos VPN no smartphone',
            //'spoiler' => 'Desde o surgimento da COVID-19, um dos maiores desafios é minimizar o contágio do vírus',
            ])

        @endcomponent

    
    @endfor
</div>


@endsection
