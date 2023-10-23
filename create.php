<?php
  include "config.php";

  if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $position = $_POST['position'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];

    $qry = "INSERT INTO employee(name, position, email, mobile) VALUES('$name','$position','$email','$mobile');";
  
    $result = $conn->query($qry);

    if($result == true){
      echo "<h3>successful registration!</h3>";
    }else{
      echo '<h3>Error when registering data!</h3> <br>'. $conn->error;
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
        <input type="text" name= "name" placeholder="name"></input>
      </div>

      <div class="data-holder">
        <label>Position</label> <br>
        <input type="text" name= "position" placeholder="position"></input>
      </div>

      <div class="data-holder">
        <label>Email</label> <br>
        <input type="text" name= "email" placeholder="email"></input>
      </div>

      <div class="data-holder">
        <label>Mobile</label> <br>
        <input type="text" name= "mobile" placeholder="moblie"></input>
      </div>
    </div>

    <footer class="button-holder">
      <button name= "submit" value = "submit" class= "register">Register emloyee</button>
      <button class= "exit"><a href="Index.php">Back</a></button>
      <?php
        
      ?>
    </footer>
  </form>
</body>
</html>