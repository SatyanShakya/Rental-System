<?php
session_start();
include('config.php');

?>



<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>My Rent</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

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




    <table class="content-table">
        <thead>
            <tr>
                
                <th class="border-top-0">Name</th>
                <th class="border-top-0">Cycle</th>
                <th class="border-top-0">From</th>
                <th class="border-top-0">To</th>
                <th class="border-top-0">Mobile no</th>

                <th class="border-top-0">Address</th>
                <th class="border-top-0">Operations</th>


            </tr>
        </thead>
        <?php
        //for cycle name

        $sql = "SELECT re.*  FROM rent re WHERE  re.user_id={$_SESSION['allInfo']['id']} ";
       
        $result = mysqli_query($conn, $sql);
        if($result){
            while ($row = mysqli_fetch_assoc($result)) {
                $id=$row['rent_id'];
                ?>
                <tr>
                    <th scope="row"><?php echo $_SESSION['allInfo']['name'] ?></th>
                    <th scope="row"><?php echo $row['cycle_name'] ?></th> 
                    <th scope="row"><?php echo $row['from_date']?></th>
                    <th scope="row"><?php echo $row['to_date']?></th>
                    <th scope="row"><?php echo $row['mobile_no']?></th>
                    <th scope="row"><?php echo $row['rent_address']?></th>
                    <?php
                    echo'
                    <td>
                        <button class="content-button"><a href="deletemyrent.php?deleteid=' . $id . '">Cancel</a></button>
                    </td>
                    ';
                    ?>
                </tr>

                <?php
            }
        }else{
            echo "No cycles rented.";
        }
        ?>
         </table>


</body>

</html>