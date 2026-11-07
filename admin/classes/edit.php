<?php

$id = $_GET['id'];
$query = "SELECT * FROM classes WHERE id=$id";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);

?>
<div class="row">
  <div class="col-lg-10 mb-3 mb-lg-0">
    <div class="card mb-3 mb-lg-5">
      <div class="card-header">
        <h4 class="card-header-title">Изменить данные</h4>
      </div>
      <div class="card-body">
        <!-- FORM -->
        <form action="?page=updateClass" method="get">
          <div class="mb-6"> 
            <input type="hidden" name="id" value="<?=$id?>">

            <label for="productNameLabel" class="form-label">Названия класса</label>
            <input name="title" type="text" value="<?= $row['title']?>" class="form-control" id="productNameLabel" placeholder="Класс"> <br>

            <input type="submit" class="btn btn-primary" value="Сохранить">
          </div>
        </form>
        <!-- END FORM -->
      </div>
    </div>
  </div>
</div>