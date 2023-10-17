<?php
include'config.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

   //updating quantity

   $sql1="select rent_quantity,cycle_id from rent where rent_id=$id";
   $result1=mysqli_query($conn,$sql1);
   $row = mysqli_fetch_assoc($result1);
    
    $sql2="UPDATE cycle SET quantity = quantity + $row[rent_quantity] WHERE id = $row[cycle_id]";
    $result2=mysqli_query($conn,$sql2);
   

     //deleting 
     
    $sql="delete from rent where rent_id=$id";
    $result=mysqli_query($conn,$sql);
    if($result){
        //echo"Deleted Successfully";
        header('location:myrent.php');
    }
    else{
        die(mysqli_error($conn));
    }

 
} 

?> 