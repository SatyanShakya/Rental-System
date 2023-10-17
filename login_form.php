<?php
session_start();


include('config.php');

if (isset($_POST['submit'])) {


   // $name = mysqli_real_escape_string($conn, $_POST['name']);  
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   //$cpass = md5($_POST['cpassword']); 
   //$user_type = $_POST['user_type']; 

   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);
   
   if (mysqli_num_rows($result) > 0) {
      //logged in 

      $row = mysqli_fetch_assoc($result);

      $_SESSION['allInfo'] = $row; 

      if ($row["user_type"] == "user") {

         //  echo"user";
         //$_SESSION['admin_name'] = $row['name'];

         header('location:cycle/main.php');

      } elseif ($row["user_type"] == "admin") {
         //echo"admin";
         header('location:dashboard/addcycle.php');

         
      }

   } else {
      // Logged in unsuccessfull
      $error[] = 'incorrect email or password!';
   }

}
;
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <script language="javascript" type="text/javascript">
      function preback() { window.history.forward(); }
      setTimeout("preback()", 0);
      window.onunload = function () { null };
   </script>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>

<body>

   <div class="form-container">

      <form action="" method="post">
         <h3>login now</h3>
         <?php
         if (isset($error)) {
            foreach ($error as $error) {
               echo '<span class="error-msg">' . $error . '</span>';
            }
            ;
         }
         ;
         ?>
         <input type="email" name="email" required placeholder="enter your email">
         <input type="password" name="password" required placeholder="enter your password">
         <input type="submit" name="submit" value="login" class="form-btn">
         <p>don't have an account? <a href="register_form.php">register now</a></p>
      </form>

   </div>

</body>

</html>