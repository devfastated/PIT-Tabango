<?php

include 'connect.php';
$id=$_GET['updateid'];
$sql="select * from `stutable` where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$firstname=$row['firstname'];
$lastname=$row['lastname'];
$middlename=$row['middlename'];
$age=$row['age'];
$address=$row['address'];
$dob=$row['dob'];
$section=$row['section'];
$email=$row['email'];


if(isset($_POST['submit'])){
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $middlename=$_POST['middlename'];
    $age=$_POST['age'];
    $address=$_POST['address'];
    $dob=$_POST['dob'];
    $section=$_POST['section'];
    $email=$_POST['email'];

    $sql="update `stutable` set firstname='$firstname',lastname='$lastname',middlename='$middlename',age='$age',address='$address',dob='$dob',section='$section',email='$email' where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){    
       // echo "Data inserted Successfully";
       header('location:display.php');
    }else{
        die(mysqli_error($con));
    }
}

?>

<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Update Student</title>
</head>

<body>
<button class=""> <a href="index.html " class="text-light">Home</a> 
    <div class="container myx-5" style="background-color: gray; "  >
    <form method="post">
        <div class="form-group">
            <label for="exampleInputEmail1">First Name</label>
            <input type="text" class="form-control"  placeholder="Enter First Name" name="firstname" autocomplete="off" value="<?php echo $firstname;?>" >
         </div>
         <div class="form-group">
            <label for="exampleInputEmail1">Last Name</label>
            <input type="text"  placeholder="Enter Last Name" name="lastname" autocomplete="off" value="<?php echo $lastname;?>" >
         </div>
         <div class="form-group">
            <label for="exampleInputEmail1">Middle Name</label>
            <input type="text"  placeholder="Enter Middle Name" name="middlename" autocomplete="off" value="<?php echo $middlename;?>" >
         </div>
         <div class="form-group">
            <label for="exampleInputEmail1">Age</label>
            <input type="text"  placeholder="Enter Age" name="age" autocomplete="off" value="<?php echo $age;?>">
         </div>
         <div class="form-group">
            <label for="exampleInputEmail1">Address</label>
            <input type="text"  placeholder="Enter Address" name="address" autocomplete="off" value="<?php echo $address;?>">
         </div>
         <div class="form-group">
            <label for="exampleInputEmail1">Year Enrolled</label>
            <input type="date"  placeholder="Enter Year Enrolled" name="dob" autocomplete="off" value="<?php echo $dob;?>" >
         </div>
         <div class="form-group">
            <label for="exampleInputEmail1">Course</label>
            <input type="text"  placeholder="Enter Section" name="section" autocomplete="off" value="<?php echo $section;?>" >
         </div>
         <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="email"  placeholder="Enter Email" name="email" autocomplete="off" value="<?php echo $email;?>">
         </div>
     
        <button type="submit" class="btn btn-primary" name="submit">Update</button>
    </form>
    </div>


</body>

</html>