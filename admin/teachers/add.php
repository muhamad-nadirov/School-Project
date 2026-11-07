<form action="?page=insertTeacher" method="post">
    <!-- Full Name -->
    <div class="mb-3">
    <label for="inputGroupMergeFullName" class="form-label">ФИО</label>

    <div class="input-group input-group-merge">
        <div class="input-group-prepend input-group-text" id="inputGroupMergeFullNameAddOn">
        <i class="bi-person"></i>
        </div>
        <input name="full_name" type="text" class="form-control" id="inputGroupMergeFullName" placeholder="Имя Фамилия" aria-label="Имя Фамилия" aria-describedby="inputGroupMergeFullNameAddOn">
    </div>
    </div>
    <!-- Full Name -->

    <!-- E-Mail -->
    <div class="mb-3">
    <label for="inputGroupMergeEmail" class="form-label">E-Mail</label>

    <div class="input-group input-group-merge">
        <div class="input-group-prepend input-group-text" id="inputGroupMergeEmailAddOn">
        <i class="bi-envelope-open"></i>
        </div>
        <input name="email" type="text" required class="form-control" id="inputGroupMergeEmail" placeholder="mark@example.com" aria-label="mark@example.com" aria-describedby="inputGroupMergeEmailAddOn">
    </div>
    </div>
    <!-- End Input Group -->

    <!-- Input Group -->
    <div class="mb-3">
    <label for="inputGroupMergeFullName" class="form-label">Пароль</label>

    <div class="input-group input-group-merge">
        <input name="password_hash" type="password" required class="form-control" id="inputGroupMergeFullName" aria-describedby="inputGroupMergeFullNameAddOn">
    </div>
    </div>
    <!-- End Input Group -->

    <!-- Input Group -->
    <div class="mb-3">
    <label for="inputGroupMergeGenderSelect" class="form-label">Класс</label>

    <div class="input-group input-group-merge">
        <div class="input-group-prepend input-group-text">
        <i class="bi-house"></i>
        </div>
        <select name="class_id" id="inputGroupMergeGenderSelect" class="form-select">
            <?php 
                $query = "SELECT * FROM classes";
                $result = mysqli_query($conn, $query);
                while ($row = mysqli_fetch_assoc($result)):
            ?>
                <option value="<?=$row['id']?>"> <?=$row['title']?> </option>
            <?php endwhile; ?>
        </select>
    </div>
    </div>
    <!-- End Input Group -->

    <input class="btn btn-primary" type="submit" value="Сохранить" name="save">
</form>