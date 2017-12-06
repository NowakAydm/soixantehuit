<!DOCTYPE html>

<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>SoixanteHuit</title>

    <script src="jquery.min.js"></script>
    <script src="68.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/68.css">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans" rel="stylesheet">
</head>

<body>

    <!--============= EDITO ===============-->

    <div class="container bloc" id="home">
        <?php
        $OA = json_decode(file_get_contents("https://openagenda.com/agendas/31783764/events.json?limit=300"));
        $e = $OA->events;
        
        for($x=0; $x<$OA->total; $x++)
        {
            var_dump($e[$x]->title->fr);
            echo '<br>';
        }
        
?>
        
        <div class="edito center" style="background: grey" start=123>
            <h1>Edito</h1>
            <p>
                Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sodales ligula in libero. Sed dignissim lacinia nunc. Curabitur tortor. Pellentesque nibh. Aenean quam. In scelerisque sedsfsdfm at dolor. Maecenas mattis. Sed convallis tristique sem. Proin ut ligula vel nunc egestas porttitor. Morbi lectus risus, iaculis vel, suscipit quis, luctus non, massa. Fusce ac turpis quis ligula lacinia aliquet. Mauris ipsum.
            </p>

            <div class="langues">
                <a>FR</a> <a>EN</a>
            </div>

        </div>
        <div class="scroll center">
            <i class="glyphicon glyphicon-chevron-down"></i>
        </div>
    </div>

    <!--============= 68 ===============-->

    <div class="info-container bloc">
        <button class="btn btn-xl centerblock close-info">Close</button>            
    </div>
    <div class="bloc" id="carte">
        <button class="btn btn-xl centerblock" id="but">Open</button>
    </div>

    
    <!--============= AGENDA ===============-->

    <div class="jumbotron bloc center" id="agenda">
    
<!--
        <div class="col-xs-6" >
            <h2>Details</h2>
            <br>
            <br>
            <div id="timeline">
                <iframe style="width:100%;" frameborder="0" scrolling="no" allowtransparency="allowtransparency" class="cibulFrame cbpgbdy" data-oabdy src="//openagenda.com/agendas/31783764/embeds/26127735/events?lang=fr"></iframe>
                <script type="text/javascript" src="//openagenda.com/js/embed/cibulBodyWidget.js"></script>
            </div>
            
        </div>
        <div class="col-xs-6">
            <h2>Recherche</h2>
            <br>
            <br>
            <div class="col-xs-6">
                <div class="cbpgct cibulCategories" data-oact data-cbctl="31783764/26127735" data-lang="fr"></div>
                <script type="text/javascript" src="//openagenda.com/js/embed/cibulCategoriesWidget.js"></script>
            </div>
            <div class="col-xs-6">
                <div class="cbpgcl cibulCalendar" data-oacl data-cbctl="31783764/26127735|fr" data-lang="fr"></div>
                <script type="text/javascript" src="//openagenda.com/js/embed/cibulCalendarWidget.js"></script>
            </div>
        </div>
-->
    </div>

</body>

</html>
