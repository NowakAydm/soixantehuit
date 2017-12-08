<!DOCTYPE html>

<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>SoixanteHuit</title>

    <script src="jquery.min.js"></script>
    <script src="68.js"></script>
<!--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/68.css">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans" rel="stylesheet">
</head>

<body>

    
    <!--============= EDITO ===============-->

    <div class="container bloc" id="home">        
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
            <span class="glyphicon glyphicon-chevron-down"></span>
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

    <div class="bloc center" id="agenda">
    
        <div id="timeline">
            <?php
                $OA = json_decode(file_get_contents("events.json"));
//        $OA = json_decode(file_get_contents("https://openagenda.com/agendas/31783764/events.json?limit=300"));
                $e = $OA->events;
                for($x=0; $x<$OA->total; $x++) { ?>

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

            <div class="evenement lieu<?php echo $e[$x]->location->uid; ?>" id="<?php echo $e[$x]->uid; ?>">
                <div class="image" style="background-image: url('<?php $e[$x]->thumbnail ?>')"></div>
                <h2> <?php echo $e[$x]->range->fr; ?></h2>
                <h1> <?php echo $e[$x]->title->fr; ?></h1>
                <h2> <?php echo $e[$x]->locationName; ?></h2>
                <h3> <?php echo $e[$x]->category->label; ?></h3>
            </div>

            <?php } ?>
        </div>
    </div>


    
</body>

</html>
