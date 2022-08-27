<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register for course</title>

    <!-- *******************linking css************************** -->
    <link rel="stylesheet" href="../css/refinery.css">
     
    <!-- *****************linking javascript code********************** -->
</head>
<body>
    <main>
        <div class="forms">
            <div class="course-registeration">
                <h1 id="course-enroll">Course Enrollment</h1>
                <form class="main-form" method="POST" action="signup.php" >
                    <label>FullName:</label>
                    <input type="text" placeholder="FullName:" require id="fullname" name="fullname">
                    <br>
                    <label>Email:</label>
                    <input type="email" placeholder="Email:" require id="email" name="email">
                    <br>
                    <div class="course">
                  <label>Course:</label>  <select id="course-option" name="course">
                        <option>Web Designer</option>
                        <option>Web Developer</option>
                        <option>Backend Developer</option>
                        <option>Front End Developer</option>
                        <option>FullStack Developer</option>
                        <option>MERN Stack Developer</option>
                    </select>
                     </div>

                     <div class="gender">
                       <label>Gender:</label>
                      Male <input type="radio" name="gender" value="male">
                      Female <input type="radio" name="gender" value="female">
                     </div>
                     <label>Phone:</label>
                     <input type="text" placeholder="PhoneNumber" require id="phonenumber" name="phone">
                     <br>
                     <label>Address:</label>
                     <input type="text" placeholder="Address" require id="address" name="address">
                     <br>
                     <button name="submit" id="submit" name="submit" onclick="return refresh() ">Submit</button>
                </form>
             
            </div>
        </div>
        <!-- ********************php form submitting******************** -->

                <!-- **************including database connection ********** -->
                <?php 
    
    include "connection.php";

      if(isset($_POST['submit'])){
         $fullname = mysqli_real_escape_string($database_connection, $_POST['fullname']);  
         $email = mysqli_real_escape_string($database_connection, $_POST['email']);
         $course = mysqli_real_escape_string($database_connection, $_POST['course']);
         $gender = mysqli_real_escape_string($database_connection, $_POST['gender']);
         $phone = mysqli_real_escape_string($database_connection, $_POST['phone']);
         $address = mysqli_real_escape_string($database_connection, $_POST['address']);
      
      $sqlquery = "INSERT INTO courseform(FullName, Email, Course, Gender, Phone, Address)VALUES('$fullname', '$email', '$course', '$gender', '$phone', '$address')";
       $data_insert = mysqli_query($database_connection, $sqlquery);
     
       if($data_insert){
        header('location: signup.php');
      }else{
        ?>
          <script>
          
            </script>
        <?php
        }
      }
    ?>
    </main>
    <script type="text/javascript">
     
     function refresh(){
      alert("Data Inserted Successfull")
      return true;
     }
    </script> 
</body>
</html>
