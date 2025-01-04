<?php
    if (isset($_POST['submit'])) {
        $data = $_POST['w3review'];
        $conn = mysqli_connect("localhost", "root", "", "noticeb");
        $now=date('Y/m/d');
        $sql = "INSERT INTO Persons (noticed, date1) VALUES ('$data','$now')";
        mysqli_query($conn, $sql);
        echo '<script>alert("Notice Sent Successfully.")</script>'; 
        mysqli_close($conn);
    }
?>
<?php
    session_start();
    include "db_conn.php";
    if(isset($_SESSION['w3review'])){
        header('location:admindash.php');
    }

    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Add Notice |Devise & Sight Notices </title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="bootstrap/js/jquery-3.5.1.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
       <link rel="stylesheet" href="style.css">
    <style>
                .btn{
  background-color:slategray; 
  border: none;
  color: black;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  font-family: georgia;
  margin: 4px 2px;
  cursor: pointer;
  font-weight: bolder;
  -webkit-transition-duration: 0.4s;
  transition-duration: 0.4s;
  height: -30px;
  width: 160px;
        }
        .btn:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
  color: white;
  background-color: green;
}
.panel
{
      box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
.fa{
    font-size: 20px;
    color: #7a797e;
    float: right;
}
h2
{
  font-family: galada;
}


    </style>
</head>
<body>
     <!-- Header -->
     <?php
            include 'header.php';
        ?>
    <!-- Header End -->

    <form  action="admindash.php" method="POST">
  
                 
                     
                            
                               <a href="admindash.php"><button type="button" name="close" class="btn" data-toggle="tooltip"  title="Goto Dashboard.">Go to Dashboard</button></a></center>
                       
                        </form>

 <!-- Main End -->
 <hr class="black">
    <!-- Footer -->
    <?php
        include 'footer.php';
    ?>
    <!-- Footer End -->

</body>
</html>