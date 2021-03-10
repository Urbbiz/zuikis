<?php
require __DIR__.'/bootstrap.php';





$uri = explode('/',str_replace(INSTALL_DIR, '', $_SERVER['REQUEST_URI']));


_d(str_replace(INSTALL_DIR, '', $_SERVER['REQUEST_URI']));
_d($uri);


// ROUTING

if ('' == $uri[0]) {
    (new BananaConstructor)->index();
}
elseif ('create' == $uri[0]) {
    (new BananaConstructor)->create();
}
elseif ('store' == $uri[0]) {
    (new BananaConstructor)->store();
}
elseif ('edit' == $uri[0]) {
    (new BananaConstructor)->edit((int)$uri[1]);
}
elseif ('update' == $uri[0]) {
    (new BananaConstructor)->update((int)$uri[1]);
}
elseif ('delete' == $uri[0]) {
    (new BananaConstructor)->delete((int)$uri[1]);
}


echo 'DURYS';


