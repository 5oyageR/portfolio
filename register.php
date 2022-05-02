<?php include "template/header.php" ?>
<?php
if (isset($_REQUEST['submit'])) {
  include "core/datab.php";
  $result = saveUser($_REQUEST['email'], $_REQUEST['password']);
}
?>
<div class="container text-center">
  <form method="POST">
    <div class="mt-3">
      <label for="exampleInputEmail1" class="form-label">Type your email</label>
      <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mt-3">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input type="password" name="password" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="mt-3">
      <label for="exampleInputPassword1" class="form-label">Repeat password</label>
      <input type="rep_password" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="mt-3 form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button type="submit" name="submit" class="btn btn-primary">Get Started</button>
  </form>
</div>

<?php include "template/footer.php" ?>