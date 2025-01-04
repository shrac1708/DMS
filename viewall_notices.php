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
    
    <title>View Notices </title>
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
.fa{
    font-size: 20px;
    color: #7a797e;
    float: right;
}
h3
{
  font-family: Times New Roman;
  padding: 10px 20px;
  text-align: left;
  
}
h1{
  font-family: galada;
  padding: 10px 20px;
  text-align: center;
}


    </style>
</head>
<body>
  
     <!-- Header -->
     <?php
            include 'header.php';
        ?>
    <!-- Header End -->
    <h1>Notices<br></h1>
    <hr class="black">
    
<h3>
    <?php
    
        
    $conn = mysqli_connect("localhost", "root", "", "noticeb");
    $sql = "SELECT id, noticed, date1 FROM Persons";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo $row["date1"]." : Notice           : " . $row["noticed"]. "<br>";
}
} else {
echo "0 results";
}

   
    mysqli_close($conn);

?>
</h3>




   

 <!-- Main End -->
 <hr class="black">
    <!-- Footer -->
    <?php
        include 'footer.php';
    ?>
    <!-- Footer End -->

</body>
</html>