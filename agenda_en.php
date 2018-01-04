<div class="bloc" id="agenda">
    <div class="agenda-header">
        <h1>Events</h1>
        <div class="agenda-filtres">
            Sort by :
            <button id="filtre-categorie" class="btn btn-blank" data-toggle="popover">
                Category 
                <i class="glyphicon glyphicon-chevron-right"></i>
            </button>
            <button id="filtre-lieu" class="btn btn-blank" data-toggle="popover">
                Place
                <i class="glyphicon glyphicon-chevron-right"></i>
            </button>
            <div class="col-sm-6">
                <input type='text' class="btn btn-blank" id='datetimepicker' placeholder="Date" readonly="readonly" />
                <i class="glyphicon glyphicon-chevron-right" id='glyphicon'></i>
            </div>

            <br>
            <div class="search search-date clear-date"><i class="glyphicon glyphicon-remove"></i></div>
            <div class="search search-lieu clear-lieu"><i class="glyphicon glyphicon-remove"></i></div>
            <div class="search search-categorie clear-categorie"></div>
        </div>
    </div>
    <div id="timeline" onClick="showTimeline()">
        <div id="show-timeline"><i class="glyphicon glyphicon-chevron-left"></i></div>
        <?php
            setlocale(LC_CTYPE, "fr");
        
            for($x=0; $x<$OA->total; $x++) { 
                $e[$x]->range->en = str_replace("2018", "", $e[$x]->range->en);
                $e[$x]->title->en = mb_strtoupper($e[$x]->title->en, "utf-8");
                $e[$x]->title->fr = mb_strtoupper($e[$x]->title->fr, "utf-8");
        ?>

            <div class="details lieu<?php echo $e[$x]->location->uid." ".$e[$x]->uid; ?>">

                <h2>
                    <?php echo $e[$x]->range->en; ?>
                </h2>
                <h1>
                    <?php 
                        if ($e[$x]->title->en)
                            echo $e[$x]->title->en; 
                        else
                            echo $e[$x]->title->fr; 
                    ?>
                </h1>
                <h3>
                    <?php echo $e[$x]->locationName; ?>
                </h3>
                <hr>
                <div class="description">
                    <?php 
                        if ($e[$x]->longDescription->en)
                            echo trim($e[$x]->html->en);
                        else if ($e[$x]->description->en)
                            echo trim($e[$x]->description->en);
                        else if ($e[$x]->longDescription->fr)
                            echo trim($e[$x]->html->fr);
                        else
                            echo trim($e[$x]->description->fr);
                    ?>
                </div>

                <div class="col-6">
                    <?php if ($e[$x]->location->website) {
                    echo '<a  target="_blank" href="'.$e[$x]->location->website.'">'.$e[$x]->locationName.'</a><br>';
                    }
                ?>
                    <?php echo preg_replace('/\s\d\d\d\d\d\s\w*/', '', $e[$x]->address); ?><br>
                    <?php echo $e[$x]->postalCode; ?>
                    <?php echo $e[$x]->city; ?><br>
                </div>
                <div class="col-6">
                    <?php 
                        if ($e[$x]->conditions->en) {
                            echo '<b>PRICES</b><br>';
                            echo $e[$x]->conditions->en.'<br>';               
                        }
                        else if ($e[$x]->conditions->fr) {
                            echo '<b>TARIFS</b><br>';
                            echo $e[$x]->conditions->fr.'<br>';               
                        }
                        
                    ?>
                </div>
                <?php if ($e[$x]->registrationUrl) {?>
                <div class="right">
                    <a href="<?php echo $e[$x]->registrationUrl; ?>" id="site-officiel" target="_blank">
                    Official website
                    <i class="glyphicon glyphicon-chevron-right"></i>
                    </a><br>
                </div>
                <?php } ?>
            </div>

            <?php } ?>
    </div>

    <div id="recherche" onClick="showRecherche()">
        <div id="show-recherche"><i class="glyphicon glyphicon-chevron-right"></i></div>
        
        <?php for($x=0; $x<$OA->total; $x++){ ?>

        <button class="btn btn-blank evenement cat<?php 
                        if ($e[$x]->category->id == 5050)
                            echo "1 ";
                        else if ($e[$x]->category->id == 5149)
                            echo "2 ";
                        else if ($e[$x]->category->id == 5051)
                            echo "3 ";
                        else if ($e[$x]->category->id == 5052)
                            echo "4 ";
                       ?>" id="<?php echo $e[$x]->uid; ?>">
            <div class="image" style="background-image: url('<?php echo $e[$x]->thumbnail ?>')"></div>
            <div class="infos lieu<?php echo $e[$x]->location->uid; ?>">
                <h3> <?php echo preg_replace('/\, \d\d\w\d\d/', '', $e[$x]->range->en); ?></h3>
                <h1> <?php 
                        if ($e[$x]->title->en)
                            echo $e[$x]->title->en;
                        else
                            echo $e[$x]->title->fr;
                    ?></h1>
                <h3> <?php 
                    if ($e[$x]->location->uid == 74030026)
                        echo "Archives nationales";
                    else if ($e[$x]->location->uid == 47774204)
                        echo "Nanterre Amandiers";
                    else if ($e[$x]->location->uid == 97092341)
                        echo "Cité de l'architecture";
                    else if ($e[$x]->location->uid == 37250659)
                        echo "Beaux-arts de Paris";
                    else if ($e[$x]->location->uid == 96612516)
                        echo "BnF";
                    else if ($e[$x]->location->uid == 33873846)
                        echo "Cinémathèque française";
                    else
                        echo $e[$x]->locationName; 
                    ?></h3>
                <h2> <?php
                        if ($e[$x]->category->label == 'Performance/Spectacle')
                            echo 'Performance/Show';
                        else if ($e[$x]->category->label == 'Colloque/Conférence/Débat')
                            echo 'Seminar/Conference/Debate';
                        else if ($e[$x]->category->label == 'Exposition')
                            echo 'Exhibition';
                        else
                            echo $e[$x]->category->label; 
                    ?></h2>
            </div>
        </button>

        <?php } ?>
    </div>
    <div class='scroll-footer'><span class="glyphicon glyphicon-chevron-up"></span></div>
</div>
