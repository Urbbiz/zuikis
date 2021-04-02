<?php

$host = '127.0.0.1';
$db   = 'forest';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
try {
     $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
     throw new \PDOException($e->getMessage(), (int)$e->getCode());
}

if (!empty($_POST)) {
    if('add' == $_POST['action']) {
        // $sql = "INSERT INTO trees (name, height, type)
        // VALUES ('".$_POST['name']."', ".$_POST['height'].", ".$_POST['type'].")";// <--- sql formavimas

        // $pdo->query($sql);// <--- perdavimas i DB.


        // $sql = "INSERT INTO trees (name, height, type)
        // VALUES (?, ?, ?)";// <--- sql formavimas
        // $stmt = $pdo->prepare($sql); // paruosimas
        // $stmt->execute([  $_POST['name'], $_POST['height'], $_POST['type']   ]); // vykdymas

        $sql = "INSERT INTO trees (name, height, type)
        VALUES (:name, :h, :type)";// <--- sql formavimas
        $stmt = $pdo->prepare($sql); // paruosimas
        $stmt->execute([ 'type'=>$_POST['type'], 'name'=>$_POST['name'], 'h'=>$_POST['height']    ]); // vykdymas

    }

    if('delete' == $_POST['action']) {

        $sql = "DELETE FROM trees WHERE id=?"; // sql formavimas
        $stmt = $pdo->prepare($sql); // paruosimas
        $stmt->execute([  $_POST['id']  ]); // vykdymas

        // $sql = "DELETE FROM trees WHERE id=".$_POST['id'].""; // <--- sql formavimas
        // // "DELETE FROM trees WHERE id=888 OR 1"
        // $pdo->query($sql);// <--- perdavimas i DB.
    }



    
    




    header ('Location: http://localhost/zuikis/db/form.php');
    die;
}



?>
<form action="" method="post">
    name:<input type="text" name="name">
    type:<input type="text" name="type">
    height:<input type="text" name="height">
    <button type="submit" name="action" value="add">sodinti</button>
</form>
<hr>

<form action="" method="post">
    id:<input type="text" name="id">
    <button type="submit" name="action" value="delete">rauti</button>
</form>




<?php

echo '<h1>Viskas</h1>';

$sql = "SELECT name, height, id FROM trees"; // <--- sql formavimas

$stmt = $pdo->query($sql); // <--- perdavimas i DB. Gaunu steitmenta

while ($row = $stmt->fetch())
{
    echo $row['id'].': '.$row['name'].' '.$row['height'] . '<br>';
}