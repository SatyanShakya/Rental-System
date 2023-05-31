<?php
include'config.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="delete from  user_form where id=$id";
    $result=mysqli_query($conn,$sql);
    if($result){
        //echo"Deleted Successfully";
        header('location:basic-table.php');
    }
    else{
        die(mysqli_error($conn));
    }
}

?>