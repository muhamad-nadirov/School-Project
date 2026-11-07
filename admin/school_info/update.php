<?php

if (isset($_POST['save'])) {
    if (
        !empty($_POST['description']) &&
        !empty($_POST['address']) &&
        !empty($_POST['phone']) &&
        !empty($_POST['email'])
    ) {
        $id = $_POST['id'];
        $desc = $_POST['description'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];

        $query = "UPDATE school_info
        SET `description` = '$desc',
            `address` = '$address',
            phone = '$phone',
            email = '$email'
        WHERE id = $id;";

        mysqli_query($conn, $query);

        echo '<script>window.location.href="?page=school_info"</script>';
    }
} else {
    echo '<script>window.location.href="?page=editSchoolInfo"</script>';
}

// print_r($_POST);

?>