<?php
$link = mysqli_connect('localhost', 'root', '', 'telephones');
if (!$link) {
    die('Ошибка соединения: ' . mysqli_error());
}