<?php

function connectionToDb($hostName,$userName,$password,$databaseName){
    $con = new mysqli($hostName,$userName,$password,$databaseName);
    if ($con){
        return "connection is successful";
    }else{
         var_dump(mysqli_error($con));
    }
}