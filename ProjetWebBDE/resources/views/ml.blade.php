
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
        <a class="navbar-brand" href="http://127.0.0.1:8000/accueil">Cesi Exia</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarsExampleDefault">
            <ul class="navbar-nav m-auto">
                <li class="nav-item">
                    <a class="nav-link" href="http://127.0.0.1:8000/accueil">Accueil</a>
                </li>           
                                    <li class="nav-item">
                        <a class="nav-link" href="http://127.0.0.1:8000/login">Connexion</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://127.0.0.1:8000/register">Inscription</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="http://127.0.0.1:8000/file">Evenement</a>
                </li> 
                    <li class="nav-item">
                    <a class="nav-link" href="http://127.0.0.1:8000/shop">Boutique</a>
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
<section class="jumbotron text">
    <div class="container">
        <h1 class="jumbotron-heading">Mentions Legales</h1>
        <p><strong><h3>1. Présentation du site</h3></strong>

Conformément aux dispositions des articles 6-III et 19 de la Loi n° 2004-575 du 21 juin 2004 pour la Confiance dans l’économie numérique, dite L.C.E.N., nous portons à la connaissance des utilisateurs et visiteurs du site : www.exia.fr les informations suivantes :<br />

<p><strong><h3>2. Informations légales</h3></strong>

LA SOCIETE<br />
EXIA PRODUCTION est un groupe immobilier.<br />

Société par actions simplifiées au capital de 2 000 000,00 €UROS (Code NAF : 6630Z), immatriculée au RCS d’Orléans sous le numéro 501 422 893, le EXIA PRODUCTION est domicilié en cette qualité sis 4 place Louis Armand, 75012 PARIS – Tél : 02 38 43 80 80.<br />

LE SITE <br />
Le site « www.exia.fr » est la propriété exclusive de EXIA PRODUCTION qui en assure seul l’exploitation, et se réserve le bénéfice de tous droits liés. 

EDITEUR DU SITE <br />
SARL EKLO Design, capital social 6.000 €UROS, RCS Orléans 538 239 955. <br />
20 place du Martroi 45000 ORLEANS<br />
Tél : 02 38 71 25 01<br />
HEBERGEUR DU SITE <br />
INFORMATIQUE ASSISTANCES.FR , Société à responsabilité limité unipersonnelle au capital social 8000,00 €UROS (Code NAF : 9511Z), immatriculée sous le numéro 513 569 053, est domicilié en cette qualité sis Agence Ile de France – 25, avenue Marcel Dassault 93370 MONTFERMEIL.<br />
Tél : 01 72 08 03 02<br />
DIRECTEUR DE PUBLICATION <br />
Le responsable de la publication est une personne physique.<br />
• Prénom NOM : Marie-Anne LINGARD<br />
• Poste : Présidente d’EXIA PRODUCTION<br />
• Mail : malingard@exia.fr <br />
 
CREDITS PHOTOS ET VISUELS : Fotolia by Adobe (fr.fotolia.com/)<br />
 
<strong><h3>3. Utilisation des données personnelles:</h3></strong>

Nous avons élaboré cette politique pour informer, en toute transparence, les visiteurs de notre site sur notre politique de protection des données personnelles, dans le cadre de la loi n°78-17 du 6 janvier 1978 et au Règlement européen n°2016/679 du Parlement européen et du Conseil du 27 avril 2016, relatif à l’égard du traitement des données à caractère personnel («RGPD»).<br />

EXIA PRODUCTION, en sa qualité de responsable de traitement, réalise des traitements de données à caractère personnel pour la gestion de ses relations avec ses clients. Les données sont recueillies et traitées par EXIA PRODUCTION à des fins de gestion de la clientèle et de prospection commerciale. Ce traitement est fondé sur la base de votre consentement préalable.<br />

Notre formulaire de contact ne collecte que les données personnelles nécessaires au traitement de votre demande.<br />

Vos coordonnées (nom, email, téléphone)<br />
Votre demande<br />
Les données collectées sont destinées aux services EXIA PRODUCTION, et le cas échéant à ses sous-traitants et prestataires. Les sous-traitants et prestataires concernés sont soumis à une obligation de confidentialité et ne peuvent utiliser vos données qu’en conformité avec nos dispositions contractuelles et la législation applicable.<br />

Les données collectées sont conservées pendant une durée ne pouvant excéder 12 mois à compter du dernier contact de votre part.<br />

Vous disposez sur vos données personnelles de droits d’accès, de rectification, d’effacement, de limitation, de portabilité vers un prestataire tiers. Vous pouvez vous opposer à tout moment au traitement de vos données. Vous disposez du droit relatif à la conservation, à l’effacement et à la communication de vos données personnelles après votre décès.<br />

Vous pouvez également vous désabonner à tout moment des messages électroniques et/ou SMS que vous recevrez de notre part, en utilisant le lien de désabonnement et/ou la fonction stop SMS.<br />

Pour exercer vos droits, vous pouvez vous adresser directement à EXIA PRODUCTION en écrivant à l’adresse électronique suivante : tdelanoue@exia.fr ou à l’adresse postale suivante : EXIA PROMOTION, à l’attention du Responsable des Données Personnelles – 8, rue Lavoisier 45140 INGRÉ.<br />

En cas de litige, l’utilisateur peut également introduire une réclamation auprès de la CNIL. Enfin, nous vous informons de l’existence d’une liste d’opposition au démarchage téléphonique prévue par le Code de la Consommation à l’article L.223-1.<br />

<strong><h3>4. Propriété intellectuelle</h3></strong><br />

Tout le contenu du présent site, incluant, de façon non limitative, les graphismes, images, textes, vidéos, animations, sons, logos, gifs et icônes ainsi que leur mise en forme sont la propriété exclusive de la société EXIA PRODUCTION à l’exception des marques, logos ou contenus appartenant à d’autres sociétés partenaires ou auteurs.<br />

Toute reproduction, distribution, modification, adaptation, retransmission ou publication, même partielle, de ces différents éléments est strictement interdite sans l’accord exprès par écrit de la société EXIA PRODUCTION. Cette représentation ou reproduction, par quelque procédé que ce soit, constitue une contrefaçon sanctionnée par les articles L.3335-2 et suivants du Code de la propriété intellectuelle. Le non-respect de cette interdiction constitue une contrefaçon pouvant engager la responsabilité civile et pénale du contrefacteur. En outre, les propriétaires des Contenus copiés pourraient intenter une action en justice à votre encontre.<br />

EXIA PRODUCTION est identiquement propriétaire des « droits des producteurs de bases de données » visés au Livre III, Titre IV, du Code de la Propriété Intellectuelle (loi n° 98-536 du 1er juillet 1998) relative aux droits d’auteur et aux bases de données.<br />

Les utilisateurs et visiteurs du site internet peuvent mettre en place un hyperlien en direction de ce site, mais uniquement en direction de la page d’accueil, accessible à l’URL suivante : www.exia.fr , à condition que ce lien s’ouvre dans une nouvelle fenêtre. En particulier un lien vers une sous page (« lien profond ») est interdit, ainsi que l’ouverture du présent site au sein d’un cadre (« framing »), sauf l’autorisation expresse et préalable de la société EXIA PRODUCTION.<br />

Pour toute demande d’autorisation ou d’information, veuillez nous contacter par email : contact@exia.fr. Des conditions spécifiques sont prévues pour la presse.<br />

<strong><h3>5. Cookies :</h3></strong><br />

Un cookie est un petit fichier, non exécutable, créé par le serveur et résidant sur les propres ordinateurs des internautes, uniquement lisible par le serveur, et sans effet sur les autres données résidant sur leur machine.<br />
Le site « www.exia.fr » en utilise afin de permettre aux utilisateurs de gagner du temps et d’accéder plus facilement aux informations souhaitées. Les données collectées par un cookie ne sont pas conservées au-delà du temps de connexion. <br />
Les cookies sont sous le contrôle des internautes, qui peuvent les supprimer à tout instant, en configurant expressément leur navigateur pour les refuser.<br />

<strong><h3>6. Responsabilité :</h3></strong><br />

Aucune autre garantie n’est accordée au client, auquel incombe l’obligation de formuler clairement ses besoins et le devoir de s’informer. Si des informations fournies par EXIA PRODUCTION apparaissent inexactes, il appartiendra au client de procéder lui-même à toutes vérifications de la cohérence ou de la vraisemblance des résultats obtenus. EXIA PRODUCTION ne sera en aucune façon responsable vis à vis des tiers de l’utilisation par le client des informations ou de leur absence contenues dans ses annonces y compris un de ses sites Internet. <br />

<strong><h3>7. Règlementation applicable et compétence juridictionnelle :</h3></strong><br />

L’internaute reconnaît que l’utilisation du site « www.exia.fr » en tant que tel, ainsi que toutes les activités qui peuvent être développées sur le site, sont régies par le droit français. Dans l’hypothèse où l’une quelconque des dispositions des présentes Mentions Légales serait considérée comme illégale ou inopposable par une décision de justice, les autres dispositions resteront en vigueur.<br />
En cas de non-respect ou de violation manifeste des dispositions susvisées, l’internaute s’expose à des sanctions pénales.<br />
Quelqu’en soit la nature et le degré, les contestations nées de l’application des présentes Mentions Légales, ou de l’utilisation et de la consultation du site «www.exia.fr », seront de la compétence exclusive des tribunaux dont dépend le siège social de la société EXIA PRODUCTION, même en cas d’appel en garantie ou d’action en référé, après échec de toute tentative de résolution amiable.<br />

<strong><h3>8. Contactez–nous :</h3></strong><br />

EXIA PRODUCTION est à votre disposition pour tous vos commentaires ou suggestions. Vous pouvez nous écrire en français par courrier électronique à : contact@exia.fr.</p><br />
    </div>
</section>

        

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
                    <li><a href="http://127.0.0.1:8000/accueil">Page d'accueil</a></li>
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