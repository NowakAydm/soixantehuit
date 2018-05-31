
# SoixanteHuit.fr
###### The source code of the website soixantehuit.fr


### File structure
* **assets/**

Contains various assets used on the website (images, icons and background)

* **css/**

This folder contains the compiled sass files used for the styles.

    * fix.css

    Corrects a little problem with the SASS compilation of the command "will-change"

* **js/**

This folder contains the scripts used on the web page :

    * 68.js

    Mostly display and animation functions.

    * search.js

    This has the sorting function used in the Agenda section.


* **sass/**

The styles where written in sass, which was compiled using the built-in compiler of the Brackets IDE.


* index.php

The main file, that includes the other php files. It has the global structure of the website.

* en.php

The translated version of index.php

* infos.php and infos_en.php

This file contains the information section of the website.

* agenda.php and agenda_php

This file contains the agenda section of the website with its research features.



### Installation

You need to setup a server ([apache](https://httpd.apache.org/download.cgi), for example) and simply copy the whole file structure at the root ot the server.

Don't forget to install mbstring and for the support of capital accented characters.
```
sudo apt-get install php7.0-mbstring
sudo service apache2 restart
```
