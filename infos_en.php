<!--Paris Nanterre-->
<div id="info-nanterre" class="info-container bloc">
    <div class="info-sidebar col-sm-3 lieu49592631">
        <span tabIndex="-1" class="close-info glyphicon glyphicon-remove"></span>
        <span class="info-lieu">Université<br>Paris Nanterre</span>
        <div class="info-bordureleft"></div>
    </div>
    <div class="info-midbar col-sm-5">
        <div class="info-presentation">
            THIS YEAR UNIVERSITY PARIS NANTERRE WILL MARK THE 50TH ANNIVERSARY OF THE “EVENTS” BY CELEBRATING, DELVING INTO AND REINVENTING THE SPIRIT OF MAY 1968 THROUGHOUT THE ENTIRE YEAR UNDER THE BANNER OF “1968-2018: DARE TO HAVE IDEAS!”.
        </div>
        <div class="info-description">
            With its 34,000 students and strong identity in the humanities and social sciences, University Paris Nanterre has chosen to re-address on its campus the questions of “imagination in power” (a famous May 1968 slogan) and the connections between art and politics. This will be done by involving the university’s entire community in powerful and special events dedicated to creation and exchanges. Between January and October the campus will open to as large a public as possible and will welcome numerous distinguished guests for different celebration days during which both debates and artistic performances will be held. These exchanges, performances and projections will be the opportunity to broaden the scope of May 1968 within time and space, and to rethink our relation to towns, work, politics, art and the group in society, from the perspective of both youth and intersecting generations.
            <br><br>
            <b>Address</b><br> 200 avenue de la République<br> 92001 Nanterre Cedex<br>
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
        <div class="info-programme">PROGRAM
            <div class="info-programmefond lieu49592631"></div>
        </div>
        <div class="info-agenda">
        <?php
            for($x=0; $x<$OA->total; $x++) { 
                if ($e[$x]->location->uid == 49592631) {
                    echo '<div class="info-event"><b>'.str_replace("2018", "", $e[$x]->range->en).'</b><br>';
                    echo '<span>'.($e[$x]->title->en ? $e[$x]->title->en : $e[$x]->title->fr).'</span><br>';
                    echo '<div class="info-eventdesc">'.($e[$x]->description->en ? $e[$x]->description->en : $e[$x]->description->fr).'</div><br>';
                    echo '</div>';
                }
            }
        ?>
        </div>
        <div class="info-goagenda" onclick="addPlace(49592631)">GO TO AGENDA<i class="glyphicon glyphicon-chevron-right"></i></div>
    </div>
</div>

<!--Amandiers-->
<div id="info-amandiers" class="info-container bloc">
    <div class="info-sidebar col-sm-3 lieu47774204">
        <span tabIndex="-1" class="close-info glyphicon glyphicon-remove"></span>
        <span class="info-lieu">Nanterre-<br>Amandiers</span>
        <div class="info-bordureleft"></div>
    </div>
    <div class="info-midbar col-sm-5">
        <div class="info-presentation">
            FROM APRIL TO MAY 2018, NANTERRE-AMANDIERS THEATRE HOSTS ITS OWN CELEBRATION OF THE 50TH ANNIVERSARY OF THE MAY 68 PROTESTS, WITH ART PIECES WHOSE COMMON THREAD IS TO PROBE THE UNCHARTED TERRITORY OF UTOPIA. 
        </div>
        <div class="info-description">
            Departing from any nostalgic memorial, <b>“Mondes possibles”</b> interrogates the utopia of May 68 and brings together the creations of European artists and thinkers. While some projects trace the militant and libertarian legacy of the events, others look to the times ahead, envisioning possible worlds for the future: installations, open air shows, chronicle of the city of Nanterre, ABCs of philosophy, lecture, concert, films, or dance piece. <br><br>
            Partners: Centre Culturel Suisse de Paris (Extra Ball Festival), Université Paris-Nanterre (Global 68), Centre national des arts plastiques
            <br><br>
            <b>Address</b><br> Centre dramatique national<br> 7, avenue Pablo-Picasso<br> 92022 Nanterre Cedex<br>
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
        <div class="info-programme">PROGRAM
            <div class="info-programmefond lieu47774204"></div>
        </div>
        <div class="info-agenda">
        <?php
            for($x=0; $x<$OA->total; $x++) { 
                if ($e[$x]->location->uid == 47774204) {
                    echo '<div class="info-event"><b>'.str_replace("2018", "", $e[$x]->range->en).'</b><br>';
                    echo '<span>'.($e[$x]->title->en ? $e[$x]->title->en : $e[$x]->title->fr).'</span><br>';
                    echo '<div class="info-eventdesc">'.($e[$x]->description->en ? $e[$x]->description->en : $e[$x]->description->fr).'</div><br>';
                    echo '</div>';
                }
            }
        ?>
        </div>
        <div class="info-goagenda" onclick="addPlace(47774204)">GO TO AGENDA<i class="glyphicon glyphicon-chevron-right"></i></div>
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
            "May' 68. Architecture as well!" 1968, student revolt, trade union, social and artistic revolt, of the way of thinking or making cities, of simply living. Teach and do architecture differently.
        </div>
        <div class="info-description">
            The Cité de l’architecture & du patrimoine offers its visitors an exceptionally diverse cultural experience organised in a single, unique location occupying 22,000m² in the heart of Paris. From urban renewal to the revitalisation of our cultural heritage, questions of the city occupy us daily. A public entity under the umbrella of the Ministry of Culture and Communications, the role of the Cité is to be a source of information and knowledge in all questions related to the quality of architecture, from the upgrading of our cultural heritage to the preservation of the urban environment. Aimed at both the general public and a more specialist audience, the programme of the Cité is highly diversified: permanent and temporary exhibitions, teaching and workshops, symposia, debates, projections...<br>
            Specialists in the areas of architecture and urbanism are invited to take advantage of the courses offered by the École de Chaillot as well as the library and the archives of the Cité.
            <br><br>
            <b>Address</b><br> Palais de Chaillot<br> 1 place du Trocadéro<br> 75016 Paris 16<br>
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
        <div class="info-programme">PROGRAM
            <div class="info-programmefond lieu97092341"></div>
        </div>
        <div class="info-agenda">
        <?php
            for($x=0; $x<$OA->total; $x++) { 
                if ($e[$x]->location->uid == 97092341) {
                    echo '<div class="info-event"><b>'.str_replace("2018", "", $e[$x]->range->en).'</b><br>';
                    echo '<span>'.($e[$x]->title->en ? $e[$x]->title->en : $e[$x]->title->fr).'</span><br>';
                    echo '<div class="info-eventdesc">'.($e[$x]->description->en ? $e[$x]->description->en : $e[$x]->description->fr).'</div><br>';
                    echo '</div>';
                }
            }
        ?>
        </div>
        <div class="info-goagenda" onclick="addPlace(97092341)">GO TO AGENDA<i class="glyphicon glyphicon-chevron-right"></i></div>
    </div>
</div>

<!--Beaux Arts-->
<div id="info-beauxarts" class="info-container bloc">
    <div class="info-sidebar col-sm-3 lieu37250659">
        <span tabIndex="-1" class="close-info glyphicon glyphicon-remove"></span>
        <span class="info-lieu">Beaux-Arts<br>de&nbsp;Paris</span>
        <div class="info-bordureleft"></div>
    </div>
    <div class="info-midbar col-sm-5">
        <div class="info-presentation">
            FRUIT DES REGARDS CROISÉS DE DEUX DISCIPLINES SOUVENT OPPOSÉES, L’HISTOIRE DE L’ART ET L’HISTOIRE, L’EXPOSITION « IMAGES EN LUTTE » PROPOSE UNE LECTURE DOCUMENTÉE DE CE MOMENT PARTICULIER DE L’HISTOIRE CONTEMPORAINE, LES ANNÉES 1968-1974, OÙ L’ART ET LE POLITIQUE, LA CRÉATION ET LES LUTTES SOCIALES ET POLITIQUES FURENT INTIMEMENT MÊLÉS. 
        </div>
        <div class="info-description">
            Beaux-Arts is located in the heart of Saint-Germain-des- Prés in Paris, steps away from the Louvre Museum. The first mission of Beaux-Arts is to educate and train students planning to devote themselves to high-level artistic creation. The school has a history spanning more than 350 years, training many of the great artists in Europe. The origins of the school go back to 1648 when the Académie des Beaux-Arts was founded. Since then the institution has maintained its original studio teaching method. Beaux-Arts, which spreads over five acres between the rue Bonaparte and the Quai Malaquais, houses prestigious historical collections and holds exhibitions in the Quai Malaquais and Chapel throughout the year. 
            <br><br>
            <b>Address</b><br>
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
        <div class="info-programme">PROGRAM
            <div class="info-programmefond lieu37250659"></div>
        </div>
        <div class="info-agenda">
        <?php
            for($x=0; $x<$OA->total; $x++) { 
                if ($e[$x]->location->uid == 37250659) {
                    echo '<div class="info-event"><b>'.str_replace("2018", "", $e[$x]->range->en).'</b><br>';
                    echo '<span>'.($e[$x]->title->en ? $e[$x]->title->en : $e[$x]->title->fr).'</span><br>';
                    echo '<div class="info-eventdesc">'.($e[$x]->description->en ? $e[$x]->description->en : $e[$x]->description->fr).'</div><br>';
                    echo '</div>';
                }
            }
        ?>
        </div>
        <div class="info-goagenda" onclick="addPlace(37250659)">GO TO AGENDA<i class="glyphicon glyphicon-chevron-right"></i></div>
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
            "MAI 68 – ASSEMBLÉE GÉNÉRALE" (MAY 68: GENERAL MEETING) IS A LIVE DEMONSTRATION THAT CELEBRATES AND EXPLORES THE TOPICALITY OF MAY 68, ACCESSIBLE AT NO CHARGE FOR THREE WEEKS IN THE CENTRE POMPIDOU'S FORUM -1.
 
        </div>
        <div class="info-description">
            Boasting iconic architecture designed by Renzo Piano and Richard Rogers, the Centre Pompidou was inaugurated in 1977. In a single building, it houses one of the world's top museums, containing Europe's leading collection of modern and contemporary art, as well as cinemas, theatres, educational activity areas and a research library for 20th and 21st century art. It also has partnerships with a public reading library and a music research institute (IRCAM).<br>
            As a platform creating links between society and contemporary creation, the Centre Pompidou is a place for the people. It welcomes over 3 million visitors each year, and its mission is to reach out to an ever-broader public, offering them the means to explore the most recent and active contemporary creation by establishing close relations with artists.
            <br><br>
            <b>Address</b><br>Place Georges Pompidou<br>75004 Paris<br>
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
        <div class="info-programme">PROGRAM
            <div class="info-programmefond lieu44057765"></div>
        </div>
        <div class="info-agenda">
        <?php
            for($x=0; $x<$OA->total; $x++) { 
                if ($e[$x]->location->uid == 44057765) {
                    echo '<div class="info-event"><b>'.str_replace("2018", "", $e[$x]->range->en).'</b><br>';
                    echo '<span>'.($e[$x]->title->en ? $e[$x]->title->en : $e[$x]->title->fr).'</span><br>';
                    echo '<div class="info-eventdesc">'.($e[$x]->description->en ? $e[$x]->description->en : $e[$x]->description->fr).'</div><br>';
                    echo '</div>';
                }
            }
        ?>
        </div>
        <div class="info-goagenda" onclick="addPlace(44057765)">GO TO AGENDA<i class="glyphicon glyphicon-chevron-right"></i></div>
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
            ON THE OCCASION OF THE 50TH ANNIVERSARY OF 1968, THE ARCHIVES NATIONALES ORGANIZE AN EXHIBITION PRESENTING THE EVENTS OF MAY-JUNE 1968 FROM THE GOVERNMENT POINT OF VIEW.
        </div>
        <div class="info-description">
            <p><b>
                A civic institution supporting the collective memory.<br>
                Collecting, conserving, communicating, explaining and showcasing its holdings, and promoting a sense of citizenship among young people are the fundamental roles of the Archives Nationales.
            </b></p>
            <p>
                Created during the French Revolution, the Archives Nationales preserves the public archives of the various political regimes from the 7th century to the present day, as well as deeds of Parisian notaries and private archival holdings. <br>
                The Law of 7 Messidor Year II (27 June 1794) established free access to the state’s archives as an assurance of democratic governance and state transparency.<br>
                Around 350 linear kilometres of archives are conserved, in all formats, together with millions of native digital files. 
            </p>
            <p>
                Among these documents are items which symbolise key moments in French history such as Merovingian papyri, the trial of the Templars, Louis XVI’s journal, the Tennis Court Oath, the Declaration of the Rights of Man and of the Citizen, Napoleon’s will, the successive French Constitutions, and the first numerical census of the population in 1962.
            </p>
            <br><br>
            <b>Address</b><br>
            <i>Site of Paris</i><br>
            60, rue des Francs-Bourgeois<br> 75003 Paris<br>
            <br>
            <i>Site of Pierrefitte-sur-Seine</i><br>
            59, rue Guynemer<br> 93383 Pierrefitte-sur-Seine<br>
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
        <div class="info-programme">PROGRAM
            <div class="info-programmefond lieu74030026"></div>
        </div>
        <div class="info-agenda">
        <?php
            for($x=0; $x<$OA->total; $x++) { 
                if ($e[$x]->location->uid == 74030026 || $e[$x]->location->uid == 64232241) {
                    echo '<div class="info-event"><b>'.str_replace("2018", "", $e[$x]->range->en).'</b><br>';
                    echo '<span>'.($e[$x]->title->en ? $e[$x]->title->en : $e[$x]->title->fr).'</span><br>';
                    echo '<div class="info-eventdesc">'.($e[$x]->description->en ? $e[$x]->description->en : $e[$x]->description->fr).'</div><br>';
                    echo '</div>';
                }
            }
        ?>
        </div>
        <div class="info-goagenda" onclick="addPlace(74030026)">GO TO AGENDA<i class="glyphicon glyphicon-chevron-right"></i></div>
    </div>
</div>

<!--BnF-->
<div id="info-bnf" class="info-container bloc">
    <div class="info-sidebar col-sm-3 lieu96612516">
        <span tabIndex="-1" class="close-info glyphicon glyphicon-remove"></span>
        <span id='info-lieu-bnf' class="info-lieu">Bibliothèque<br> nationale de&nbsp;France</span>
        <div class="info-bordureleft"></div>
    </div>
    <div class="info-midbar col-sm-5">
        <div class="info-presentation">
            50 YEARS AFTER THE EVENTS OF MAY-JUNE 1968, THE EXHIBITION “ICONS OF MAY 68 : PICTURES TELL THEIR OWN STORIES” BRINGS TO LIGHT THE CONDITIONS OF THEIR CULTURAL ADVENT IN THE COLLECTIVE MEMORY.
        </div>
        <div class="info-description">
            <p><b>
                The Bibliothèque nationale de France is one of the oldest and largest libraries in the world. It welcomes visitors on four locations in Paris and keeps its collections alive thanks to a rich calendar of cultural events.
            </b></p>
            <p>
                The BnF collects, preserves and highlights the national heritage. Its collections, gathered through the legal deposit and thanks to an active acquisition policy, are unique in the world: 15 million books and periodicals but also manuscripts, prints, photographs, maps and plans, scores, coins, medals, sound, video and multimedia documents, sets, costumes… that are constantly increasing. All intellectual, artistic and scientific disciplines are represented and classified according to some encyclopaedic approach. The premises of the BnF welcome over one million visitors every year. Gallica, the digital library of the BnF, provides free access to over 4 million documents.
            </p>
            <br><br>
            <b>Address</b><br> BnF | François-Mitterrand<br> Quai François-Mauriac,<br> 75013 Paris<br>
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
        <div class="info-programme">PROGRAM
            <div class="info-programmefond lieu96612516"></div>
        </div>
        <div class="info-agenda">
        <?php
            for($x=0; $x<$OA->total; $x++) { 
                if ($e[$x]->location->uid == 96612516) {
                    echo '<div class="info-event"><b>'.str_replace("2018", "", $e[$x]->range->en).'</b><br>';
                    echo '<span>'.($e[$x]->title->en ? $e[$x]->title->en : $e[$x]->title->fr).'</span><br>';
                    echo '<div class="info-eventdesc">'.($e[$x]->description->en ? $e[$x]->description->en : $e[$x]->description->fr).'</div><br>';
                    echo '</div>';
                }
            }
        ?>
        </div>
        <div class="info-goagenda" onclick="addPlace(96612516)">GO TO AGENDA<i class="glyphicon glyphicon-chevron-right"></i></div>
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
            ESSENTIAL MEETING PLACE FOR FILM ENTHUSIASTS, LIVING MUSEUM OF CINEMA, LA CINÉMATHÈQUE FRANÇAISE REVISITS MAY 68 THROUGH A GREAT EXHIBITION DEDICATED TO CHRIS MARKER AND THE REPRODUCTION OF THE VERY FIRST DIRECTORS' FORTNIGHT FROM MAY 69.
        </div>
        <div class="info-description">
            In <b>1936</b>, the visionary <b>Henri Langlois</b> founded <b>La Cinémathèque française</b> to stop the destruction of films, costumes, sets, posters and other cinematic treasures. He was the first person to consider cinema <b>an art worth conserving, restoring and displaying</b>.<br> Eight decades later, in a decidedly contemporary building entirely dedicated to the world of film, La Cinémathèque française offers a unique view of cinema through <b>one of the finest cinematic collections in the world</b> and a varied range of activities for the public: <br><b>Exhibitions on major figures and key moments in the history of cinema</b> (Tim Burton, Metropolis, Lanternes magiques, Pedro Almodovar, François Truffaut, Jacques Tati, Stanley Kubrick, Scorsese,...), des <b>films and talks</b> (40 films a week, 4 cinema screens), a <b>film library</b> (22,500 books, 500 specialist magazines and journals, 23,000 posters, 12,000 films), <b>collections</b> (40,000 films, 3000 costumes, 23,000 posters, 14,500 drawings, 2300 objects), a <b>cinema museum</b>, <b>activities for young visitors</b> and a <b>bookshop</b>.
            <br><br>
            <b>Address</b><br> 51 rue de Bercy<br> 75012 Paris<br><br>
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
        <div class="info-programme">PROGRAM
            <div class="info-programmefond lieu33873846"></div>
        </div>
        <div class="info-agenda">
        <?php
            for($x=0; $x<$OA->total; $x++) { 
                if ($e[$x]->location->uid == 33873846) {
                    echo '<div class="info-event"><b>'.str_replace("2018", "", $e[$x]->range->en).'</b><br>';
                    echo '<span>'.($e[$x]->title->en ? $e[$x]->title->en : $e[$x]->title->fr).'</span><br>';
                    echo '<div class="info-eventdesc">'.($e[$x]->description->en ? $e[$x]->description->en : $e[$x]->description->fr).'</div><br>';
                    echo '</div>';
                }
            }
        ?>
        </div>
        <div class="info-goagenda" onclick="addPlace(33873846)">GO TO AGENDA<i class="glyphicon glyphicon-chevron-right"></i></div>
    </div>
</div>
