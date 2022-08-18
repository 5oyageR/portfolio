<?php include "template/header.php" ?>
<?php
//$errors = [];
if (isset($_REQUEST['submit'])) {
    $passSalt =  md5(md5('sonlnishko').htmlspecialchars($_REQUEST['password']));
    $result = saveUser(htmlspecialchars($_REQUEST['email']), $passSalt);

}
?>
<div class="container-fluid vh-100">
    <div class="rounded" style="margin-top:80px">
        <div class="rounded d-flex justify-content-center">
            <div class="col-md-4 col-sm-12 shadow-lg p-5 bg-light">
                <div class="text-center">
                    <h3 class="text-primary">Регистрация</h3>
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
                        </div>
                        <div class="input-group mb-3 has-validation">
                            <span class="input-group-text bg-primary"><i class="bi bi-key-fill text-white"></i></span>
                            <input type="password" name="password" class="form-control" placeholder="Пароль еще раз">
                        </div>
                        <div class="d-grid col-12 mx-auto">
                            <button class="btn btn-primary" name="submit" type="submit">Зарегестироваться</button>
                        </div>
                        <p class="text-center mt-3">Уже есть аккаунт?
                        <a href="/signinform.php"> <span class="text-primary">Войти</span></a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include "template/footer.php" ?>