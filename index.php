<!DOCTYPE html>
<html lang="en">

<?php
$day   = date('d');
$month = date('m');
$year  = date('Y');

$date = $year.'-'.$month.'-'.$day;
// $date = '2015-10-21';

switch ($date) {
    case '2015-10-18':
        $antagonDay = 1;
        break;
    case '2015-10-19':
        $antagonDay = 2;
        break;
    case '2015-10-20':
        $antagonDay = 3;
        break;
    case '2015-10-21':
        $antagonDay = 4;
        break;
    case '2015-10-22':
        $antagonDay = 5;
        break;
    case '2015-10-23':
        $antagonDay = 6;
        break;
    case '2015-10-24':
        $antagonDay = 7;
        break;
    case '2015-10-25':
        $antagonDay = 8;
        break;
    default:
        $antagonDay = 0;
        break;
}

$url['ambasada'] = 'https://www.google.ro/maps/place/Ambasada/@45.7501748,21.2154378,15z/data=!4m2!3m1!1s0x0:0x281f14b770d4fcdc';
$url['scart']    = 'https://www.google.ro/maps/place/Sc%C3%A2r%C8%9B+Loc+Lejer/@45.7430969,21.2242287,15z/data=!4m2!3m1!1s0x0:0xfd547ee501d53b10';
$url['electric'] = 'https://www.google.ro/maps/place/Electric+Theater/@45.7442509,21.2360416,15z/data=!4m2!3m1!1s0x0:0x891c1e5e6cf1587f';
$url['daos']     = 'https://www.google.ro/maps/place/Daos+club/@45.7504715,21.2165254,15z/data=!4m2!3m1!1s0x0:0x51ce14e9247d8378';
$url['triade']   = 'https://www.google.ro/maps/place/Parcul+Triade,+Strada+Maximilian+Fremont,+Timi%C8%99oara/@45.7284496,21.2376464,17z/data=!3m1!4b1!4m2!3m1!1s0x47455dc0acdb9003:0x958d8892a9bec2dc';
$url['tamtam']   = 'https://www.here.com/directions/drive/mylocation/Tamtam:45.748673,21.251619?map=45.74881,21.25221,17,traffic&fb_locale=en_US';
?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Festival al teatrului liber, independent">
    <meta name="author" content="">

    <title>Antagon Festival 2015</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/grayscale.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

    <link href="js/photoswipe/photoswipe.css" rel="stylesheet">
    <link href="js/photoswipe/default-skin/default-skin.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="apple-touch-icon-152x152.png" />
    <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16" />
    <meta name="application-name" content="&nbsp;"/>
    <meta name="msapplication-TileColor" content="#FFFFFF" />
    <meta name="msapplication-TileImage" content="mstile-144x144.png" />
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    Menu
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">
                    <!-- <i class="fa fa-play-circle"></i> --> Antagon <span class="light hidden-sm">Festival</span>
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <li><a class="page-scroll" href="#program">Program</a></li>
                    <li><a class="page-scroll" href="#bilete">Bilete</a></li>
                    <li><a class="page-scroll" href="#despre">Despre</a></li>
                    <li><a class="page-scroll" href="#galerie">Galerie</a></li>
                    <li><a class="page-scroll" href="#contact">Contact</a></li>
                    <li><a class="page-scroll" href="#sponsori">Sustinatori</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Header -->
    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <img src="img/header-antagon-festival.png" alt="Antagon Festival, Timisoara 18-25 octombrie 2015" id="banner-header">
                    </div>
                </div>
            </div>
            <a href="#program" class="page-scroll arrow">Programul festivalului</a>
        </div>
    </header>

    <!-- Program -->
    <section id="program">
        <div class="content-section text-center">
            <h2>Program</h2>

            <section class="container ziua <?php echo ($antagonDay == 1) ? 'is-active' : '' ?>">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h3>Duminică <span class="data transparent">18 oct</span></h3>
                        <ul>
                            <li class="clearfix piesa">
                                <strong class="nume">Ferma animalelor <span class="trupa transparent">Auăleu Teatru</span></strong>
                                <span class="locatie">TBA <span class="ora transparent">20:00</span></span>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>

            <section class="container ziua <?php echo ($antagonDay == 2) ? 'is-active' : '' ?>">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h3>Luni <span class="data transparent">19 oct</span></h3>
                        <ul>
                            <li class="clearfix piesa">
                                <strong class="nume">Foc de voie <span class="trupa transparent">Ionuț Caraș</span></strong>
                                <span class="locatie"><a href="<?=$url["ambasada"]?>">Ambasada</a> <span class="ora transparent">19:00</span></span>
                            </li>
                            <li class="clearfix piesa">
                                <strong class="nume">Voi n-ați vazut nimic <strong class="trupa">David Schwartz</strong></strong>
                                <span class="locatie"><a href="<?=$url["ambasada"]?>">Ambasada</a> <span class="ora transparent">21:00</span></span>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>

            <section class="container ziua <?php echo ($antagonDay == 3) ? 'is-active' : '' ?>">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h3>Marți <span class="data transparent">20 oct</span></h3>
                        <ul>
                            <li class="clearfix piesa">
                                <strong class="nume">Uord <span class="trupa transparent">ASA triO</span></strong>
                                <span class="locatie"><a href="<?=$url["tamtam"]?>">Tam Tam</a> <span class="ora transparent">19:00</span></span>
                            </li>
                            <li class="clearfix piesa">
                                <strong class="nume">Concert Punk <span class="trupa transparent">Watican Punk Ballet</span></strong>
                                <span class="locatie"><a href="<?=$url["tamtam"]?>">Tam Tam</a> <span class="ora transparent">21:00</span></span>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>

            <section class="container ziua <?php echo ($antagonDay == 4) ? 'is-active' : '' ?>">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h3>Miercuri <span class="data transparent">21 oct</h3>
                        <ul>
                            <li class="clearfix piesa">
                                <strong class="nume">Aleargă <span class="trupa transparent">Nicoleta Lefter</span></strong>
                                <span class="locatie"><a href="<?=$url["ambasada"]?>">Ambasada</a> <span class="ora transparent">19:00</span></span>
                            </li>
                            <li class="clearfix piesa">
                                <strong class="nume">Defilarea costumelor <span class="trupa transparent">Ion Barbu</span></strong>
                                <span class="locatie"><a href="<?=$url["daos"]?>">Club Daos</a> <span class="ora transparent">20:30</span></span>
                            </li>
                            <li class="clearfix piesa">
                                <strong class="nume">Concert Ada Milea</strong>
                                <span class="locatie"><a href="<?=$url["daos"]?>">Club Daos</a> <span class="ora transparent">22:00</span></span>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>

            <section class="container ziua <?php echo ($antagonDay == 5) ? 'is-active' : '' ?>">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h3>Joi <span class="data transparent">22 oct</span></h3>
                        <ul>
                            <li class="clearfix piesa">
                                <strong class="nume">Zero <span class="trupa transparent">Varoterem Projekt</span></strong>
                                <span class="locatie"><a href="<?=$url["triade"]?>">Galeria Triade</a> <span class="ora transparent">19:00</span></span>
                            </li>
                            <li class="clearfix piesa">
                                <strong class="nume">Răzbunare <span class="trupa transparent">Unteatru</span></strong>
                                <span class="locatie"><a href="<?=$url["triade"]?>">Galeria Triade</a> <span class="ora transparent">21:00</span></span>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>

            <section class="container ziua <?php echo ($antagonDay == 6) ? 'is-active' : '' ?>">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h3>Vineri <span class="data transparent">23 oct</span></h3>
                        <ul>
                            <li class="clearfix piesa">
                                <strong class="nume">Născut în 9 <span class="trupa transparent">Bis</span></strong>
                                <span class="locatie">TBA <span class="ora transparent">19:00</span></span>
                            </li>
                            <li class="clearfix piesa">
                                <strong class="nume">Dureri Fantoma <span class="trupa transparent">Teatrul de Artă</span></strong>
                                <span class="locatie">TBA <span class="ora transparent">21:00</span></span>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>

            <section class="container ziua <?php echo ($antagonDay == 7) ? 'is-active' : '' ?>">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h3>Sâmbătă <span class="data transparent">24 oct</span></h3>
                        <ul>
                            <li class="clearfix piesa">
                                <strong class="nume">9 din 10 <span class="trupa transparent">Reactor</span></strong>
                                <span class="locatie"><a href="<?=$url["electric"]?>">Electric Theatre</a> <span class="ora transparent">19:00</span></span>
                            </li>
                            <li class="clearfix piesa">
                                <strong class="nume">Dumnezeul de a doua zi <span class="trupa transparent">Electric Theatre</span></strong>
                                <span class="locatie"><a href="<?=$url["electric"]?>">Electric Theatre</a> <span class="ora transparent">21:00</span></span>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>

            <section class="container ziua <?php echo ($antagonDay == 8) ? 'is-active' : '' ?>">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h3>Duminică <span class="data transparent">25 oct</span></h3>
                        <ul>
                            <li class="clearfix piesa">
                                <strong class="nume">Public Land Hotel <span class="trupa transparent">Katarzyna Raduszynska</span></strong>
                                <span class="locatie"><a href="<?=$url["scart"]?>">Scârț, Loc lejer</a> <span class="ora transparent">18:00</span></span>
                            </li>
                            <li class="clearfix piesa">
                                <strong class="nume">Casa din copac <span class="trupa transparent">Auăleu Teatru</span></strong>
                                <span class="locatie"><a href="<?=$url["scart"]?>">Scârț, Loc lejer</a> <span class="ora transparent">20:00</span></span>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
        </div>
    </section>

    <!-- Bilete -->
    <section id="bilete">
        <div class="container content-section text-center">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <h2>Bilete</h2>
                    <p>Biletele pentru spectacolele din cadrul festivalului se pot cumpara în avans de la:</p>
                    <ul class="list-unstyled">
                        <li><a href="https://www.facebook.com/scartloclejer" class="logo-scart">Scârț, Loc lejer</a></li>
                        <li><a href="https://www.facebook.com/Carturesti.TM" class="logo-carturesti">Librăria Cărturești Mercy</a></li>
                        <li><a href="https://www.facebook.com/ambasadaPLAI" class="logo-ambasada">Ambasada</a></li>
                    </ul>
                    <br>
                    <br>
                    <p>Biletele costă 25 de lei <br>și permit accesul la toate spectacolele programate într-o zi.</p>
                    <p>Abonamentele costă 100 de lei <br>și permit accesul la toate spectacolele din cadrul festivalului.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Despre -->
    <section id="despre">
        <div class="container content-section text-center">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <h2>Despre</h2>
                    <p>Antagon Festival este un eveniment dedicat companiilor și publicului de teatru independent.</p>
                    <p>A avut prima ediție în 2014, când numărul mare de spectatori ne-a convins să organizăm și o a doua ediție. Organizatorul evenimentului este Asociația Culturală Antagon. Încă de la prima ediție ne-am propus să oferim trupelor de teatru ce dezvoltă spectacole în regim independent, o platformă de prezentare a acestora publicului din Timișoara.</p>
                    <p>Selecția spectacolelor este făcută de către organizatori, singurele criterii fiind calitatea spectacolului și apartenența acestuia la scena independentă. </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Galerie -->
    <section id="galerie" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Galerie foto</h2>

                <a href="#galerie2014" class="galerie galerie--2014" data-year="2014">2014</a>
                <a href="#galerie2015" class="galerie galerie--2015" data-year="2015">2015</a>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Contact</h2>
                <p>Ne puteți contacta pe email sau la telefon:</p>
                <p>
                    <a href="mailto:bogdan.cotirta@antagonfestival.ro">bogdan.cotirta@antagonfestival.ro</a><br>
                    0040 749 402521
                </p>
                <div class="social-buttons">
                    <a href="https://www.facebook.com/antagonfestival" class="facebook">Facebook</a>
                    <a href="https://twitter.com/antagonfestival" class="twitter">Twitter</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Sustinatori -->
    <section id="sponsori" class="text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <h2>Sustinatori</h2>
                    <p>Le mulțumim celor fără de care Antagon Festival nu ar fi la fel</p>

                    <h3>Sponsori</h3>
                    Terapia, Zopas, Becherovka, Tatra Tea

                    <h3>Parteneri</h3>
                    Aualeu Teatru, Scârț Loc lejer, Electric Theatre, Ambasada, Daos, Galeria Triade, Tam Tam, TVR Timisoara

                </div>
            </div>
        </div>
        <br>
        <div class="container text-center">
            <small>Copyright &copy; Antagon Festival 2015</small><br>
            <small>Based on the free <a href="http://startbootstrap.com/template-overviews/grayscale/">Grayscale theme</a></small><br>
            <br>
        </div>
    </section>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/photoswipe/photoswipe.min.js"></script>
    <script src="js/photoswipe/photoswipe-ui-default.min.js"></script>
    <script src="js/grayscale.js"></script>

</body>

</html>
