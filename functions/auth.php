<?php 
function register($name, $email, $password) {
      global $conn;
      $errors = [];
      if($name == ''){
         array_push($errors, 'Name is required');
      }
      if($email == ''){
        array_push($errors, 'Email is required');
     } else {
        try {
            $stmt = $conn->prepare("SELECT * FROM users WHERE email=?");
            $stmt->execute([$email]); 
            if($stmt->rowCount() > 0){
                array_push($errors, $email.' is already exist');
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
     }
     if($password == ''){
        array_push($errors, 'Password is required');
     } else if(strlen($password) < 5) {
         array_push($errors, 'Password should be 6 characters long');
     }
     if(count($errors) == 0){
      $password = password_hash($password, PASSWORD_DEFAULT);
       $query = $conn->prepare("INSERT INTO users (name, email, password) VALUES (?,?,?)");
      if($query->execute([$name, $email, $password])){
         $_SESSION['msg'] = 'Your account has been created';
         return 'success';
      }
     } else {
        return $errors;
     }
}

function login($email, $password){
   global $conn;
      $errors = [];
      if($email == ''){
         array_push($errors, 'Email is required');
      }
      if($password == ''){
         array_push($errors, 'Password is required');
      }
      if($email != '' && $password != ''){
         $query = $conn->prepare("SELECT * from users WHERE email = ?");
         $query->execute([$email]);
         if($query->rowCount() > 0){
           $user = $query->fetch(PDO::FETCH_OBJ);
           $dbPassword = $user->password;
           if(password_verify($password,$dbPassword)){
             $_SESSION['id'] = $user->id;
             $_SESSION['name'] = $user->name;
             header('Location:profile.php');
           } else {
              array_push($errors, "Passwrod not matched");
           }
         } else {
            array_push($errors, 'Email not found');
         }
      }
      if(count($errors) == 0){
        
      } else {
         return $errors;
      }
}
