<?php
include'config.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="delete from rent where rent_id=$id";
    $result=mysqli_query($conn,$sql);
    if($result){
        //echo"Deleted Successfully";
        header('location:renthistory.php');
    }
    else{
        die(mysqli_error($conn));
    }
}

?> 