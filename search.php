<?php include "template/header.php"?>
<form action="/search.php" method="get" class="d-flex" style="align-content: center;
    flex-direction: column;">
    <input name="search" type="search" value="<?php echo htmlspecialchars($_REQUEST['search']) ?>">
    <button class="btn btn-outline-success" type="submit">Поиск</button>
</form>
<?php include "sResult.php"?>
<?php include "template/footer.php"?>