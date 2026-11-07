<?php

if (isset($_POST['save'])) {
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $password_hash = $_POST['password_hash'];
    $class_id = $_POST['class_id'];

    $query = "INSERT INTO users (full_name, email, password_hash, role, class_id, created_at) 
    VALUES ('$full_name','$email',SHA1('$password_hash'),'teacher', $class_id, NOW())";
    
    // echo $query;
    mysqli_query($conn, $query);
    echo '<script>window.location.href="?page=teachers"</script>';
}


?>