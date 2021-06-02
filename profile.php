<?php
include "./init.php";
if(!isset($_SESSION['id'])){
    header('Location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
</head>
<body>
<?php include_once "./components/nav.php";  ?>
</body>
</html>