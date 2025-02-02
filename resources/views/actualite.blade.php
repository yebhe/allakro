@extends('layouts.app')

@section('content')
    <div class="container">
        <br>
        <br>

        <h1 class="text-center mb-5" style="text-color: #0c5460">Tous les news du Village
        </h1>

        <h2>Aménagements</h2>
        @include('partials.news_card', ['items' => $amenagement])

        <h2>Déménagements</h2>
        @include('partials.news_card', ['items' => $demenaagement])

        <h2>Naissances</h2>
        @include('partials.news_card', ['items' => $naissance])

        <h2>Décès</h2>
        @include('partials.news_card', ['items' => $deces])
    </div>
@endsection
<br>
<br>
