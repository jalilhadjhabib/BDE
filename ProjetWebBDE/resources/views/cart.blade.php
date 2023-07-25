<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Panier</title>

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
        <a class="navbar-brand" href="{{route("shop")}}">Exia Boutique</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarsExampleDefault">
            <ul class="navbar-nav m-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{route("shop")}}">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route("product")}}">Produits</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route("category")}}">Catégories</a>
                </li>             
                <li class="nav-item">
                    <a class="nav-link" href="http://127.0.0.1:8000/even">Evenement</a>
                </li> 
                @guest
                @else
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{\Illuminate\Support\Facades\Auth::user()->name}}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{route("cart")}}">Mes commandes</a>
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
                <a class="btn btn-success btn-sm ml-3" href="{{route("cart")}}">
                    <i class="fa fa-shopping-cart"></i> Panier
                    <span class="badge badge-dark"></span>
                </a>
            </form>

        </div>
    </div>
</nav>
<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading">Votre panier</h1>
    </div>
</section>

<div class="container mb-4">
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col"> </th>
                        <th scope="col">Produit</th>
                        <th scope="col">Disponnibilité</th>
                        <th scope="col" class="text-center">Quantité</th>
                        <th scope="col" class="text-right">Prix</th>
                        <th> </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><img src="https://dummyimage.com/50x50/55595c/fff" /> </td>
                        <td>TITRE PRODUIT</td>
                        <td>In stock</td>
                        <td><input class="form-control" type="text" value="1" /></td>
                        <td class="text-right">6000DA</td>
                        <td class="text-right"><button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </button> </td>
                    </tr>
                    <tr>
                        <td><img src="https://dummyimage.com/50x50/55595c/fff" /> </td>
                        <td>TITRE PRODUIT</td>
                        <td>In stock</td>
                        <td><input class="form-control" type="text" value="1" /></td>
                        <td class="text-right">6000DA</td>
                        <td class="text-right"><button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </button> </td>
                    </tr>
                    <tr>
                        <td><img src="https://dummyimage.com/50x50/55595c/fff" /> </td>
                        <td>TITRE PRODUIT</td>
                        <td>En stock</td>
                        <td><input class="form-control" type="text" value="1" /></td>
                        <td class="text-right">6000DA</td>
                        <td class="text-right"><button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </button> </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>Livraison</td>
                        <td class="text-right">Gratuite</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><strong>Total</strong></td>
                        <td class="text-right"><strong>18000DA</strong></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col mb-2">
            <div class="row">
                <div class="col-sm-12  col-md-6">
                    <button class="btn btn-block">Continuer vos achats</button>
                </div>
                <div class="col-sm-12 col-md-6 text-right">
                    <button class="btn btn-lg btn-block btn-success text-uppercase">Confirmer la commande</button>
                </div>
            </div>
        </div>
    </div>
</div>

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
                    <li><a href="{{route("acc")}}">Page d'accueil</a></li>
                    <li><a href="{{route("user")}}">Votre compte</a></li>
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