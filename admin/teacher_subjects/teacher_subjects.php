<div class="page-header">
  <h1 class="page-header-title">Предметы учителей</h1>
</div>


<div class="card">
    <div class="card-body">
        <form action="index.php">
            <div class="row">
                <input type="hidden" name="page" value="teacher_subjects">
                <div class="col-10">
                <select name="form-select" name="teacher_id" id="">
                    <?php
                    
                    $query="SELECT * FROM users WHERE role='teacher';";
                    $res=mysqli_query($conn, $query);
                    while($row= mysqli_fetch_assoc($res))
                    {
                    ?>
                    <option value="<?=$row['id']?>"><?=$row['full_name'];?></option>
                    <?php
                    }
                    ?>
                </select>        
                </div>
                <div class="col-2">
                    <input type="submit" value="Открыть" class="btn btn-primary">
                </div>
            </div>
        </form>  
        <?php
        $query="SELECT * FROM subjects;";
        $res=mysqli_query($conn, $query);
        while($row= mysqli_fetch_assoc($res))
        {

        ?>
        <input type="checkbox" value="<?=$row['id'];?>">
        <label for=""><?=$row['title']?></label>

        <?php
        }
        ?>
        
    </div>
</div>
