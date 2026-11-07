<?php

$query = "SELECT us.*, cl.title FROM users AS us 
INNER JOIN classes AS cl 
ON us.`class_id` = cl.`id` 
WHERE us.role = 'teacher'
ORDER BY CAST(cl.title AS UNSIGNED), cl.title"; //таблица выводит всех пользователей, надо доб. условие роль=учитель, и сделать так для учеников

$result = mysqli_query($conn, $query);

?>

<div class="table-responsive datatable-custom">
  <table class="js-datatable table table-borderless table-thead-bordered table-nowrap table-align-middle card-table" data-hs-datatables-options='{"order": []}'>
    <thead class="thead-light">
        <tr>
        <th>ФИО</th>
        <th>E-Mail</th>
        <th>Класс</th>
        <th>Изменение</th>
        <th>Удаление</th>
        </tr>
    </thead>

    <tbody>
        <?php while ($row = mysqli_fetch_assoc($result)): ?>
            <tr>
                <td><?= $row['full_name'] ?></td>
                <td><?= $row['email'] ?></td>
                <td><?= $row['title'] ?></td>
                <td><a type="button" class="btn btn-outline-primary">Изменить</a></td>
                <td><a href="?page=deleteTeacher&id=<?= $row['id']; ?>" type="button" class="btn btn-outline-danger">Удалить</a></td>
            </tr>
        <?php endwhile; ?>
    </tbody>
  </table>
</div>