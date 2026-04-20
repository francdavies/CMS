<?php include "header.php";?>
<?php 
include "db.php";

// Handle signup form submission
if(isset($_POST['signup'])) {
    $user_firstname = $_POST['user_firstname'];
    $user_lastname = $_POST['user_lastname'];
    $user_role = $_POST['user_role'];

    // Handle image upload
    if(isset($_FILES['user_image']) && $_FILES['user_image']['error'] == 0 && !empty($_FILES['user_image']['name'])) {
        $user_image = $_FILES['user_image']['name'];
        $user_image_temp = $_FILES['user_image']['tmp_name'];
        move_uploaded_file($user_image_temp, "images/$user_image");
    } else {
        $user_image = 'default-avatar.png'; // Default image if none uploaded
    }

    $username = $_POST['username'];
    $user_email = $_POST['user_email'];
    $user_password = $_POST['user_password'];
    
    // Hash password for security
    $hashed_password = password_hash($user_password, PASSWORD_DEFAULT);

    $query = "INSERT INTO users(user_firstname, user_lastname, user_role, user_image, username, user_email, user_password) ";
    $query .= "VALUES('{$user_firstname}', '{$user_lastname}', '{$user_role}', '{$user_image}', '{$username}', '{$user_email}', '{$hashed_password}') ";

    $create_user_query = mysqli_query($connection, $query);

     if($create_user_query) {
        $success_message = "<div class='alert alert-success text-center'>Account created successfully! <a href='login-page.php'>Login here</a></div>";
    } else {
        $error_message = "<div class='alert alert-danger text-center'>Registration failed. Please try again.</div>";
    }
}
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style stylesheet="css">
  .bd-placeholder-img {
    font-size: 1.125rem;
    text-anchor: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    user-select: none;
  }

  @media (min-width: 768px) {
    .bd-placeholder-img-lg {
      font-size: 3.5rem;
    }
  }
  
  /* Center the form vertically */
  body {
    display: flex;
    align-items: center;
    min-height: 100vh;
  }
</style>

<div class="container">
  <div class="row">
    <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-3">

<?php
    if(isset($success_message)) {
      echo $success_message;
    }
    if(isset($error_message)) {
      echo $error_message;
    }
?>
      <!-- Sign Up Form -->
      <form action="signup.php" method="post" enctype="multipart/form-data">
        <h1 class="h3 mb-3 fw-normal text-center">Create Account</h1>

        <div class="form-group">
          <label for="user_firstname">First Name</label>
          <input type="text" class="form-control" id="user_firstname" name="user_firstname" placeholder="Enter first name" required>
        </div>

        <div class="form-group">
          <label for="user_lastname">Last Name</label>
          <input type="text" class="form-control" id="user_lastname" name="user_lastname" placeholder="Enter last name" required>
        </div>

        <div class="form-group">
          <label for="username">Username</label>
          <input type="text" class="form-control" id="username" name="username" placeholder="Choose a username" required>
        </div>

        <div class="form-group">
          <label for="user_email">Email Address</label>
          <input type="email" class="form-control" id="user_email" name="user_email" placeholder="name@example.com" required>
        </div>

        <div class="form-group">
          <label for="user_password">Password</label>
          <input type="password" class="form-control" id="user_password" name="user_password" placeholder="Create a password" required>
        </div>

        <div class="form-group">
          <label for="user_role">Role</label>
          <select class="form-control" id="user_role" name="user_role" required>
            <option value="">Select Role</option>
            <option value="subscriber">Subscriber</option>
            <option value="admin">Admin</option>
          </select>
        </div>

        <div class="form-group">
          <label for="user_image">Profile Image</label>
          <input type="file" class="form-control" id="user_image" name="user_image" accept="image/*">
          <small class="text-muted">Optional: Upload a profile picture</small>
        </div>

        <div class="checkbox mb-3">
          <label>
            <input type="checkbox" required> I agree to the Terms and Conditions
          </label>
        </div>

        <button class="w-100 btn btn-lg btn-primary" type="submit" name="signup">Sign Up</button>
        
        <p class="mt-3 text-center">
          Already have an account? <a href="login-page.php">Login</a>
        </p>

        <p class="mt-3 text-center">
          Back to <a href="../index.php">Home Page</a>
        </p>
        
        <p class="mt-5 mb-3 text-muted text-center"><?php include "footer.php";?></p>
      </form>
      
    </div>
  </div>
</div>