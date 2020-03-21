<?php
include 'db.php';
$get_id = $_GET['id'];

if (isset($_GET['id'])) {
    $query = "DELETE FROM items WHERE id='$get_id'";
    mysqli_query($link, $query);
    header("Location: index.php");
}

