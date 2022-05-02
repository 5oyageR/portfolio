<?php include "template/header.php" ?>
<?php
if (isset($_REQUEST['submit'])) {
    include "core/datab.php";
    $result = saveUser($_REQUEST['email'], $_REQUEST['password']);
}
?>
<div class="container-fluid vh-100">
    <div class="" style="margin-top:200px">
        <div class="rounded d-flex justify-content-center">
            <div class="col-md-4 col-sm-12 shadow-lg p-5 bg-light">
                <div class="text-center">
                    <h3 class="text-primary">Create Account</h3>
                </div>
                <div class="p-4">
                    <form method="POST">
                        <div class="input-group mb-3">
                            <span class="input-group-text bg-primary"><i class="bi bi-person-plus-fill text-white"></i></span>
                            <input type="text" class="form-control" placeholder="Username">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text bg-primary"><i class="bi bi-envelope text-white"></i></span>
                            <input type="email" name="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="input-group mb-3">
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