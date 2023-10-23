<?php
  include "config.php";

  //delete by id
  if(isset($_GET['id'])){
    $id =$_GET['id']; 
    $qry = "DELETE FROM employee WHERE id=$id";

    $result = $conn->query($qry); 
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles/delete.css">
  <title>Delete</title>
</head>
<body>
  <div class="container">
    <?php
    //show if the delete was successful or not
      if($result== true){
        echo '<h1>Data deleted successfully!</h1>';
      }
      else{
        echo '<h1>Error when deleting data!</h1> <br>'. $conn->error;
      }
    ?>
    
    <a href="Index.php"> Back</a>
  </div>
</body>
</html>