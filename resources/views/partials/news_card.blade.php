<div class="row">
    @foreach($items as $item)
        <div class="col-md-4 mb-4">
            <div class="card news-card">

                <!--   <img src="" class="card-img-top" alt="..."> -->
                <div class="card-body news-card-body">
                    <h5 class="card-title news-card-title">Nom tutrice : {{ $item->nom }}</h5>
                    <p class="card-text news-card-text">Provenance : {{ $item->provenance }}</p>
                    <p class="card-text news-card-text">Profession : {{ $item->profession }}</p>
                    <p class="card-text news-card-text">Destination : {{ $item->destination }}</p>
                    <p class="card-text news-card-text">Sexe : {{ $item->sexe }}</p>
                    <a href="{{ route('actualites', $item->id) }}" class="btn btn-primary">Lire plus</a>
                </div>
            </div>
        </div>
    @endforeach
</div>
