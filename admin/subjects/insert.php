<?php

// require_once("../conn.php");

if (isset($_POST['title']) && !empty($_POST['title'])) {
    $title = $_POST['title'];
    $query = "INSERT INTO subjects(title) VALUE ('$title')";
    mysqli_query($conn, $query);
}

// header("Location:?page=classes");        не работает так как 

echo '<script> window.location.href = "?page=subjects" </script>';

?>