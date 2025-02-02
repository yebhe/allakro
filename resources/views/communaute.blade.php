@extends('layouts.app')

@section('content')
    <br>
    <br>
<br>

    <h1 class="-backdrop-hue-rotate-60" align="center">Services allakro</h1>
    <a class="btn btn-danger" href={{route('competence')}} >Ajouter un Service</a>
    <br>
    <br>
    <div class="row">
        @foreach($competence as $competences)
            <div class="col-md-4">
                <div class="card card-custom">
                    <img class="card-img-top" src="{{asset('images/femme1.jpg')}}" alt="Image de compétence">
                    <div class="card-body">
                        <h5 class="card-title">Nom : {{$competences->nom}}</h5>
                        <p>Service Proposé : {{$competences->service}}</p>
                        <p class="card-text">Explication : {{$competences->description}}</p>
                        <p>Prix : {{$competences->prix}} FR</p>
                        <p>Lieu : {{$competences->lieu}}</p>
                        <p>Contact : {{$competences->contact}}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <br>
    <h1 align="center">Vente article</h1>
    <br>

    <!-- Ligne de cartes de compétence -->
    <div class="row">
        <!-- Carte de compétence 1 -->
        <div class="col-md-4">
            <div class="card card-custom">
                <img class="card-img-top" src="{{asset('images/chaussure1.jpg')}}" alt="Image de compétence 1">
                <div class="card-body">
                    <h5 class="card-title">Chaussure 43 </h5>
                    <p class="card-text">Chaussure tres neuf nous avions tous les tailles</p>
                    <p>Prix : 30000</p>
                    <a href="#" class="btn btn-primary">Voir plus</a>
                </div>
            </div>
        </div>
        <!-- Carte de compétence 2 -->
        <div class="col-md-4">
            <div class="card card-custom">
                <img class="card-img-top" src="{{asset('images/table1.jpg')}}" alt="Image de compétence 2">
                <div class="card-body">
                    <h5 class="card-title">Table Artisanal</h5>
                    <p class="card-text">Table a mange artisanal fait sur messure par un habitant d'allakro</p>
                    <p>Prix : 10000</p>
                    <a href="#" class="btn btn-primary">Voir plus</a>
                </div>
            </div>
        </div>
        <!-- Carte de compétence 3 -->
        <div class="col-md-4">
            <div class="card card-custom">
                <img class="card-img-top" src="{{asset('images/maison1.jpg')}}" alt="Image de compétence 3">
                <div class="card-body">
                    <h5 class="card-title">Chambre a louée</h5>
                    <p class="card-text">Maison a loue allakro 3pcs douche wc cuisine visite 2000f.</p>
                    <p>Prix : 40000X3</p>
                    <a href="#" class="btn btn-primary">Voir plus</a>
                </div>
            </div>
        </div>
    </div>


    <br>
    <br>


@endsection
