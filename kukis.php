<?php
_d($_COOKIE);

_d(rawurlencode('saldus braškinis su klevų sirupu'));

// setcookie('Mano-Pirmas-kukis' , 'saldus braškinis su klevų sirupu' , int $expires = 0 , string $path = "" , string $domain = "" , bool $secure = false , bool $httponly = false ) : bool
setcookie('Mano-Pirmas-kukis' , 'saldus braškinis su klevų sirupu', time() - 60);
setcookie('Mano-Antras-kukis' , 'saldus braškinis su klevų sirupu', time() + 800000, '/'); 


