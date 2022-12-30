<?php

require 'db_connection.php';

// $sql = 'select * from contacts where id = 2';
// $stmt = $pdo->query($sql);

// $result = $stmt->fetchall();

// echo '<pre>';
// var_dump($result);
// echo '</pre>';

$sql = 'select * from contacts where id = :id';
$stmt = $pdo->prepare($sql);
$stmt->bindValue('id', 2, PDO::PARAM_INT);
$stmt->execute();

$result = $stmt->fetchall();

echo '<pre>';
var_dump($result);
echo '</pre>';


// $pdo->beginTransaction();

// try{
    
//     $pdo->commit();
// }catch(PDOException $e){
//     $pdo->rollback();
// }