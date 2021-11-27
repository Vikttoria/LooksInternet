<?php
require('configDB.php');
$id =$_GET['id'];

$sql = 'DELETE FROM `tasks` WHERE `id` = ?';
$query = $pdo->prepare($sql);
$query->execute([$id]);

header('Location: http://tasks/internet/index.php');
?>