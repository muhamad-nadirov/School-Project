<?php 

$query = "SELECT * FROM school_info";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);

?>

<form method="post" action="?page=updateSchoolInfo">
  <!-- input hidden -->
   <input type="hidden" name="id" value="<?= $row['id'] ?>">
  <!-- input hidden -->

  <!-- Input Group -->
  <div class="mb-3">
    <label for="inputGroupMergeFullName" class="form-label">Описание</label>

    <div class="input-group input-group-merge">
      <textarea name="description" type="text" class="form-control" required id="inputGroupMergeFullName" aria-describedby="inputGroupMergeFullNameAddOn"><?= $row['description'] ?></textarea>
    </div>
  </div>
  <!-- End Input Group -->

  <!-- Input Group -->
  <div class="mb-3">
    <label for="inputGroupMergeEmail" class="form-label">Адрес</label>

    <div class="input-group input-group-merge">
      <div class="input-group-prepend input-group-text" id="inputGroupMergeEmailAddOn">
        <i class="bi-geo-alt"></i>
      </div>
      <input name="address" type="text" class="form-control" value="<?=$row['address']?>" required id="inputGroupMergeEmail" placeholder="mark@example.com" aria-label="mark@example.com" aria-describedby="inputGroupMergeEmailAddOn">
    </div>
  </div>
  <!-- End Input Group -->

  <!-- Input Group -->
  <div class="mb-3">
    <label for="inputGroupMergeEmail" class="form-label">Телефон</label>

    <div class="input-group input-group-merge">
      <div class="input-group-prepend input-group-text" id="inputGroupMergeEmailAddOn">
        <i class="bi-telephone"></i>
      </div>
      <input name="phone" type="text" class="form-control" value="<?=$row['phone']?>" required id="inputGroupMergeEmail" placeholder="+992-xx-xxx-xxxx" aria-label="+992-xx-xxx-xxxx" aria-describedby="inputGroupMergeEmailAddOn">
    </div>
  </div>
  <!-- End Input Group -->

  <!-- Input Group -->
  <div class="mb-3">
    <label for="inputGroupMergeEmail" class="form-label">E-Mail</label>

    <div class="input-group input-group-merge">
      <div class="input-group-prepend input-group-text" id="inputGroupMergeEmailAddOn">
        <i class="bi-envelope-open"></i>
      </div>
      <input name="email" type="email" class="form-control" value="<?=$row['email']?>" required id="inputGroupMergeEmail" placeholder="example@gmail.com" aria-label="example@gmail.com" aria-describedby="inputGroupMergeEmailAddOn">
    </div>
  </div>
  <!-- End Input Group -->

  <input type="submit" class="btn btn-primary" value="Сохранить" name="save">

</form>