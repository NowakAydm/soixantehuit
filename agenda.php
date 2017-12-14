<div class="bloc" id="agenda">

    <div class="agenda-header">
        <h1>Agenda</h1>
        <div class="agenda-filtres">
            Trier par:                
            <button id="filtre-lieu" class="btn btn-blank" data-toggle="popover" data-placement="bottom" data-trigger="focus" data-html="true" data-content="<ul class='list-group list-lieux'>
                      <li class='list-group-item lieu74030026' onclick='addPlace(74030026)'>Archives Nationales</li>
                      <li class='list-group-item lieu37250659' onclick='addPlace(37250659)'>Beaux-arts de Paris</li>
                      <li class='list-group-item lieu96612516' onclick='addPlace(96612516)'>BnF</li>
                      <li class='list-group-item lieu44057765' onclick='addPlace(44057765)'>Centre Pompidou</li>
                      <li class='list-group-item lieu33873846' onclick='addPlace(33873846)'>Cinémathèque</li>
                      <li class='list-group-item lieu97092341' onclick='addPlace(97092341)'>Cité de l'Architecture</li>
                      <li class='list-group-item lieu47774204' onclick='addPlace(47774204)'>Nanterre Amandiers</li>
                      <li class='list-group-item lieu49592631' onclick='addPlace(49592631)'>Université Paris Nanterre</li>
                    </ul>">
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
            <br>
            <div class="search-lieu"><i class="glyphicon glyphicon-remove clear-lieu"></i></div>
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
            <div class="description">
                <?php 
                if ($e[$x]->longDescription->fr)
                    echo trim($e[$x]->html->fr);
                else
                    echo trim($e[$x]->description->fr);
                ?>
            </div>

            <div class="col-6">
                <?php if ($e[$x]->location->website) {
                    echo '<a href="'.$e[$x]->location->website.'">'.$e[$x]->locationName.'</a><br>';
                    }
                ?>
                <?php echo preg_replace('/\s\d\d\d\d\d\s\w*/', '', $e[$x]->address); ?><br>
                <?php echo $e[$x]->postalCode; ?>
                <?php echo $e[$x]->city; ?><br>
            </div>
            <div class="col-6">
                <?php if ($e[$x]->conditions->fr) {
                    echo '<b>TARIFS</b><br>';
                    echo $e[$x]->conditions->fr.'<br>';               
                    }
                ?>
            </div>
            <?php if ($e[$x]->registrationUrl) {?>
                <div class="right">
                    <a href="<?php echo $e[$x]->registrationUrl; ?>" id="site-officiel">
                    Site officiel 
                    <i class="glyphicon glyphicon-chevron-right"></i>
                    </a><br>
                </div>
            <?php } ?>
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
