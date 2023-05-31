<?php

include('config.php');

?>



<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>About the page</title>
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
                <th class="border-top-0">S.N</th>
                <th class="border-top-0">User Id</th>
                <th class="border-top-0">Cycle Id</th>
                <th class="border-top-0">From</th>
                <th class="border-top-0">To</th>
                <th class="border-top-0">Mobile no</th>

                <th class="border-top-0">Address</th>
                <th class="border-top-0">Operations</th>


            </tr>
        </thead>
        <?php

        $sql = "select * from rent";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
                $id = $_GET['user_id'];
                $sql = "SELECT * from rent WHERE user_id=$id  ";
                $id = $row['rent_id'];
                $user_id = $row['user_id'];
                $cycle_id = $row['cycle_id'];
                $from_date = $row['from_date'];
                $to_date = $row['to_date'];
                $mobile_no = $row['mobile_no'];
                $rent_address = $row['rent_address'];

                echo '
                    <tbody>
                    <tr> 
                                                    <th scope="row">' . $id . '</th>
                                                    <th scope="row">' . $user_id . '</th>
                                                    <th scope="row">' . $cycle_id . '</th>
                                                    <th scope="row">' . $from_date . '</th>
                                                    <th scope="row">' . $to_date . '</th>
                                                    <th scope="row"> ' . $mobile_no . '</th>
                                                    <th scope="row">' . $rent_address . ' </th>
                                                    
                                                    <td>
                                                    <button><a href="deletemyrent.php?deleteid=' . $id . '">Delete</a></button>
                                                    </td>

                                                </tr>
                                                </tbody>';
            }

        }
        ?>
    </table>

</body>

</html>