<?php

// require_once("../conn.php");

if (isset($_POST['title']) && !empty($_POST['title'])) {
    $title = $_POST['title'];
    $title = mb_strtoupper(str_replace(' ','',$title));
    $query = "INSERT INTO classes(title) VALUE ('$title')";
    mysqli_query($conn, $query);

    echo '<script> window.location.href = "?page=classes" </script>';
}
// header("Location:?page=classes"); не сработает

?>