<?php
$b = '#ffffff';

_d($_GET);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $b = '#fee227';
    header('Location: http://localhost/zuikis/u6.php');
    die;


}
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $b = '#d28e9c';
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background:<?= $b ?>;">
    
    <form action="" method="get">
    <button type="submit" name="getas" value="lalalala">GET</button>
    </form>

    <form action="" method="post">
    <button type="submit">POST</button>
    </form>

</body>
</html>