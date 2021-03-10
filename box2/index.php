<?php
require __DIR__.'/bootstrap.php';





$uri = explode('/',str_replace(INSTALL_DIR, '', $_SERVER['REQUEST_URI']));


_d(str_replace(INSTALL_DIR, '', $_SERVER['REQUEST_URI']));
_d($uri);


// ROUTING

if ('' == $uri[0]) {
    (new BananaConstructor)->index();
}



echo 'DURYS';


