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
.image-container {
  width: 100%;
  text-align: center;
  display: flex;
  justify-content: center;
}

.scrollable-images {
  display: flex;
  overflow-x: auto;
  gap: 10px;
  transition: 700ms cubic-bezier(0.075, 0.02, 0.165, 1);
  transform-origin: center;
}

.scrollable-images img {
  height: 450px;
  object-fit: cover;
  flex-shrink: 0;
}

/* Add scrollbar */
.scrollable-images::-webkit-scrollbar {
  width: 200px;
  height: 10px;
}

.scrollable-images::-webkit-scrollbar-thumb {
  background-color: #ccc;
  border-radius: 5px;
}

.scrollable-images::-webkit-scrollbar-track {
  background-color: transparent;
}
    </style>
</head>
<body>
<hr class="black">

  
     <!-- Header -->
     <?php
            include 'header.php';
        ?>
    <!-- Header End -->
    <h1>Arts made by Students<br></h1>
    <hr class="black">

	<div class="image-container">
	<div class="scrollable-images">
  <img src="images/a1.jpg" alt="a1" width="600px" height="400px">
  <img src="images/a2.jpg" alt="a2" width="600" height="400">
  <img src="images/a3.jpg" alt="a3" width="600" height="400">
  <img src="images/a4.jpg" alt="a4" width="600" height="400">
  <img src="images/a5.jpg" alt="a5" width="600" height="400">
  <img src="images/a6.jpg" alt="a6" width="600" height="400">
  <img src="images/a7.jpg" alt="a7" width="600" height="400">
</div>
</div>
  

 <!-- Main End -->
 <hr class="black">
    <!-- Footer -->
    <?php
        include 'footer.php';
    ?>
    <!-- Footer End -->

</body>
</html>