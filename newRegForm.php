<?php include "template/header.php" ?>
<?php
//$errors = [];
if (isset($_REQUEST['submit'])) {
    // if (!$_REQUEST['password'] || strlen($_REQUEST['password']) < 9) {
    //     $errors[] = 'type the password';
    // }
    // if (count($errors) == 0) {
    include "core/datab.php";
    // } else {
    $passSalt =  md5(md5('sonlnishko').htmlspecialchars($_REQUEST['password']));
    $result = saveUser(htmlspecialchars($_REQUEST['email']), ($passSalt));
    //}
}
?>
<div class="container-fluid vh-100">
    <div class="rounded" style="margin-top:80px">
        <div class="rounded d-flex justify-content-center">
            <div class="col-md-4 col-sm-12 shadow-lg p-5 bg-light">
                <div class="text-center">
                    <h3 class="text-primary">Create Account</h3>
                </div>
                <div class="p-4">
                    <form method="POST">
                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="bi bi-person-plus-fill text-white"></i></span>
                            <input type="text" class="form-control" placeholder="Username">
                        </div>
                        <div class="input-group mb-3 has-validation">
                            <span class="input-group-text bg-primary"><i class="bi bi-envelope text-white"></i></span>
                            <input type="email" name="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="input-group mb-3 has-validation">
                            <span class="input-group-text bg-primary"><i class="bi bi-key-fill text-white"></i></span>
                            <input type="password" name="password" class="form-control" placeholder="password">
                        </div>
                        <div class="d-grid col-12 mx-auto">
                            <button class="btn btn-primary" name="submit" type="submit">Get Started</button>
                        </div>
                        <p class="text-center mt-3">Already have an account?
                            <span class="text-primary">Sign in</span>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include "template/footer.php" ?>