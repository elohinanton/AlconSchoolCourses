<!-- Обработка форм -->

<?php

if($_SERVER['REQUEST_METHOD'] !== 'POST' ){
    throw new \Exception("Method not allowed");
}

$fh = fopen('users.csv', 'a');
fputcsv($fh, [$_POST['userName'], $_POST['email'], $_POST['phone']], ';');
fclose($fh);

echo "Форма сохранена"; 