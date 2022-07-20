<?php
include_once "core/datab.php";
    if(isset($_REQUEST['id'])) {
        if (deleteProject(htmlspecialchars($_REQUEST['id']))) {
            echo "Project deleted";
        } else {
            echo "deleting error";
        }
    }

?>
<a href="/">Home</a>