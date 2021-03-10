<?php
session_start();
define('URL', 'http://localhost/zuikis/box2/'); // <--- konstanta
define('INSTALL_DIR', '/zuikis/box2/');
define('DIR', __DIR__.'/');
// require DIR. 'app/functions.php';


require DIR. 'app/BananaConstructor.php';


_d($_SESSION, 'SESIJA--->');

// http://localhost/zuikis/box/



