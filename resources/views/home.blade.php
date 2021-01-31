
@extends('layouts.layout',  ['home_active' => 'active'])

@section('header')
    @component('components.header', ['home_active' => 'active'] )
        
    @endcomponent
@endsection

@section('conteudo')
    <div class="banner">
        @component('components.banner')

        @endcomponent
    </div>
@endsection
