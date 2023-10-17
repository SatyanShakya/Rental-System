<?php
session_start();
$conn = mysqli_connect('localhost','root','','user_db');

if(!$conn){
die(mysqli_error($conn));
}
if(!isset($_SESSION['allInfo'])){
    header('location:../login_form.php');
 }
?>