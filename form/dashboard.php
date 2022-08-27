<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechIn</title>
    <!-- linking font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- linking google font -->
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <!-- stylesheet -->
    <link rel="stylesheet" href="../css/dashboard.css">
</head>
<body>
    <nav>
        <div class="logo">
            <img src="../img/logo-removebg-preview.png">
            <a href="#"><i class="fa fa-bars" aria-hidden="true"></i></a>
        </div>
        <div class="nav-sign-out">
            <input type="text">
            <a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-sign-out" aria-hidden="true"></i></a>
        </div>
    </nav>
    <main>
        <div class="side-bar">
           <ul>
            <li><a href="#"><i>Check Form Details</i></a></li>
            <li><a href="#"><i>Message</i></a></li>
           </ul>
        </div>
        <div class="form-message">
            <div class="form-section">
                <a href="#"><i class="fa fa-wpforms" aria-hidden="true"></i></a>
                <h1>Total Form Submit</h1>
            </div>
            <div class="message-section">
            <a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a>
                <h2>Total Message</h2>
            </div>
        
        </div>
      
        <div class="form-details">
          <div class="form-table">
            <table>
                <tr>
                    <th>ID</th>
                    <th>FullName</th>
                    <th>Email</th>
                    <th>Course</th>
                    <th>Gender</th>
                    <th>Phone</th>
                    <th>Address</th>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
          </div>
        </div>

        <div class="message-show">
          <div class="child-message-show">
             <ul>
                <li><p></p></li>
                <li><p></p></li>
             </ul>
          </div>
        </div>

        <?php
        include 'connection.php'; 
        ?>
    </main>
</body>
</html>