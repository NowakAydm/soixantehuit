<!DOCTYPE html>

<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>SoixanteHuit</title>

    <script src="jquery.min.js"></script>
    <script src="68.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
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
    
    <!--============= AGENDA ===============-->

    <div class="bloc" id="agenda">
    
        <div class="agenda-header">
            <h1>Agenda</h1>
            <div class="agenda-filtres">
                Trier par:                
                <button id="filtre-lieu" class="btn btn-blank">
                    Lieu
                    <i class="glyphicon glyphicon-chevron-right"></i>
                </button>
                <button id="filtre-date" class="btn btn-blank">
                    Date
                    <i class="glyphicon glyphicon-chevron-right"></i>
                </button>
                <button id="filtre-categorie" class="btn btn-blank">
                    Catégorie 
                    <i class="glyphicon glyphicon-chevron-right"></i>
                </button>
            </div>
        </div>
        <div id="timeline">
            <?php
            setlocale(LC_CTYPE, "fr");
                $OA = json_decode(file_get_contents("events.json"));
//        $OA = json_decode(file_get_contents("https://openagenda.com/agendas/31783764/events.json?limit=300"));
                $e = $OA->events;
                for($x=0; $x<$OA->total; $x++) { 
                    $e[$x]->range->fr = str_replace("2018", "", $e[$x]->range->fr);
                    $e[$x]->title->fr = mb_strtoupper($e[$x]->title->fr, "utf-8");
            ?>

            <div class="details lieu<?php echo $e[$x]->location->uid; ?>" id="<?php echo $e[$x]->uid; ?>">
                <h2> <?php echo $e[$x]->range->fr; ?></h2>
                <h1> <?php echo $e[$x]->title->fr; ?></h1>
                <h3> <?php echo $e[$x]->locationName; ?></h3>
                <hr>
                <p> <?php echo $e[$x]->longDescription->fr; ?></p>
            </div>

            <?php } ?>
        </div>
        <div id="recherche">
            <?php for($x=0; $x<$OA->total; $x++){ ?>

            <button class="btn btn-blank evenement" id="<?php echo $e[$x]->uid; ?>">
                <div class="image" style="background-image: url('<?php echo $e[$x]->image ?>')"></div>
                <div class="infos lieu<?php echo $e[$x]->location->uid; ?>">
                    <h3> <?php echo $e[$x]->range->fr; ?></h3>
                    <h1> <?php echo $e[$x]->title->fr; ?></h1>
                    <h3> <?php echo $e[$x]->locationName; ?></h3>
                    <h2> <?php echo $e[$x]->category->label; ?></h2>
                </div>
            </button>

            <?php } ?>
        </div>
    </div>

</body>

</html>
