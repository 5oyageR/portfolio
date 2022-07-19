<?php include "template/header.php"?>
<?php

 if(isset($_REQUEST["submit"])){
    $errors=[];
        if(!$_REQUEST["email"]){
                $errors[]="email";
        }
        if(!$_REQUEST["password"]){
            $errors[]="password";
            
         }
         if (count($errors)==0){
             $user = getUser(htmlspecialchars($_REQUEST["email"]));
             if ($user){
                    $password = md5(md5('sonlnishko').htmlspecialchars($_REQUEST['password']));
                    if ($password==$user['password']){
                        $_SESSION['user'] = $user;  
                    }
                    else{
                        $errors[]="badpassword";
                    }
             }else{
                 $errors[]="user";
             }
         }
         
 }
    $errorMsgs=[
        'email' => "incorrect email",
        'password' => "incorrect pass",
        'user' => "user not contains",
        'badpassword' => "wrong pass",
    ];

?>
<div class="container-fluid vh-100">
    <div class="rounded" style="margin-top:80px">
        <div class="rounded d-flex justify-content-center">
            <div class="col-md-4 col-sm-12 shadow-lg p-5 bg-light">
                <div class="text-center">
                    <h3 class="text-primary">Вход в систему</h3>
                </div>
                <div class="p-4">
                    <form method="POST">
                        <div class="input-group mb-3 has-validation">
                            <span class="input-group-text bg-primary"><i class="bi bi-envelope text-white"></i></span>
                            <input type="email" name="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="input-group mb-3 has-validation">
                            <span class="input-group-text bg-primary"><i class="bi bi-key-fill text-white"></i></span>
                            <input type="password" name="password" class="form-control" placeholder="Пароль">
                                    <div class="d-grid col-12 mx-auto">
                                    <button class="btn btn-primary" name="submit" type="submit">Войти</button>
                                    <?php if($errors){
                                        foreach($errors as $error) {
                                            echo $errorMsgs[$error]."<br>";
                                        }
                                    } ?>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include "template/footer.php"?>