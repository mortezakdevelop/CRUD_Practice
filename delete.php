<?php

if (isset($_GET['deleted'])){
    $id=$_GET['deleted'];

    $con = new mysqli('localhost','root','','crud_students');
    $sql="delete from `crud` where id=$id";
    $result=mysqli_query($con,$sql);
    if ($result){
        header("location:display.php");
    }else{
        echo 'failed';
        var_dump(mysqli_error($con));
    }
}

