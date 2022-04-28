                                              <?php include "template/header.php"?>
                                              <?php include "core/datab.php"?>

      <?php 
      $email = $_POST['email'];
      $password = $_POST['password'];
      mysqli_query($pdo, query:"INSERT INTO `user` (`id`, `login`, `password`) VALUES ('', '$email', '$password')")
      ?>

                <form action="/home.php" method="POST">
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Type your email</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Repeat password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                  </div>
                  <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div>
                  <button type="submit" class="btn btn-primary">Get Started</button>
                </form>




<?php include "template/footer.php"?>