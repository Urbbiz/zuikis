<?php 
require __DIR__.'/bootstrap.php';


// POST metodo scenarijus
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $users = file_get_contents(__DIR__.'/users.json');
    $users = json_decode($users, 1);

    $postName = $_POST['name'] ?? '';
    $postPass = $_POST['pass'] ?? '';

    foreach ($users as $user) {
        if ($postName == $user['name']) { // <--- turim useri
            if (password_verify($postPass, $user['pass'])) { // <--- viskas OK
                $_SESSION['login'] = 1;
                $_SESSION['user'] = $user;
                header('Location: '.URL.'private.php');
                die;
            }
        }
    }

    $_SESSION['msg'] = 'Password or Name is invalid.';
    header('Location: '.URL.'login.php');
    die;


}




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login page</h1>
    <form action="<?= URL ?>login.php" method="post">
        NAME:<input type="text" name="name">
        PASSWORD:<input type="password" name="pass">
        <button type="submit">login</button>
    </form>
</body>
</html>