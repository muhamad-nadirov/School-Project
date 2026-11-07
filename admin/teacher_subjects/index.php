<?php

$query = "SELECT * FROM users WHERE `role`='teacher';";
$result = mysqli_query($conn, $query);

?>

<div class="table-responsive datatable-custom">
    <table class="js-datatable table table-borderless table-thead-bordered table-nowrap table-align-middle card-table" data-hs-datatables-options='{"order": []}'>
        <thead class="thead-light">
            <tr>
                <th>ФИО учителей</th>
                <th>Предметы</th>
            </tr>
        </thead>

        <form action="?page=showTeacherSubject" method="post">
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($result)): ?>
                    <tr>
                        <td><?= $row['full_name']; ?></td>
                        <td><button type="submit" class="btn btn-outline-primary" name="id" value="<?=$row['id'];?>">Посмотреть</button></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </form>
    </table>
</div>