
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CESI-EXIA</title>

    <!-- Bootstrap core CSS -->
    <!-- Latest compiled and minified CSS -->

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">


    <style>
        footer {
            background: black;
            padding: 40px;
        }
        footer a {
            color: #f8f9fa!important
        }
    </style>

</head>

<body>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="http://127.0.0.1:8000/acc">Cesi Exia</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarsExampleDefault">
            <ul class="navbar-nav m-auto">
                <li class="nav-item">
                    <a class="nav-link" href="http://127.0.0.1:8000/acc">Accueil</a>
                </li>           
                    <li class="nav-item">
                    <a class="nav-link" href="http://127.0.0.1:8000/shop">Boutique</a>
                </li> 
                <li class="nav-item">
                    <a class="nav-link" href="http://127.0.0.1:8000/file">Evenement</a>
                </li> 

                @guest
                @else
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{\Illuminate\Support\Facades\Auth::user()->name}}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{route("user")}}">Mon compte</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{route("logout")}}">Déconnexion</a>
                        </div>
                    </li>
                @endguest
                 </ul>

            <form class="form-inline my-2 my-lg-0">
                <div class="input-group input-group-sm">
                    <input type="text" class="form-control" placeholder="Rechercher...">
                    <div class="input-group-append">
                        <button type="button" class="btn btn-secondary btn-number">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>

        </div>
    </div>
</nav>

<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading">Bienvenue sur le site de CESI-EXIA ORAN</h1>
        <p class="lead text-muted mb-0">CESI Oran a pour mission de permettre aux étudiants et salariés de devenir acteurs des transformations des entreprises et de la société, grâce à ses écoles et activités.</p>
    </div>
</section>
<div class="container">
    <div class="row">
        <div class="col">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="http://www.formation-informatique.info/wp-content/uploads/2017/04/CESI-formation-professionnelle-en-informatique.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="https://www.springsmontessori.com/wp-content/uploads/2016/11/shutterstock_221827930-880x300.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="http://www.ceservices.fr/wp-content/uploads/2019/06/box-cadeaux-880x300.jpeg" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div></div><br />
<div>
    <div>
        <div>
            <div class="container">
            <div class="row">
             <div class="col">
            <img class="d-block w-100" src="https://i.ibb.co/wR3bxww/rsz-1rsz-21.png">    
        </div>
        </div>
</div>
<!-- /.container -->

<!-- Footer -->
<footer class="text-light">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-lg-4 col-xl-3">
                <h5>A Propos</h5>
                <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
                <p class="mb-0">
                    L’exia.CESI, spécialité informatique de l’école d’ingénieurs du CESI, forme des ingénieurs professionnels de l’informatique ancrés dans le monde de l’entreprise. 
                </p>
            </div>

            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto">
                <h5>Liens utiles</h5>
                <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
                <ul class="list-unstyled">
                    <li><a href="https://www.cesi-algerie.com/">Site mère</a></li>
                    <li><a href="http://127.0.0.1:8000/acc">Page d'accueil</a></li>
                    <li><a href="http://127.0.0.1:8000/user">Votre compte</a></li>
                </ul>
            </div>

           

            <div class="col-md-4 col-lg-3 col-xl-3">
                <h5>Contact</h5>
                <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
                <ul class="list-unstyled">
                    <li><i class="fa fa-home mr-2"></i> EXIA GOODIES</li>
                    <li><i class="fa fa-envelope mr-2"></i> EXIAORAN@VIACESI.FR</li>
                    <li><i class="fa fa-phone mr-2"></i> +213 99 99 99 99</li>
                </ul>
            </div>
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto">
                <h5>Mentions Légales</h5>
                <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
                <ul class="list-unstyled">
                    <li><a href="http://127.0.0.1:8000/ml">Politique de confidentialité
</a></li>
                </ul>
            </div>
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto">
                <h5>Retrouvez-nous sur :</h5>
                <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
                <ul class="list-unstyled">
                <li><a href='https://www.youtube.com/channel/UCvVhT8heRGuSNLxqfBb8FVQ' class='social _youtube' rel='noopener' target='_blank' title='Youtube'><span>Youtube</span></a></li>
                <li><a href='https://www.linkedin.com/company/cesi-alg-rie/' class='social _linkedin' rel='noopener' target='_blank' title='Linkedin'><span>Linkedin</span></a></li>
                <li><a href='https://www.facebook.com/cesi.algerie/' class='social _facebook' rel='noopener' target='_blank' title='Facebook'><span>Facebook</span></a></li>
                </ul>
            </div>
</footer>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
<script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script></html>