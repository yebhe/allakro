<header class="header_section">
    {{-- <div class="header_top">
        <div class="container-fluid header_top_container">
            <div class="contact_nav">
                <a href="tel:002250705805424">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                    <span>
                Call : +225 0705805424
              </span>
                </a>
                <a href="mailto:lamarana.mamadou@uvci.edu.ci">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                    <span>
                Email : lamarana.mamadou@uvci.edu.ci
              </span>
                </a>
                <a href="#localisation-map">
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                    <span>
                Location : allakro 2plateaux
              </span>
                </a>
            </div>
            <div class="social_box">
                <a href="https://www.facebook.com/">
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
                <a href="https://twitter.com/">
                    <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
                <a href="https://www.linkedin.com/">
                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                </a>
                <a href="https://www.instagram.com/">
                    <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>
            </div>
        </div>
    </div> --}}
    <div class="header_bottom">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg custom_nav-container ">
                <a class="navbar-brand" href="index.html">
                    <img src="images/logo.png" alt="logo.png" style="margin-left: 20px; width: 70px; height: 70px; border-radius: 100%;">
                </a>
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class=""> </span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav  ">
                        <li class="nav-item ">
                            <a class="nav-link" href="{{'/'}}">Accueil <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('sante')}}">Santé</a>
                        </li>
                        <!-- Menu déroulant Enregistrement -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Enregistrement
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{route('amenagement')}}">Amenagement</a>
                                <a class="dropdown-item" href="{{route('demenagement')}}">Demenagement</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{route('naissance')}}">Naissance</a>
                                <a class="dropdown-item" href="{{route('deces')}}">Décès</a>
                                <a class="dropdown-item" href="{{route('inscription')}}">Inscription</a>

                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('communaute')}}">Communauté</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('actualites')}}">Actualité</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('projet')}}">Projet</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn btn-warning" href="{{route('filament.pages.dashboard')}}">Admin</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>
