<?php

$query = "SELECT * FROM subjects ORDER BY id DESC;";
$result = mysqli_query($conn, $query);

?>

<div class="table-responsive datatable-custom">
  <table class="js-datatable table table-borderless table-thead-bordered table-nowrap table-align-middle card-table" data-hs-datatables-options='{"order": []}'>
    <thead class="thead-light">
        <tr>
        <th>Название</th>
        <th>Изменение</th>
        <th>Удаление</th>
        </tr>
    </thead>

    <tbody>
        <?php while ($row = mysqli_fetch_assoc($result)): ?>
            <tr>
                <td><?= $row['title'] ?></td>
                <td><a type="button" class="btn btn-outline-primary">Изменить</a></td>
                <td><a href="?page=deleteSubject&id=<?= $row['id']; ?>" type="button" class="btn btn-outline-danger">Удалить</a></td>
            </tr>
        <?php endwhile; ?>
    </tbody>
  </table>
</div>