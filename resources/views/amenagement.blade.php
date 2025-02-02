@extends('layouts.app')

@section('head')
    <!-- Balises spécifiques à la page d'accueil -->
@endsection

@section('content')
    <h1 style="text-align: center">Formulaire d'amenagement</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <form action="{{route('amenagement.store')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="nom">Nom et Prénom</label>
            <input name="nom" type="text" class="form-control" id="nom" placeholder="Entrez votre nom et prenom">
        </div>
        <div class="form-group">
            <label for="tuteur">Nom et Prénom du Père</label>
            <input name="tuteur" type="text" class="form-control" id="tuteur" placeholder="Entrez le nom complet de votre père">
        </div>
        <div class="form-group">
            <label for="tutrice">Nom et Prénom de la Mère</label>
            <input name="tutrice" type="text" class="form-control" id="tutrice" placeholder="Entrez le nom complet de votre mère">
        </div>
        <div class="form-group">
            <label for="sexe">Sexe</label>
            <select name="sexe" class="form-control" id="sexe">
                <option>Masculin</option>
                <option>Féminin</option>
            </select>
        </div>
        <div class="form-group">
            <label for="profession">Profession</label>
            <input name="profession" type="text" class="form-control" id="profession" placeholder="Entrez votre profession">
        </div>
        <div class="form-group">
            <label for="dateNaissance">Date de Naissance</label>
            <input name="dateNaissance" type="date" class="form-control" id="dateNaissance">
        </div>
        <div class="form-group">
            <label for="dateAmenagement">Date d'Aménagement</label>
            <input name="dateAmenagement" type="date" class="form-control" id="dateAmenagement">
        </div>
        <div class="form-group">
            <label for="provenance">Provenance</label>
            <input name="provenance" type="text" class="form-control" id="provenance" placeholder="Entrez votre localite de provenance">
        </div>
        <div class="form-group">
            <label for="destination">Votre Nouvelle Destination</label>
            <input name="destination" type="text" class="form-control" id="destination" placeholder="Entrez votre nouvelle destination">
        </div>
        <button type="submit" class="btn btn-primary">Envoyer</button>
    </form>
    <br>
    <br>
@endsection

