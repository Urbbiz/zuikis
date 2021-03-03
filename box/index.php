<?php 
require __DIR__.'/bootstrap.php';
_d(readData());

_d(getNextId());
_d(getNextId());
_d(getNextId());

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bannana Boxes</title>
</head>
<body>
    <h1>Bannana Boxes</h1>
    <a href="<?= URL ?>login.php">Login</a>
    <a href="<?= URL ?>private.php">Private</a>
</body>
</html>