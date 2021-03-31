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

/////////// SKAITYMAS

echo '<h1>Viskas</h1>';

$sql = "SELECT name, height, id FROM trees"; // <--- sql formavimas

$stmt = $pdo->query($sql); // <--- perdavimas i DB. Gaunu steitmenta

while ($row = $stmt->fetch())
{
    echo $row['id'].': '.$row['name'].' '.$row['height'] . '<br>';
}

echo '<h1>Lapuočiai</h1>';

$sql = 
"SELECT name, height, id 
FROM trees
WHERE type = 2 AND height > 10"; // <--- sql formavimas

$stmt = $pdo->query($sql); // <--- perdavimas i DB. Gaunu steitmenta

while ($row = $stmt->fetch())
{
    echo $row['id'].': '.$row['name'].' '.$row['height'] . '<br>';
}

echo '<h1>Viskas pagal aukštį</h1>';

$sql = 
"SELECT name, height, id 
FROM trees
ORDER BY height DESC"; // <--- sql formavimas

$stmt = $pdo->query($sql); // <--- perdavimas i DB. Gaunu steitmenta

while ($row = $stmt->fetch())
{
    echo $row['id'].': '.$row['name'].' '.$row['height'] . '<br>';
}

echo '<h1>Lapuočiai pagal aukštį</h1>';

$sql = 
"SELECT name, height, id 
FROM trees
WHERE type = 2
ORDER BY height DESC"; // <--- sql formavimas

$stmt = $pdo->query($sql); // <--- perdavimas i DB. Gaunu steitmenta

while ($row = $stmt->fetch())
{
    echo $row['id'].': '.$row['name'].' '.$row['height'] . '<br>';
}


////////TRYNIMAS
$sql = "DELETE FROM trees WHERE name='Kaštonas'"; // <--- sql formavimas

$pdo->query($sql);// <--- perdavimas i DB.


/////////// ĮRAŠYMAS
$sql = "INSERT INTO trees (name, height, type)
VALUES ('Kaštonas', 7.99, 2)";// <--- sql formavimas

$pdo->query($sql);// <--- perdavimas i DB.



//////////REDAGAVIMAS
$sql = "UPDATE trees SET height=88.88 WHERE name='Kaštonas'";

$pdo->query($sql);// <--- perdavimas i DB.

