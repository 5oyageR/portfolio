<?php include "template/header.php"?>
<?php if(isset($_REQUEST['id'])){
    $project = getProject(htmlspecialchars($_REQUEST['id']));
} 
    ?>
    <?php if(isset($project)) { ?>
        <h3><?php echo $project['title']?><a href="/deleteproject.php?id=<?php echo $project['id']?>">Удалить</a></h3>
        <p><?php echo $project['theme']?></p>
        <b><?php echo $project['studentName']." ".$project['studentSurname']?></b>
        <p>Оценка: <?php echo $project['result']?></p>
    <?php }?>
<?php include "template/footer.php"?>