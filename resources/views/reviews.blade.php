@extends('layouts.layout')

@section('header')
    @component('components.partials.header', ['reviews_active' => 'active'])
        
    @endcomponent
@endsection

@section('conteudo')
    <div class="title_page pt-3">
        <h1 class="font-sen-extra-bold">Reviews</h1>
    </div>
@endsection
