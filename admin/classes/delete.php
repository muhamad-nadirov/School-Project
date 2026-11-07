<?php

if (!empty($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM classes WHERE id=$id";
    mysqli_query($conn, $query);
}

echo '<script> window.location.href="?page=classes" </script>';

?>