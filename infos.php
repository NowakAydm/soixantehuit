<!--Paris Nanterre-->
<div id="info-nanterre" class="info-container bloc">
    <div class="info-sidebar col-sm-3 lieu49592631">
        <span tabIndex="-1" class="close-info glyphicon glyphicon-remove"></span>
        <span class="info-lieu">Université<br>Paris Nanterre</span>
        <div class="info-bordureleft"></div>
    </div>
    <div class="info-midbar col-sm-5">
        <div class="info-presentation">
            L’UNIVERSITÉ PARIS NANTERRE MARQUERA CETTE ANNÉE LES 50 ANS DES « ÉVÉNEMENTS » EN CÉLÉBRANT, DÉCLINANT, RÉINVENTANT L’ESPRIT DE 68, TOUT AU LONG DE SON ANNÉE THÉMATIQUE 1968-2018 : PROP’OSONS !
        </div>
        <div class="info-description">
            Riche de ses 34 000 étudiants et forte de son identité en sciences humaines et sociales, l’Université Paris Nanterre choisit de reposer in situ les questions de l’imagination au pouvoir et des articulations entre art et politique, en impliquant toute sa communauté dans plusieurs moments forts de créations et de rencontres. Entre janvier et octobre 2018, le campus s’ouvrira au plus large public et accueillera de nombreux invités pour différentes journées où se croiseront débats et manifestations artistiques. Echanges, performances et projections seront l’occasion d’élargir 68 dans le temps et l’espace, et réinterrogeront notre rapport à la cité, au travail, à la politique, à l’art, au collectif, sous l’angle de la jeunesse et des croisements générationnels.
            <br><br>
            <b>Adresse</b><br> 200 avenue de la République<br> 92001 Nanterre Cedex<br>
            <br>
            <a class="info-logo" target="_blank" href="http://prop-osons.parisnanterre.fr/">
                <img src='assets/logo/logo-nanterre.png'>
            </a>
            <br>
            <a class="info-rs" target="_blank" href="https://www.facebook.com/universite.paris.nanterre">
                <img src='assets/icon-fb.png'>
            </a>
            <a class="info-rs" target="_blank" href="https://twitter.com/uparisnanterre">
                <img src='assets/icon-twitter.png'>
            </a>
            <a class="info-rs" target="_blank" href="https://www.instagram.com/uparisnanterre/">
                <img src='assets/icon-insta.png'>
            </a>
        </div>
    </div>
    <div class="info-midbar col-sm-4">
        <div class="info-bordureright"></div>
        <div class="info-programme">PROGRAMME
            <div class="info-programmefond lieu49592631"></div>
        </div>
        <div class="info-agenda">
        <?php
            for($x=0; $x<$OA->total; $x++) { 
                if ($e[$x]->location->uid == 49592631) {
                    echo '<div class="info-event"><b>'.str_replace("2018", "", $e[$x]->range->fr).'</b><br>';
                    echo '<span>'.$e[$x]->title->fr.'</span><br>';
                    echo '<div class="info-eventdesc">'.$e[$x]->description->fr.'</div><br>';
                    echo '</div>';
                }
            }
        ?>
        </div>
        <div class="info-goagenda" onclick="addPlace(49592631)">ALLER VERS L'AGENDA<i class="glyphicon glyphicon-chevron-right"></i></div>
    </div>
</div>

<!--Amandiers-->
<div id="info-amandiers" class="info-container bloc">
    <div class="info-sidebar col-sm-3 lieu47774204">
        <span tabIndex="-1" class="close-info glyphicon glyphicon-remove"></span>
        <span class="info-lieu">Nanterre-Amandiers</span>
        <div class="info-bordureleft"></div>
    </div>
    <div class="info-midbar col-sm-5">
        <div class="info-presentation">
            D’AVRIL À MAI 2018, LE CENTRE DRAMATIQUE NATIONAL NANTERRE-AMANDIERS CÉLÈBRE À SA MANIÈRE LE 50e ANNIVERSAIRE DE MAI 68, INVITANT DES CRÉATIONS ARTISTIQUES DONT LE POINT COMMUN EST DE DÉFRICHER DES TERRITOIRES UTOPIQUES.
        </div>
        <div class="info-description">
            À rebours de toute commémoration nostalgique, « Mondes possibles » interroge les utopies de mai 68 et rassemble des créations d’artistes et penseurs européens. Tandis que certains projets revisitent l’héritage contestataire et libertaire des événements, d’autres échafaudent, de manière plus prospective, des mondes possibles pour les temps à venir.<br> Installations, spectacles en plein air, portrait de la ville de Nanterre, abécédaire philosophique, conférence théâtrale, concert, films, ou pièce chorégraphique, tous viennent poser la question de l’être ensemble.<br> En partenariat avec le Centre Culturel Suisse de Paris (<i>Festival Extra Ball</i>), l’Université Paris-Nanterre (<i>Global 68</i>), et le CNAP.<br>
            <br><br>
            <b>Adresse</b><br> Centre dramatique national<br> 7, avenue Pablo-Picasso<br> 92022 Nanterre Cedex<br>
            <br><a class="info-logo" target="_blank" target="_blank" href="http://www.nanterre-amandiers.com/">
                <img src='assets/logo/logo-amandiers.png'>
            </a>
            <br>
            <a class="info-rs" target="_blank" target="_blank" href="http://facebook.com/theatreamandiers">
                <img src='assets/icon-fb.png'>
            </a>
            <a class="info-rs" target="_blank" target="_blank" href="https://twitter.com/lesamandiers">
                <img src='assets/icon-twitter.png'>
            </a>
            <a class="info-rs" target="_blank" target="_blank" href="https://www.instagram.com/nanterreamandiers/">
                <img src='assets/icon-insta.png'>
            </a>
        </div>
    </div>
    <div class="info-midbar col-sm-4">
        <div class="info-bordureright"></div>
        <div class="info-programme">PROGRAMME
            <div class="info-programmefond lieu47774204"></div>
        </div>
        <div class="info-agenda">
        <?php
            for($x=0; $x<$OA->total; $x++) { 
                if ($e[$x]->location->uid == 47774204) {
                    echo '<div class="info-event"><b>'.str_replace("2018", "", $e[$x]->range->fr).'</b><br>';
                    echo '<span>'.$e[$x]->title->fr.'</span><br>';
                    echo '<div class="info-eventdesc">'.$e[$x]->description->fr.'</div><br>';
                    echo '</div>';
                }
            }
        ?>
        </div>
        <div class="info-goagenda" onclick="addPlace(47774204)">ALLER VERS L'AGENDA<i class="glyphicon glyphicon-chevron-right"></i></div>
    </div>
</div>

<!--Cite de l'archi-->
<div id="info-archi" class="info-container bloc">
    <div class="info-sidebar col-sm-3 lieu97092341">
        <span tabIndex="-1" class="close-info glyphicon glyphicon-remove"></span>
        <span id='info-lieu-archi' class="info-lieu" style="font-size: 7vh;">Cité de&nbsp;l’architecture &&nbsp;du&nbsp;patrimoine</span>
        <div class="info-bordureleft"></div>
    </div>
    <div class="info-midbar col-sm-5">
        <div class="info-presentation">
            « MAI 68. L’ARCHITECTURE AUSSI ! »<br>
            1968, RÉVOLTE ÉTUDIANTE, SYNDICALE, SOCIALE ET ARTISTIQUE, DE LA MANIÈRE DE PENSER OU DE FAIRE DES VILLES, DE VIVRE TOUT SIMPLEMENT.<br>
            ENSEIGNER ET FAIRE DE L’ARCHITECTURE AUTREMENT.
        </div>
        <div class="info-description">
            La Cité de l’architecture & du patrimoine, propose à ses visiteurs une diversité culturelle exceptionnelle, en un lieu unique, sur 22 000 m2 au cœur de Paris.<br> Du renouvellement urbain à la revitalisation du patrimoine, la question de la ville préoccupe chaque jour davantage nos contemporains. Établissement public sous tutelle du ministère de la Culture et de la Communication, la Cité se propose d’être un grand centre de diffusion de la connaissance pour tout ce qui touche à la qualité de l’architecture, à la valorisation du patrimoine et à la préservation de l’environnement urbain. S’adressant aussi bien au grand public qu’à des acteurs plus spécialisés, la programmation est diversifiée : expositions permanentes et temporaires, enseignements et ateliers, colloques, débats, projections...<br> Aux spécialistes des domaines de l’architecture et de la ville, la Cité offre les enseignements dispensés par l’École de Chaillot, une bibliothèque et un centre d’archives.
            <br><br>
            <b>Adresse</b><br> Palais de Chaillot<br> 1 place du Trocadéro<br> 75016 Paris 16<br>
            <br><a class="info-logo" target="_blank" target="_blank" href="https://www.citedelarchitecture.fr/">
                <img src='assets/logo/logo-archi.png'>
            </a>
            <br>
            <a class="info-rs" target="_blank" target="_blank" href="http://facebook.com/Citedelarchitecture">
                <img src='assets/icon-fb.png'>
            </a>
            <a class="info-rs" target="_blank" target="_blank" href="https://twitter.com/citedelarchi">
                <img src='assets/icon-twitter.png'>
            </a>
            <a class="info-rs" target="_blank" target="_blank" href="https://www.instagram.com/citedelarchi/">
                <img src='assets/icon-insta.png'>
            </a>
        </div>
    </div>
    <div class="info-midbar col-sm-4">
        <div class="info-bordureright"></div>
        <div class="info-programme">PROGRAMME
            <div class="info-programmefond lieu97092341"></div>
        </div>
        <div class="info-agenda">
        <?php
            for($x=0; $x<$OA->total; $x++) { 
                if ($e[$x]->location->uid == 97092341) {
                    echo '<div class="info-event"><b>'.str_replace("2018", "", $e[$x]->range->fr).'</b><br>';
                    echo '<span>'.$e[$x]->title->fr.'</span><br>';
                    echo '<div class="info-eventdesc">'.$e[$x]->description->fr.'</div><br>';
                    echo '</div>';
                }
            }
        ?>
        </div>
        <div class="info-goagenda" onclick="addPlace(97092341)">ALLER VERS L'AGENDA<i class="glyphicon glyphicon-chevron-right"></i></div>
    </div>
</div>

<!--Beaux Arts-->
<div id="info-beauxarts" class="info-container bloc">
    <div class="info-sidebar col-sm-3 lieu37250659">
        <span tabIndex="-1" class="close-info glyphicon glyphicon-remove"></span>
        <span class="info-lieu">Beaux-Arts de&nbsp;Paris</span>
        <div class="info-bordureleft"></div>
    </div>
    <div class="info-midbar col-sm-5">
        <div class="info-presentation">
            FRUIT DES REGARDS CROISÉS DE DEUX DISCIPLINES SOUVENT OPPOSÉES, L’HISTOIRE DE L’ART ET L’HISTOIRE, L’EXPOSITION « IMAGES EN LUTTE » PROPOSE UNE LECTURE DOCUMENTÉE DE CE MOMENT PARTICULIER DE L’HISTOIRE CONTEMPORAINE, LES ANNÉES 1968-1974, OÙ L’ART ET LE POLITIQUE, LA CRÉATION ET LES LUTTES SOCIALES ET POLITIQUES FURENT INTIMEMENT MÊLÉS. 
        </div>
        <div class="info-description">
            L’exposition n’est pas une histoire visuelle du politique mais une histoire politique du visuel.<br>
            Elle dévoile un long cortège, qui commence dans les grandes manifestations contre la guerre du Vietnam, s’attarde dans l’Atelier populaire des Beaux-Arts en mai et juin 1968 pour, dans les années suivantes, parcourir les boulevards parisiens, occuper les usines, les mines, les universités, les prisons et tant d’autres lieux dans toute la France. La mémoire collective des événements de mai 68 est largement liée aux affiches produites par l’Atelier Populaire, émanation de l’occupation de l’École des Beaux-arts de Paris à partir du 14 mai par ses étudiants et ses enseignants, bientôt rejoints par de nombreux artistes. 
            <br><br>
            <b>Adresse</b><br>
            Palais des Beaux-Arts<br>
            13 quai Malaquais<br>
            75006 Paris<br>
            <br><a class="info-logo" target="_blank" href="https://www.beauxartsparis.fr/">
                <img src='assets/logo/logo-beauxarts.png'>
            </a>
            <br>
            <a class="info-rs" target="_blank" href="http://facebook.com/beauxartsparis">
                <img src='assets/icon-fb.png'>
            </a>
            <a class="info-rs" target="_blank" href="https://twitter.com/beauxartsparis">
                <img src='assets/icon-twitter.png'>
            </a>
            <a class="info-rs" target="_blank" href="https://www.instagram.com/beauxartsparis/">
                <img src='assets/icon-insta.png'>
            </a>
        </div>
    </div>
    <div class="info-midbar col-sm-4">
        <div class="info-bordureright"></div>
        <div class="info-programme">PROGRAMME
            <div class="info-programmefond lieu37250659"></div>
        </div>
        <div class="info-agenda">
        <?php
            for($x=0; $x<$OA->total; $x++) { 
                if ($e[$x]->location->uid == 37250659) {
                    echo '<div class="info-event"><b>'.str_replace("2018", "", $e[$x]->range->fr).'</b><br>';
                    echo '<span>'.$e[$x]->title->fr.'</span><br>';
                    echo '<div class="info-eventdesc">'.$e[$x]->description->fr.'</div><br>';
                    echo '</div>';
                }
            }
        ?>
        </div>
        <div class="info-goagenda" onclick="addPlace(37250659)">ALLER VERS L'AGENDA<i class="glyphicon glyphicon-chevron-right"></i></div>
    </div>
</div>

<!--Pompidou-->
<div id="info-pompidou" class="info-container bloc">
    <div class="info-sidebar col-sm-3 lieu44057765">
        <span tabIndex="-1" class="close-info glyphicon glyphicon-remove"></span>
        <span class="info-lieu">Centre<br>Pompidou</span>
        <div class="info-bordureleft"></div>
    </div>
    <div class="info-midbar col-sm-5">
        <div class="info-presentation">
            « MAI 68 – ASSEMBLÉE GÉNÉRALE » EST UNE MANIFESTATION VIVANTE QUI CÉLÈBRE ET INTERROGE LA CONTEMPORANÉITÉ DE MAI 68, EN ACCÈS LIBRE PENDANT TROIS SEMAINES DANS LE FORUM -1 DU CENTRE POMPIDOU. 
        </div>
        <div class="info-description">
            Le Centre Pompidou est un établissement public français à caractère administratif, placé sous la tutelle du ministère de la Culture et de la Communication. <br>
            Doté d’une architecture emblématique conçue par Renzo Piano et Richard Rogers, le Centre Pompidou a été inauguré en 1977. Il réunit en un lieu unique l’un des plus importants musées au monde possédant la première collection d’art moderne et contemporain d’Europe, des salles de cinéma et de spectacles, des espaces d’activités éducatives, une bibliothèque de recherche sur l’art des 20e et 21e siècles. Il est associé à une bibliothèque de lecture publique et à un institut de recherche musicale (Ircam).<br>
            Plateforme d’échanges entre la société et la création contemporaine, le Centre Pompidou est un lieu populaire, qui reçoit plus de 3 millions de visiteurs chaque année, et dont la mission est de s’adresser à un public toujours plus large pour lui offrir les clés d’accès à la création contemporaine la plus récente et active, en nouant des liens étroits avec les artistes.
            <br><br>
            <b>Adresse</b><br> Place Georges Pompidou<br>75004 Paris<br>
            <br><a class="info-logo" target="_blank" href="https://www.centrepompidou.fr">
                <img src='assets/logo/logo-pompidou.png'>
            </a>
            <br>
            <a class="info-rs" target="_blank" href="http://facebook.com/centrepompidou.fr">
                <img src='assets/icon-fb.png'>
            </a>
            <a class="info-rs" target="_blank" href="https://twitter.com/centrepompidou">
                <img src='assets/icon-twitter.png'>
            </a>
            <a class="info-rs" target="_blank" href="https://www.instagram.com/centrepompidou/">
                <img src='assets/icon-insta.png'>
            </a>
        </div>
    </div>
    <div class="info-midbar col-sm-4">
        <div class="info-bordureright"></div>
        <div class="info-programme">PROGRAMME
            <div class="info-programmefond lieu44057765"></div>
        </div>
        <div class="info-agenda">
        <?php
            for($x=0; $x<$OA->total; $x++) { 
                if ($e[$x]->location->uid == 44057765) {
                    echo '<div class="info-event"><b>'.str_replace("2018", "", $e[$x]->range->fr).'</b><br>';
                    echo '<span>'.$e[$x]->title->fr.'</span><br>';
                    echo '<div class="info-eventdesc">'.$e[$x]->description->fr.'</div><br>';
                    echo '</div>';
                }
            }
        ?>
        </div>
        <div class="info-goagenda" onclick="addPlace(44057765)">ALLER VERS L'AGENDA<i class="glyphicon glyphicon-chevron-right"></i></div>
    </div>
</div>

<!--Archives-->
<div id="info-archives" class="info-container bloc">
    <div class="info-sidebar col-sm-3 lieu74030026">
        <span tabIndex="-1" class="close-info glyphicon glyphicon-remove"></span>
        <span class="info-lieu">Archives<br>nationales</span>
        <div class="info-bordureleft"></div>
    </div>
    <div class="info-midbar col-sm-5">
        <div class="info-presentation">
            À L’OCCASION DU 50e ANNIVERSAIRE DE 68, LES ARCHIVES NATIONALES ORGANISENT UNE EXPOSITION PRÉSENTANT LES ÉVÉNEMENTS DE MAI-JUIN 1968 VUS PAR LE POUVOIR EN PLACE.
        </div>
        <div class="info-description">
            <p><b>
                Une institution citoyenne au service de la mémoire collective.<br>
                Collecter, conserver, communiquer, faire comprendre et mettre en valeur leurs fonds, favoriser l’apprentissage de la citoyenneté auprès des jeunes publics sont les missions fondamentales des Archives nationales.
            </b></p>
            <p>
                Créées pendant la Révolution française, les Archives nationales conservent les archives publiques des différents régimes politiques du VIIe siècle jusqu’à nos jours, ainsi que les minutes des notaires parisiens et des fonds d’archives privées.<br>
                Avec la loi du 7 messidor an II (1794), l’accès gratuit aux archives de l’État est établi comme une garantie du régime démocratique et de la transparence de l’État. Ce sont près de 350 kilomètres linéaires d’archives sur tous supports, qui sont conservés, ainsi que des millions de fichiers nativement numériques.
            </p>
            <p>
                Parmi ces documents, certains symbolisent des étapes majeures de l’histoire de France : les papyri mérovingiens, le procès des Templiers, le journal de Louis XVI, le serment du Jeu de paume, la Déclaration des Droits de l’Homme et du Citoyen, le testament de Napoléon, les Constitutions successives de la France, ou encore le premier recensement numérique de la population en 1962.
            </p>
            <br><br>
            <b>Adresse</b><br> 59, rue Guynemer<br> 93383 Pierrefitte-sur-Seine<br>
            <br> 60, rue des Francs-Bourgeois<br> 75003 Paris<br>
            <br><a class="info-logo" target="_blank" href="http://www.archives-nationales.culture.gouv.fr/">
                <img id='logo-ministere' src='assets/logo/logo-ministere.png'>
                <img id='logo-archives' src='assets/logo/logo-archives.png'>
            </a>
            <br>
            <a class="info-rs" target="_blank" href="https://fr-fr.facebook.com/Archives.nationales.France">
                <img src='assets/icon-fb.png'>
            </a>
            <a class="info-rs" target="_blank" href="https://twitter.com/ArchivesnatFr">
                <img src='assets/icon-twitter.png'>
            </a>
            <a class="info-rs" target="_blank" href="https://www.pinterest.fr/archivesnatfr/pins/">
                <img src='assets/icon-pinterest.png'>
            </a>
        </div>
    </div>
    <div class="info-midbar col-sm-4">
        <div class="info-bordureright"></div>
        <div class="info-programme">PROGRAMME
            <div class="info-programmefond lieu74030026"></div>
        </div>
        <div class="info-agenda">
        <?php
            for($x=0; $x<$OA->total; $x++) { 
                if ($e[$x]->location->uid == 74030026) {
                    echo '<div class="info-event"><b>'.str_replace("2018", "", $e[$x]->range->fr).'</b><br>';
                    echo '<span>'.$e[$x]->title->fr.'</span><br>';
                    echo '<div class="info-eventdesc">'.$e[$x]->description->fr.'</div><br>';
                    echo '</div>';
                }
            }
        ?>
        </div>
        <div class="info-goagenda" onclick="addPlace(74030026)">ALLER VERS L'AGENDA<i class="glyphicon glyphicon-chevron-right"></i></div>
    </div>
</div>

<!--BnF-->
<div id="info-bnf" class="info-container bloc">
    <div class="info-sidebar col-sm-3 lieu96612516">
        <span tabIndex="-1" class="close-info glyphicon glyphicon-remove"></span>
        <span id='info-lieu-bnf' class="info-lieu">Bibliothèque<br> nationale<br>de&nbsp;France</span>
        <div class="info-bordureleft"></div>
    </div>
    <div class="info-midbar col-sm-5">
        <div class="info-presentation">
            50 ANS APRÈS LES ÉVÉNEMENTS DE MAI-JUIN 1968, L’EXPOSITION « ICÔNES DE MAI 68 : LES IMAGES ONT UNE HISTOIRE » REVIENT SUR LA CONSTRUCTION MÉDIATIQUE DE NOTRE MÉMOIRE VISUELLE COLLECTIVE.
        </div>
        <div class="info-description">
            <p><b>
                La Bibliothèque nationale de France est une des plus anciennes et des plus vastes bibliothèques au monde. Elle accueille le public sur quatre sites à Paris et fait vivre ses collections à travers une riche programmation culturelle.
            </b></p>
            <p>
                La BnF rassemble la mémoire du patrimoine national, le conserve et le fait connaître. Ses collections, issues du dépôt légal et d’une politique active d’acquisitions, sont uniques au monde : quinze millions de livres et de revues, mais aussi des manuscrits, estampes, photographies, cartes et plans, partitions, monnaies, médailles, documents sonores, vidéos, multimédia, décors, costumes… en accroissement constant. Toutes les disciplines intellectuelles, artistiques et scientifiques sont représentées dans un esprit encyclopédique. Ses espaces physiques sont fréquentés chaque année par plus d'un million de visiteurs. Gallica, la bibliothèque numérique de la BnF, donne accès gratuitement à plus de quatre millions de documents.
            </p>
            <br><br>
            <b>Adresse</b><br> BnF | François-Mitterrand<br> Quai François-Mauriac,<br> 75013 Paris<br>
            <br><a class="info-logo" target="_blank" href="http://www.bnf.fr/">
                <img src='assets/logo/logo-bnf.png'>
            </a>
            <br>
            <a class="info-rs" target="_blank" href="https://www.facebook.com/bibliothequebnf">
                <img src='assets/icon-fb.png'>
            </a>
            <a class="info-rs" target="_blank" href="https://twitter.com/laBnF">
                <img src='assets/icon-twitter.png'>
            </a>
            <a class="info-rs" target="_blank" href="https://www.instagram.com/labnf/">
                <img src='assets/icon-insta.png'>
            </a>
        </div>
    </div>
    <div class="info-midbar col-sm-4">
        <div class="info-bordureright"></div>
        <div class="info-programme">PROGRAMME
            <div class="info-programmefond lieu96612516"></div>
        </div>
        <div class="info-agenda">
        <?php
            for($x=0; $x<$OA->total; $x++) { 
                if ($e[$x]->location->uid == 96612516) {
                    echo '<div class="info-event"><b>'.str_replace("2018", "", $e[$x]->range->fr).'</b><br>';
                    echo '<span>'.$e[$x]->title->fr.'</span><br>';
                    echo '<div class="info-eventdesc">'.$e[$x]->description->fr.'</div><br>';
                    echo '</div>';
                }
            }
        ?>
        </div>
        <div class="info-goagenda" onclick="addPlace(96612516)">ALLER VERS L'AGENDA<i class="glyphicon glyphicon-chevron-right"></i></div>
    </div>
</div>

<!--Cinematheque-->
<div id="info-cinematheque" class="info-container bloc">
    <div class="info-sidebar col-sm-3 lieu33873846">
        <span tabIndex="-1" class="close-info glyphicon glyphicon-remove"></span>
        <span class="info-lieu">La Cinémathèque<br>française</span>
        <div class="info-bordureleft"></div>
    </div>
    <div class="info-midbar col-sm-5">
        <div class="info-presentation">
            VÉRITABLE CARREFOUR DES CINÉPHILIES, MUSÉE VIVANT DU CINÉMA, LA CINÉMATHÈQUE FRANÇAISE REVISITE MAI 68 À TRAVERS UNE GRANDE EXPOSITION CONSACRÉE À CHRIS MARKER ET LA REPRODUCTION GRANDEUR NATURE DE LA TOUTE PREMIÈRE QUINZAINE DES RÉALISATEURS EN MAI 69.
        </div>
        <div class="info-description">
            En <b>1936</b>, <b>Henri Langlois</b>, personnage visionnaire, crée <b>La Cinémathèque française</b> afin de sauver de la destruction les films, costumes, décors, affiches et autres trésors du cinéma. Il est alors le premier à considérer le cinéma comme <b>un art à conserver, restaurer et montrer</b>.<br> Huit décennies plus tard, dans un bâtiment résolument contemporain, entièrement dédié au 7e art, La Cinémathèque française dévoile plus que jamais le cinéma de manière unique grâce à <b>une des plus belle collections au monde sur le cinéma</b> et à ses nombreuses activités :<br> Des <b>expositions autour de personnalités majeures ou de grands moments de l’histoire du cinéma</b> (Tim Burton, Metropolis, Lanternes magiques, Pedro Almodovar, François Truffaut, Jacques Tati, Stanley Kubrick, Scorsese,...), des <b>films et conférences</b> (40 films par semaine, 4 salles de cinéma), une <b>Bibliothèque du Film</b> (22 500 ouvrages, 500 revues spécialisées, 23 000 affiches, 12 000 films...), des <b>collections</b> (40 000 films, 3 000 costumes, 23 000 affiches, 14 500 dessins, 2 300 objets…), un <b>Musée du cinéma</b>, des <b>activités pour le jeune public</b> et une <b>Librairie</b>.
            <br><br>
            <b>Adresse</b><br> 51 rue de Bercy<br> 75012 Paris<br><br>
            <a class="info-logo" target="_blank" href="http://www.cinematheque.fr/">
                <img src='assets/logo/logo-cinematheque.png'>
            </a>
            <br>
            <a class="info-rs" target="_blank" href="https://www.facebook.com/cinemathequefr">
                <img src='assets/icon-fb.png'>
            </a>
            <a class="info-rs" target="_blank" href="https://twitter.com/cinemathequefr">
                <img src='assets/icon-twitter.png'>
            </a>
            <a class="info-rs" target="_blank" href="https://www.instagram.com/cinemathequefr/">
                <img src='assets/icon-insta.png'>
            </a>
        </div>
    </div>
    <div class="info-midbar col-sm-4">
        <div class="info-bordureright"></div>
        <div class="info-programme">PROGRAMME
            <div class="info-programmefond lieu33873846"></div>
        </div>
        <div class="info-agenda">
        <?php
            for($x=0; $x<$OA->total; $x++) { 
                if ($e[$x]->location->uid == 33873846) {
                    echo '<div class="info-event"><b>'.str_replace("2018", "", $e[$x]->range->fr).'</b><br>';
                    echo '<span>'.$e[$x]->title->fr.'</span><br>';
                    echo '<div class="info-eventdesc">'.$e[$x]->description->fr.'</div><br>';
                    echo '</div>';
                }
            }
        ?>
        </div>
        <div class="info-goagenda" onclick="addPlace(33873846)">ALLER VERS L'AGENDA<i class="glyphicon glyphicon-chevron-right"></i></div>
    </div>
</div>
