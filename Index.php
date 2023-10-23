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
  <div class = "container">
    <table>
      <thead>
        <tr>
          <th>id</th>
          <th>name</th>
          <th>position</th>
          <th>email</th>
          <th>mobile</th>
          <th>
            <a href = "create.php"><i class="fa-solid fa-plus add"></i></a>
          </th>
        </tr>
      </thead>
      <tbody>
      <?php
            //going trough each record
            if ($result->num_rows > 0) {
              //writing out each record as a table row
              while ($row = $result->fetch_assoc()) {
          ?>
          <tr>  
            <td><?php echo $row['id']?></td>
            <td><?php echo $row['name']?></td>
            <td><?php echo $row['position']?></td>
            <td><?php echo $row['email']?></td>
            <td><?php echo $row['mobile']?></td>
            <td>
              <!-- adding id when clicking on the current row -->
              <a href = "update.php?id=<?php echo $row['id']; ?>">
                <i class="fa-solid fa-pen-to-square edit"></i>
              </a> 
              <a href = "delete.php?id=<?php echo $row['id']; ?>">
                <i class="fa-solid fa-trash delete"></i>
              </a>
            </td>
          </tr>
          <?php       
              }
            }else{
              //if there is no data to output, write it out
          ?>
          <tr>
            <td colspan="6"><?php echo "No data to showcase"?></td>
          </tr>
          <?php
            }
          ?>
      </tbody>
    </table>
  </div>
</body>
</html>