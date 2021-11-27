<?php
$task=$_POST['task'];
if($task==''){
    echo 'Введите задание';
    exit();
}
$dsn= 'mysql:host=localhost;dbname=internet';
$pdo = new PDO($dsn, 'root', '');

$sql= 'INSERT INTO tasks(task) VALUES(:task)';
$query = $pdo->prepare($sql);
$query->execute(['task' => $task]);

header('Location: http://tasks/internet/index.php')
?>