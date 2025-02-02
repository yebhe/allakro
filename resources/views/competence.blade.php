@extends('layouts.app')

@section('head')
    <!-- Balises spécifiques à la page d'accueil -->
@endsection

@section('content')
    <br>
    <br>
    <h1>Presentez vos compétence</h1>
    <p>Vous pouvez présenter vos compétences en remplissant le formulaire ci-dessous.</p>
    <br>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <form action="{{route('competence.store')}}" method="post" class="jumbotron" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="nom">Nom et prenom</label>
            <input name="nom" type="text" class="form-control" id="nom" placeholder="Entrez votre nom">
        </div>
        <div class="form-group">
            <label for="service">Nom et Prénom du Tuteur</label>
            <input name="service" type="text" class="form-control" id="service" placeholder="Entrez  service">
        </div>
        <div class="form-group">
            <label for="lieu">le lieu du service</label>
            <input name="lieu" type="text" class="form-control" id="lieu" placeholder="Entrez le lieu">
        </div>

        <div class="form-group">
            <label for="contact">Votre Contact</label>
            <input name="contact" type="text" class="form-control" id="contact" placeholder="Entrez votre Contact">
        </div>

        <div class="form-group">
            <label for="destination">Votre Email</label>
            <input name="email" type="email" class="form-control" id="email" placeholder="Entrez votre email">
        </div>

        <div class="form-group">
            <label for="destination">Votre Specialité</label>
            <textarea name="description"  class="form-control" id="destination">
            </textarea>
        </div>
        <div class="form-group">
            <label for="destination">Votre prix</label>
            <input name="prix" type="number" class="form-control" id="prix" placeholder="Entrez le prix">
        </div>
        <div class="form-group">
            <label for="destination">Votre image</label>
            <input name="image" type="file" class="form-control" id="image">
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Envoyer</button>
    </form>
    <br>
    <br>
@endsection

