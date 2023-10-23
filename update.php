<?php
  include "config.php";

  if(isset($_GET['id'])){
    $id =$_GET['id']; 
    $qry = "SELECT * FROM employee WHERE id=$id";

    $result = $conn->query($qry);
    if ($result->num_rows > 0) {
      //writing out each record as a table row
      $row = $result->fetch_assoc();
    }
  }

  if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $position = $_POST['position'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];

    $qry = "UPDATE employee SET name= '$name', position='$position', email='$email', mobile='$mobile' WHERE id=$id;";
  
    $result = $conn->query($qry);

    if($result == true){
      echo "<h3>Data updated successfully!</h3>";
    }else{
      echo '<h3>Error when updating data!</h3> <br>'. $conn->error;
    }
  }
?>  

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles/create.css">
  <title>Create</title>
</head>
<body>
  <form class="container" method="POST">
    <h2>Register new user</h2>

    <div class="holders">
      <div class="data-holder">   
        <label>Name</label> <br>
        <input type="text" name= "name" placeholder="name" value="<?php echo $row['name']?>"></input>
      </div>

      <div class="data-holder">
        <label>Position</label> <br>
        <input type="text" name= "position" placeholder="position" value="<?php echo $row['position']?>"></input>
      </div>

      <div class="data-holder">
        <label>Email</label> <br>
        <input type="text" name= "email" placeholder="email" value= <?php echo $row['email'] ?>></input>
      </div>

      <div class="data-holder">
        <label>Mobile</label> <br>
        <input type="text" name= "mobile" placeholder="moblie" value= <?php echo $row['mobile'] ?>></input>
      </div>
    </div>

    <footer class="button-holder">
      <button name= "submit" value = "submit" class= "register">Update data</button>
      <button class= "exit"><a href="Index.php">Back</a></button>
      <?php
        
      ?>
    </footer>
  </form>
</body>
</html>