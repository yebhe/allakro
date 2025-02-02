@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center">Nos Projets</h1>
        <div class="row">
            <!-- Projet 1 -->
            <div class="col-md-4 mb-4">
                <div class="project-card">
                    <img src="images/project5.jpeg" class="card-img-top" alt="Projet 1">
                    <div class="card-body">
                        <h5 class="card-title">Projet : Stade Allakro</h5>
                        <div class="progress">
                            <div class="progress-bar" style="width:70%">70%</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Projet 2 -->
            <div class="col-md-4 mb-4">
                <div class="project-card">
                    <img src="images/project3.jpg" class="card-img-top" alt="Projet 2">
                    <div class="card-body">
                        <h5 class="card-title">Projet : Amenagement</h5>
                        <div class="progress">
                            <div class="progress-bar" style="width:50%">50%</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Projet 3 -->
            <div class="col-md-4 mb-4">
                <div class="project-card">
                    <img src="images/project4.jpg" class="card-img-top" alt="Projet 3">
                    <div class="card-body">
                        <h5 class="card-title">Construction Hopital</h5>
                        <div class="progress">
                            <div class="progress-bar" style="width:90%">90%</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
