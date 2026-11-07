<?php
$id=$_POST['id'];
$query = 
"SELECT us.*,sub.* FROM users as us
WHERE `role`='teacher' and id=$id
INNER JOIN subjects as sub
ON ";
$res = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($res);
echo $row['full_name'];

?>

<form action="" method="post">
    <table class="js-datatable table table-borderless table-thead-bordered table-nowrap table-align-middle card-table" data-hs-datatables-options='{"order": []}'>
        <thead class="thead-light">
            <tr>
                <th>ФИО учителей</th>
                <th>Предметы</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td> </td>
                <td> </td>
            </tr>
        </tbody>
    </table>
</form>