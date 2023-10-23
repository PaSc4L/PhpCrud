<?php
  include "config.php";

  $qry = "SELECT * FROM employee";

  $result = $conn->query($qry);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://kit.fontawesome.com/c569cdac78.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="styles/style.css">
  <title>Employees</title>
</head>
<body>
  <table>
    <div class = "container">
    <thead>
      <tr>
        <th>id</th>
        <th>name</th>
        <th>position</th>
        <th>email</th>
        <th>mobile</th>
        <th>
          <a href = "add_user.php"><i class="fa-solid fa-plus add"></i></a>
        </th>
      </tr>
    </thead>
    <tbody>
    <?php
          if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
        ?>
        <tr>  
          <td><?php echo $row['id']?></td>
          <td><?php echo $row['name']?></td>
          <td><?php echo $row['position']?></td>
          <td><?php echo $row['email']?></td>
          <td><?php echo $row['mobile']?></td>
          <td>
            <a href = "#">
              <i class="fa-solid fa-pen-to-square edit"></i>
            </a> 
            <a href = "delete_user.php?id=<?php echo $row['id']; ?>">
              <i class="fa-solid fa-trash delete"></i>
            </a>
          </td>
        </tr>
        <?php       
            }
          }
          else{
        ?>
        <tr>
          <td colspan="6"><?php echo "No data to showcase"?></td>
        </tr>
        <?php
          }
        ?>
    </tbody>
  </table>
</body>
</html>