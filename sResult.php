<?php 
        if(isset($_REQUEST['search'])){
            $searchString = htmlspecialchars($_REQUEST['search']);
            if (strlen($searchString)==0){
                echo "Задан пустой поисковый запрос";
            } else {
                $searchResults = search($searchString);
            }
        } 
?>
    <?php if (isset($searchResults)){ ?>
        <ol class="list-group list-group-numbered col-sm-6">
            <?php foreach ($searchResults as $searchResult) {?>
                <li class="list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto">
                <div class="fw-bold">  <a href="/project.php?id=<?php echo $searchResult['id_project'] ?>"><?php echo $searchResult['title']?></a> </div>
                <div> <?php echo $searchResult['theme']?></div>
            </div>
        </li>
                <?php }?>
                </ol>
    <?php }?>

