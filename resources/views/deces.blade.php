@extends('layouts.app')

@section('head')
    <!-- Balises spécifiques à la page d'accueil -->
@endsection

@section('content')
    <h1 style="text-align: center">Formulaire d'enregistrement de Décès  </h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <form action="{{route('deces.store')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="nom">Nom du defunt</label>
            <input name="nom" type="text" class="form-control" id="nom" placeholder="Entrez le nom du defunt">
        </div>
        <div class="form-group">
            <label for="tuteur">Nom et Prénom du Père du Defunt</label>
            <input name="tuteur" type="text" class="form-control" id="tuteur" placeholder="Entrez le nom du père du defunt">
        </div>
        <div class="form-group">
            <label for="tutrice">Nom et Prénom de la Mère du Defunt</label>
            <input name="tutrice" type="text" class="form-control" id="tutrice" placeholder="Entrez le nom de la mère du defunt">
        </div>
        <div class="form-group">
            <label for="sexe">Sexe</label>
            <select name="sexe" class="form-control" id="sexe">
                <option>Masculin</option>
                <option>Féminin</option>
            </select>
        </div>
        <div class="form-group">
            <label for="profession">Sa Profession</label>
            <input name="profession" type="text" class="form-control" id="profession" placeholder="Entrez la profession du defunt">
        </div>
        <div class="form-group">
            <label for="dateNaissance">Date de Naissance</label>
            <input name="dateNaissance" type="date" class="form-control" id="dateNaissance">
        </div>
        <div class="form-group">
            <label for="dateDemenagement">Date de deces</label>
            <input name="dateDemenagement" type="date" class="form-control" id="dateDemenagement">
        </div>
        <div class="form-group">
            <label for="provenance">Residence</label>
            <input name="provenance" type="text" class="form-control" id="provenance" placeholder="Entrez l'encien lieu de residence du defunt">
        </div>
        <div class="form-group">
            <label for="destination">lieu du deces</label>
            <input name="destination" type="text" class="form-control" id="destination" placeholder="lieu de décès">
        </div>
        <button type="submit" class="btn btn-primary">Envoyer</button>
    </form>
    <br>
    <br>
@endsection

