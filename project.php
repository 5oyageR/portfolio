<?php include "template/header.php"?>
<?php if(isset($_REQUEST['id'])){
     if (isset($_REQUEST['edit'])&& isset($_REQUEST['submit']) ){
            $editProjectResult = editProjectResult($_REQUEST['id'], $_REQUEST['result']);
     }
     $project = getProject(htmlspecialchars($_REQUEST['id']));
} 
    ?>
    <?php if(isset($project)) { ?>
        <h3><?php echo $project['title']?><a href="/deleteproject.php?id=<?php echo $project['id_project']?>">Удалить</a></h3>
        <p><?php echo $project['theme']?></p>
        <b><?php echo $project['studentName']." ".$project['studentSurname']?></b>
        <?php if(!isset($_REQUEST['edit'])){ ?>
            <p>Оценка: <?php echo $project['result']?></p> <a href="/project.php?id=<?php echo $project['id_project']?>&edit=y"> Изменить оценку</a>
                <?php } else {?>
                    <form method="POST">
                    <select class="form-select" name="result" aria-label="Default select example">
            <option selected value="">Оценка</option>
            <?php foreach ([1, 2, 3, 4, 5] as $result){ ?>
                        <option <?php if($result==$project['result']){ echo "selected"; } ?> value="<?php echo $result ?>"><?php echo $result ?></option> 
                        <?php } ?>
            </select>
                    <button type="submit" name="submit" class="btn btn-primary">Сохранить</button>
                    <?php if(isset($editProjectResult)&& $editProjectResult){ echo "Оценка сохранена"; }  ?>
            </form>
            <?php }?>
    <?php }?>
<?php include "template/footer.php"?>