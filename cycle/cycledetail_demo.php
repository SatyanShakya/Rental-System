<?php
session_start();
//var_dump($_SESSION['allInfo']);

?>
<?php
include('config.php');

if (isset($_POST['submit'])) {

    $id = $_GET['cycleid'];
    $user_id = $_SESSION['allInfo']['id'];
    $from_date = $_POST['from_date'];
    $to_date = $_POST['to_date'];
    $mobile_no = $_POST['mobile_no'];
    $rent_address = $_POST['rent_address'];

    //for cycle name 
    $cycledata = "Select cycle_name FROM cycle WHERE id = '$id' ";
    $result = mysqli_query($conn, $cycledata);

    if (!strlen($mobile_no) === 10) {
        $error[] = 'Enter valid mobile no';

    } else {

        $row = mysqli_fetch_assoc($result);
        $insert = "INSERT INTO rent(rent_id,user_id,cycle_id,from_date, to_date, mobile_no, rent_address, cycle_name) VALUES('','$user_id','$id','$from_date','$to_date','$mobile_no','$rent_address','$row[cycle_name]')";
        $var = mysqli_query($conn, $insert);

        if ($var) {
            echo "ordered";
        } else {
            echo "Order not successfull";
        }

        //header('location:login_form.php');
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Cycle Rent</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">


</head>

<body>

    <div class="main">
        <div class="container">


            <div class="logo">
                <img src="image\logo.png" width="200px">

            </div>
            <nav>
                <ul>
                    <li><a href="main.php">HOME</a></li>
                    <li><a href="cycle.php">CYCLE</a></li>
                    <li><a href="about.php">ABOUT</a></li>
                    <li><a href="myrent.php">RENT</a></li>
                    <li><a href="../logout.php">LOGOUT</a></li>

                </ul>
            </nav>
        </div>
    </div>
    <!--------- single product details ------>

    <div class="small-container single-product">
        <div class="row">

            <?php
            $id = $_GET['cycleid'];
            $sql = "SELECT * from cycle WHERE id=$id  ";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);

            $name = $row['cycle_name'];
            $price = $row['price'];
            $image = $row['image'];

            echo '
                    <div class="col-2"> 
                     <img src= ' . $image . '> 
                    </div>

                    <div class="col-2">
                     <h1> ' . $name . ' </h1> 
                     
                     

                     <form action="" method="post" class="cycledetailform">

                    
                    <label >From Date:</label>
                    <input type="date" name="from_date">
                    <br>

                    <label >To Date:</label>
                    <input type="date" name="to_date">
                    <br>

                    <label >Mobile No:</label>
                    <input type="number" name="mobile_no">
                    <br>

                    <label >Address:</label>
                    <input type="text" name="rent_address">
                    <br>
                    
                    <label >price: </label>
                    <input  type="number" value=' . $price . ' readonly name="price"> 
                    <br>
                    
                    <input type="submit" value="Rent Now" name="submit">

                </form>
                </div>
                    ';





            ?>

        </div>
    </div>



</body>

</html>