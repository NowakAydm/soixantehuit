<!--
TOUT DOUX

- Responsiveness
    = logo 68 decale
- description metadata

-->


<!DOCTYPE html>

<html lang="fr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>SoixanteHuit</title>
    <meta name="viewport" content="target-densitydpi=device-dpi; width=device-width; initial-scale=0.8; maximum-scale=0.8; user-scalable=no">
    <meta name="description" content="" />

    <link rel="apple-touch-icon" sizes="180x180" href="/assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="/assets/favicon/manifest.json">
    <link rel="mask-icon" href="/assets/favicon/safari-pinned-tab.svg" color="#000000">
    <link rel="shortcut icon" href="/assets/favicon/favicon.ico">
    <meta name="apple-mobile-web-app-title" content="soixantehuit.fr">
    <meta name="application-name" content="soixantehuit.fr">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/assets/favicon/mstile-144x144.png">
    <meta name="msapplication-config" content="/assets/favicon/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type='text/javascript'>
        window.scrollTo(0, 0);
        var events = <?php 
            $OA = json_decode(file_get_contents("https://openagenda.com/agendas/31783764/events.json?limit=300"));
            $e = $OA->events;
            echo json_encode($OA); ?>.events;
    </script>
    <script src="js/68.js"></script>
    <script src="js/search.js"></script>
    <script src="js/moment.js"></script>
    <script src="js/moment.fr.js"></script>
    <link rel="stylesheet" href="css/datepicker.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="js/datepicker.js"></script>
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
        <div class="edito center">
            <h1>soixante-huit</h1>
            <p>Il y a cinquante ans, le mouvement protestataire de Mai 68 retournait les rues de Paris, de Nanterre, et les esprits de la France entière. En lien avec un vaste mouvement de contestation international, il transformait profondément la société française.</p>
            <p>50 ans après, plusieurs institutions culturelles interrogent l’histoire et l’héritage de Mai 68 à travers des rencontres, des expositions, des ouvertures d’archives, des ateliers participatifs, du théâtre, de la musique, des débats, des interventions inédites.</p>
            <p>Fédérant le programme de huit partenaires culturels, à Paris et en Ile-de-France, ce site partage avec le public le plus large toute la richesse et la diversité de ces hommages.</p>
            <div class="langues">
                <a><u>FR</u></a> <a href="index_en.php">EN</a>
            </div>
        </div>
    </div>

    <!--============= 68 ===============-->

    <div class="bloc" id="68">
        <?php include 'infos.php'?>

        <div class="carte">
            <div class="vertical">
                <?php echo file_get_contents("assets/carte.svg"); ?><br>
            </div>
        </div>
        <div class="modules modules-display">
            <div class="vertical">
                <?php echo file_get_contents("assets/modules.svg"); ?>
            </div>
        </div>
        <div class="labels">
            <div class="vertical">
                <div class="carte-label">
                    <div class="carte-lieu carte-nanterre">Université<br>Paris<br>Nanterre</div>
                    <div class="carte-lieu carte-amandiers">Nanterre<br>Amandiers</div>
                    <div class="carte-lieu carte-archi">Cité<br>de&nbsp;l’architecture<br>et&nbsp;du&nbsp;patrimoine</div>
                    <div class="carte-lieu carte-beauxarts">Beaux&#8209;Arts<br>de&nbsp;Paris</div>
                    <div class="carte-lieu carte-pompidou">Centre<br>Pompidou</div>
                    <div class="carte-lieu carte-archives">Archives<br>Nationales</div>
                    <div class="carte-lieu carte-bnf">Bibliothèque<br>nationale<br>de&nbsp;France</div>
                    <div class="carte-lieu carte-cinematheque">Cinémathèque<br>Francaise</div>
                </div>
            </div>
        </div>
        <div class="modules modules-click">
            <div class="vertical">
                <?php echo file_get_contents("assets/modules.svg"); ?>
            </div>
        </div>
    </div>

    <!--============= Agenda ===============-->
    <?php include 'agenda.php'?>

    <!--============= Agenda ===============-->
    <footer class="center">
        <div class='col-xs-4'><a data-toggle='modal' href='#Credits'>Crédits</a></div>
        <div class='col-xs-4'><a data-toggle='modal' href='#Presse'>Presse</a></div>
        <div class='col-xs-4'><a href="mailto:claire.galibert@centrepompidou.fr">Contact</a></div>

        <div id="Credits" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Crédits</h4>
                    </div>
                    <div class="modal-body">
                        <p>Le site soixantehuit.fr est une publication du Centre Pompidou.</p>

                        <p>Directeur de la publication :<br> Serge Lasvignes, Président du Centre national d’art et de culture Georges-Pompidou</p>

                        <p>Adresse et coordonnées :<br> Centre national d’art et de culture Georges-Pompidou<br> 75191 Paris Cedex 04</p>

                        <p>Direction de la communication et des partenariats<br> Benoît Parayre, directeur<br> Chef de projet : Claire Galibert<br> Gestion : Thomas Reby</p>

                        <p>Conception graphique:<br> Sabrine Sidki, Nora Duprat</p>
                        
                        <p>Développement :<br>Adam Nowak</p>

                        <p>Hébergement :<br> OVH, Linkbynet
                        </p>

                        <p>Reproduction du contenu :<br> L&#39;agenda complet du site web soixantehuit.fr est librement téléchargeable sur OpenAgenda selon plusieurs formats (Google Calendar, iCal, RSS, ICS, CSV, xlsx, PDF, JSON).<br>
                        Le code source du site est disponible à l'adresse suivante :<br>
                        <a href="https://github.com/NowakAydm/soixantehuit" target="_blank">https://github.com/NowakAydm/soixantehuit</a>
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                    </div>
                </div>
            </div>
        </div>

        <div id="Presse" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Presse</h4>
                    </div>
                    <div class="modal-body">
                        <p><a>Télécharger le dossier de presse</a></p>
                        <p>
                            Contacts presse :<br>
                            Centre Pompidou<br>
                            Direction de la communication et des partenariats<br>
                            75191 Paris cedex 04
                        </p>
                        <p>
                            Directeur<br>
                            Benoît Parayre<br>
                            Téléphone : 00 33 (0)1 44 78 12 87<br>
                            Courriel : <a href="mailto:benoit.parayre@centrepompidou.fr">benoit.parayre@centrepompidou.fr</a>
                        </p>
                        <p>
                            Attaché de presse<br>
                            Timothée Nicot<br>
                            Téléphone : 00 33 (0)1 44 78 45 79<br>
                            Courriel : <a href="mailto:timothee.nicot@centrepompidou.fr">timothee.nicot@centrepompidou.fr</a>
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                    </div>
                </div>
            </div>
        </div>

        <br> Copyright soixantehuit © 2018
    </footer>
</body>

</html>