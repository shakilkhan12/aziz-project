<?php
include "./init.php";
if(isset($_SESSION['id'])){
    header('Location:profile.php');
}
$response;
if(isset($_POST['registerBtn'])){
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $response = register($name, $email, $password);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register user</title>
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="row align-items-center justify-content-center" style="height:100vh;"> 
        
         <div class="col-4">
          <div class="card">
          
          <div class="card-body">
          <form method="POST">
          <div class="mb-4">
          <h4>create new account</h4>
          </div>
          
          <?php if(is_array(@$response)): ?>
            <div class='alert alert-danger'>
               <?php foreach($response as $value): ?>
                 <?php echo $value; ?><br>
            <?php endforeach; ?>
            </div>
            <?php elseif(@$response == 'success'): ?>
            <?php header("Location: login.php"); ?>
         <?php endif; ?>
        
         <div class="mb-3">
          <input type="text" name="name" class="form-control" placeholder="Enter name..." value="<?php if(isset($name)): echo $name; endif; ?>">
         </div>
         <div class="mb-3">
          <input type="email" name="email" class="form-control" placeholder="Enter email..." value="<?php if(isset($email)): echo $email; endif; ?>">
         </div>
         <div class="mb-3">
          <input type="password" name="password" class="form-control" placeholder="Create password..." value="<?php if(isset($password)): echo $password; endif; ?>">
         </div>
         <div class="mb-3">
          <input type="submit" name="registerBtn" class="btn btn-primary" value="register">
         </div>
         <div class="mt-4">
         <a href="login.php">Already have an account</a>
         </div>
         </form>
          </div>
          </div>
         </div>
   </div>
</div>
</body>
</html>