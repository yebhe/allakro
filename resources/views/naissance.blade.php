@extends('layouts.app')

@section('head')
    <!-- Balises spécifiques à la page d'accueil -->
@endsection

@section('content')
    <h1 style="text-align: center">Formulaire de naissance</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <form action="{{route('naissance.store')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="nom">Nom et prénom du bébé</label>
            <input name="nom" type="text" class="form-control" id="nom" placeholder="Entrez le nom du nouveau né">
        </div>
        <div class="form-group">
            <label for="tuteur">Nom et Prénom du père</label>
            <input name="tuteur" type="text" class="form-control" id="tuteur" placeholder="Entrez le nom complet du père">
        </div>
        <div class="form-group">
            <label for="tutrice">Nom et Prénom de la mère</label>
            <input name="tutrice" type="text" class="form-control" id="tutrice" placeholder="Entrez le nom complet de la mère">
        </div>
        <div class="form-group">
            <label for="sexe">Sexe</label>
            <select name="sexe" class="form-control" id="sexe">
                <option>Masculin</option>
                <option>Féminin</option>
            </select>
        </div>
        <div class="form-group">
            <label for="profession">Profession du père</label>
            <input name="profession" type="text" class="form-control" id="profession" placeholder="Entrez la profession du père">
        </div>
        <div class="form-group">
            <label for="dateNaissance">Date de Naissance</label>
            <input name="dateNaissance" type="date" class="form-control" id="dateNaissance">
        </div>
        <div class="form-group">
            <label for="dateAmenagement">Date Batême</label>
            <input name="dateDemenagement" type="date" class="form-control" id="dateAmenagement">
        </div>
        <div class="form-group">
            <label for="provenance">Redidence</label>
            <input name="provenance" type="text" class="form-control" id="provenance" placeholder="Entrez votre lieu de residence">
        </div>
        <div class="form-group">
            <label for="destination">Lieu de naissance</label>
            <input name="destination"  type="text" class="form-control" id="destination" placeholder="Entrez le lieu de naissance du bébé">
        </div>
        <button type="submit" class="btn btn-primary">Envoyer</button>
    </form>
    <br>
    <br>
@endsection


