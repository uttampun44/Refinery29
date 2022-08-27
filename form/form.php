<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../css/index.css" type="text/css">
    <title>Form</title>
</head>
<body>
    <div class="formdesign">
   
        <div class="form">
        <img src="../img/logo-removebg-preview.png">
        <label id="techin">TechnIn</label>
        <!-- ------------login form------------ -->
           <form class="forms" method="POST">
        <label>Username:</label>
            <input type="text" placeholder="Username" required = true name="username">
       <br>
       <label>Password:</label>
        <input type="password" placeholder="Password" required= true id="password" name="password">
        <br>
        <button id="sign" name="login" onclick= "return Dashboard()">Log In</button>
        <a href="#" >Forgot Your Password</a>
        <br>
        <a href="#" name="sign">Sign In</a>
        </form>
            </div>
   </div>

   <?php 

      if(isset($_POST['login'])){  
        $username = $_POST['username'];
        $password = $_POST['password']; 
         if(($username == "admin") && ($password == "techin")){
           
            header('location: dashboard.php');
         }else{
            
         }
      }
    
   ?>
   <script type="text/javascript">
    function Dashboard(){
        alert("Login Successful");
        return true;
    }
   </script>
</body>
</html>