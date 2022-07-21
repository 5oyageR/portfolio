<?php include "template/header.php" ?>
<?php 
    $students=getStudents();
        if(isset($_REQUEST['submit'])) {
                $requiredFields = ['title', 'theme', 'result', 'id_student'];
                    foreach ($requiredFields as  $requiredField){
                            if(!$_REQUEST[$requiredField]) {
                                    $errors[] = $requiredField;
                            }
                    }   
                    if (!isset($errors)) {
                        $addProject = addProject($_REQUEST);
                    }
        }
    ?>
<form method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Title</label>
    <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
    <div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Theme</label>
  <textarea class="form-control" name="theme" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>
            <select class="form-select" name="result" aria-label="Default select example">
            <option selected value="">Оценка</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            </select>

                        <select class="form-select" name="id_student" aria-label="Default select example">
                        <option selected value="">Студент</option>
                        <?php foreach ($students as $student){ ?>
                        <option value="<?php echo $student['id_student']?>"><?php echo $student['name']." ".$student['surname'] ?></option> 
                        <?php } ?>
                        </select>
                        
  <button type="submit" name="submit" class="btn btn-primary">Добавить</button>
  <?php 
            if (isset($errors)){
                echo "Заполните поля: ".implode(", " , $errors);
            }
    ?>
</form>


<?php include "template/footer.php" ?>