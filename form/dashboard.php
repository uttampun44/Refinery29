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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
   
</head>
<body>
    <nav>
        <div class="logo">
            <img src="../img/logo-removebg-preview.png">
            <a href="#"><i class="fa fa-bars" aria-hidden="true" id="hamburger"></i></a>
        </div>
        <div class="nav-sign-out">
            <input type="text" placeholder="search" id="search-box">
            <a href="#"><i class="fa fa-search" aria-hidden="true" id="search"></i></a>
            <a href="#"><i class="fa fa-sign-out" aria-hidden="true"></i></a>
        </div>
    </nav>
    <main>
        <div class="side-bar">
           <ul>
           <li><a href="#" id="dashboard"><i>Dashboard</i></a></li>
            <li><a href="#" id="checkforms"><i>Check Form Details</i></a></li>
            <li><a href="#" id="message"><i>Message</i></a></li>
           </ul>
        </div>
        <div class="form-message">
            <div class="form-section">
                <a href="#"><i class="fa fa-wpforms" aria-hidden="true"></i></a>
                <h1>Total Form submit</h1>

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
                    <th>Delete</th>
                    <th>Update</th>
                </tr>
                <?php 
                 include "connection.php";
            
                 $displaytable = "SELECT *FROM courseform";
                 $sql_data = mysqli_query($database_connection, $displaytable);
                
                 while($dataresult = mysqli_fetch_assoc($sql_data)){   

                ?>
                <tr>
                    <td><?php echo $dataresult['ID']?></td>
                    <td><?php echo $dataresult['FullName']?>
                    <td><?php echo $dataresult['Email']?></td>
                    <td><?php echo $dataresult['Course']?></td>
                    <td><?php echo $dataresult['Gender']?></td>
                    <td><?php echo $dataresult['Phone']?></td>
                    <td><?php echo $dataresult['Address']?></td>
                    <td><a href="#"><i class="fa fa-trash"></i></a></td>
                    <td><a href="#"><i class="fa fa-edit"></i></a></td>
                </tr>
                <?php } ?>
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

    </main>

     <script type="text/javascript">
      
    //   -----------form details-------------
      $('#checkforms').click(function(){
       $('.form-details').show();
        $('.form-message').hide();
      });

    //    --------------------dashboard----------------
      $('#dashboard').click(function(){
        $('.form-message').show();
        $('.form-details').hide();
      })

    //   ------------search button-------------
      $('#search').click(function(){
        $('#search-box').toggle();
      })

      $('#hamburger').click(function(){
        $('.side-bar').toggle();
        // $('.side-bar').width("slide,[width:100vw]");
      })
      
     </script>
</body>
</html>