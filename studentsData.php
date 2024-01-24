<?php
require_once __DIR__. '/connection.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- bootstrap -->
    <title>students table</title>
</head>
<body>
<table class="table table-dark table-striped">
<thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">name</th>
      <th scope="col">address</th>
      <th scope="col">phone</th>
      <th scope="col">email</th>
      <th scope="col">website</th>
      <th scope="col">head of department</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    $sql = 'SELECT * FROM `departments`';
    $result = $conn->query($sql);
    if ($result && $result->num_rows > 0) { 
            while ($row = $result->fetch_assoc()) { 
    ?>
    <tr>
      <td><?php echo $row['id']; ?></td>
      <td><?php echo $row['name']; ?></td>
      <td><?php echo $row['address']; ?></td>
      <td><?php echo $row['phone']; ?></td>
      <td><?php echo $row['email']; ?></td>
      <td><?php echo $row['website']; ?></td>
      <td><?php echo $row['head_of_department']; ?></td>
    </tr>
    <?php
        }
        }else if($result) {
            echo "0 results";
        } else {
            echo "query error";
        }

        $conn->close();
    ?>
  </tbody>
</table>
</body>
</html>