<?php

include 'connect.php';

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="newdisplay.css">

  <title>Application Form</title>
</head>

<body>

  <div class="container">

    </button>
    <table class="content-table">
      <thead>
        <tr class="content-table">

          <th scope="col">id</th>
          <th scope="col">firstname</th>
          <th scope="col">lastname</th>
          <th scope="col">middlename</th>
          <th scope="col">age</th>
          <th scope="col">address</th>
          <th scope="col">year enrolled</th>
          <th scope="col">Course</th>
          <th scope="col">email</th>
          <th scope="col">operation</th>
        </tr>
      </thead>
      <tbody>

        <?php


        $sql = "select * from `stutable`";
        $result = mysqli_query($con, $sql);
        if ($result) {
          while ($row = mysqli_fetch_assoc($result)) {
            $id = $row['id'];
            $firstname = $row['firstname'];
            $lastname = $row['lastname'];
            $middlename = $row['middlename'];
            $age = $row['age'];
            $address = $row['address'];
            $dob = $row['dob'];
            $section = $row['section'];
            $email = $row['email'];

            echo '<tr clas>
        <th scope="row">' . $id . '</th>
        <td>' . $firstname . '</td>
        <td>' . $lastname . '</td>
        <td>' . $middlename . '</td>
        <td>' . $age . '</td>
        <td>' . $address . '</td>
        <td>' . $dob . '</td>
        <td>' . $section . '</td>
        <td>' . $email . '</td>
        <td class="btnbtn">
      
        <button class="btnbtn" ><a href="update.php?updateid=' . $id . '" class="btnbtn">Update</a></button>
        <button class="btnbtn" ><a href="delete.php?deleteid=' . $id . '" class="btnbtn">Delete</a></button>

        
        </td?

        </tr>';
          }
        }

        ?>


      </tbody>
    </table>
  </div>
  <center> <button class="btn"> <a href="user.php" class="text-light">Add Student</a>
      <button class="btn"> <a href="index.html" class="text-light">Home</a></center>

</body>

</html>