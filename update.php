<?php
include "connect.php";

if (isset($_POST['submit'])){
    $id = $_GET['updated'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];

    $con=new mysqli('localhost','root','','crud_students');
    $sql="update `crud` set id='$id',name='$name',email='$email',mobile='$mobile',password='$password' where id=$id";


    $result=mysqli_query($con,$sql);
    if ($result){
        //redirect to display.php
        echo "data updated successfully";
        //header('location:display.php');
//        echo "data inserted successful";
    }else
        var_dump(mysqli_error($con));
}
?>




<html>
<body>

<form method="post">
    <label>Name</label><br>
    <input type="text" class="form-control"
           placeholder="Enter your name" name="name"><br><br>

    <label>Email</label><br>
    <input type="text" class="form-control"
           placeholder="Enter your email" name="email"><br><br>

    <label>Mobile</label><br>
    <input type="tel" class="form-control"
           placeholder="Enter your mobile" name="mobile"><br><br>

    <label>Password</label><br>
    <input type="password" class="form-control"
           placeholder="Enter your password" name="password"><br><br>

    <button style=background-color:cornflowerblue; type="submit" class="btn
btn-submit" name="submit">Update</button>

</form>


</body>

</html>