<?php

$query = "SELECT * FROM school_info ORDER BY id DESC;";
$result = mysqli_query($conn, $query);

?>

<div class="table-responsive datatable-custom">
  <table class="js-datatable table table-borderless table-thead-bordered table-nowrap table-align-middle card-table" data-hs-datatables-options='{"order": []}'>
    <thead class="thead-light">
        <tr>
            <th>Описание</th>
            <th>Адрес</th>
            <th>Телефон</th>
            <th>Эл. почта</th>
            <th>Изменить</th>
            <!-- <th>Удалить</th>` -->
        </tr>
    </thead>

    <tbody>
        <?php while ($row = mysqli_fetch_assoc($result)): ?>
            <tr>
                <td><?= $row['description'] ?></td>
                <td><?= $row['address'] ?></td>
                <td><?= $row['phone'] ?></td>
                <td><?= $row['email'] ?></td>
                <td><a href="?page=editSchoolInfo&id=<?= $row['id']; ?>" type="button" class="btn btn-outline-primary">Изменить</a></td>
                <!-- <td><a href="?page=deleteSchoolInfo&id=<?= $row['id']; ?>" type="button" class="btn btn-outline-danger">Удалить</a></td> -->
            </tr>
        <?php endwhile; ?>
    </tbody>
  </table>
</div>