<!DOCTYPE html>

<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>SoixanteHuit</title>
    <meta name="viewport" content="width=device-width, initial-scale=0.80, , user-scalable=no">
    <meta name="description" content="" />
    
<!--todo    Favicon-->
    
    <script src="js/jquery.min.js"></script>
    <script src="js/68.js"></script>
    <script src="js/search.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!--    <link rel="stylesheet" href="css/bootstrap.min.css">-->
    <link rel="stylesheet" href="css/68.css">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,600,700" rel="stylesheet">
    
</head>

<body>
    <header>
        <button id="header-accueil" class="btn btn-blank" style="border-bottom: none;">
            <div class="header-background"></div>
            ACCUEIL
        </button>
        <button id="header-68" class="btn btn-blank">
            <div class="header-background hidden"></div>
            68
        </button>
        <button id="header-agenda" class="btn btn-blank">
            <div class="header-background hidden"></div>
            AGENDA
        </button>
    </header>
    
    <!--============= EDITO ===============-->

    <div class="modules">
        <div class="vertical">
            <?php echo file_get_contents("assets/modules.svg"); ?>
        </div>
    </div>
    <div class="carte">
        <div class="vertical">
            <?php echo file_get_contents("assets/carte.svg"); ?><br>
        </div>
    </div>
    <div class="carte">
        <div class="vertical">
            <div class="carte-label">
                <div class="carte-lieu carte-nanterre">Université<br>Paris<br>Nanterre</div>
                <div class="carte-lieu carte-amandiers">Nanterre<br>Amandiers</div>
                <div class="carte-lieu carte-archi">Cité<br>de&nbsp;l’architecture<br>et&nbsp;du&nbsp;patrimoine</div>
                <div class="carte-lieu carte-beauxarts">Beaux-Arts<br>de&nbsp;Paris</div>
                <div class="carte-lieu carte-pompidou">Centre<br>Pompidou</div>
                <div class="carte-lieu carte-archives">Archives<br>Nationales</div>
                <div class="carte-lieu carte-bnf">Bibliothèque<br>nationale<br>de&nbsp;France</div>
                <div class="carte-lieu carte-cinematheque">Cinémathèque<br>Francaise</div>
            </div>
        </div>
    </div>
    
    <div class="container bloc" id="home">        
        <div class="edito edito-open center">
            <h1>EDITO</h1>
            <p>
                Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sodales ligula in libero. Sed dignissim lacinia nunc. Curabitur tortor. Pellentesque nibh. Aenean quam. In scelerisque sedsfsdfm at dolor. Maecenas mattis. Sed convallis tristique sem. Proin ut ligula vel nunc egestas porttitor. Morbi lectus risus, iaculis vel, suscipit quis, luctus non, massa. Fusce ac turpis quis ligula lacinia aliquet. Mauris ipsum.
            </p>

            <div class="langues">
                <a>FR</a> <a>EN</a>
            </div>
        </div>
        <button class="btn btn-blank scroll centerblock">
            <span class="glyphicon glyphicon-chevron-down"></span>
        </button>
    </div>

    <!--============= 68 ===============-->

    <div class="bloc" id="68">
        <div class="info-container bloc">
            <button tabIndex="-1" class="btn btn-xl centerblock close-info">Close</button>            
        </div>
        <div class="bloc">
            <button tabIndex="0" class="btn btn-xl centerblock" id="but">Open</button>
        </div>
    </div>
    
    <?php include 'agenda.php'?>
</body>

</html>
