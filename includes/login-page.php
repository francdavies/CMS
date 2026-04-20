<?php include "header.php";?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <style stylesheet="css">
  /* Center the form vertically */
  body {
    display: flex;
    align-items: center;
    min-height: 100vh;
  }
    </style>
    
    <!-- Login -->
    <div class="container">
  <div class="row">
    <!-- Adjust the col-md-X value to control width -->
    <!-- col-md-4 = narrower, col-md-6 = medium, col-md-8 = wider -->
    <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
      
      <!-- Login -->
      
      <h1 class="h3 mb-4 fw-normal text-center">Login to Admin</h1>
      <form action="login.php" method="post">
        <div class="form-floating mb-3">
          <input name="username" type="text" class="form-control" id="floatingInput" placeholder="username">
          <label for="floatingInput">Username</label>
        </div>
        <div class="form-floating mb-3">
          <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
          <label for="floatingPassword">Password</label>
        </div>

        <div class="checkbox mb-3">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="w-100 btn btn-lg btn-primary" name="login" type="submit">Sign in</button>
        <p class="mt-3 text-center">
          Don't have an account? <a href="signup.php">Sign up</a>
        </p>

        <?php include "footer.php";?>
      </form>
      
    </div>
  </div>
</div>

</div>