<?php require 'Park.php';
    $title = "방명LOG";
    $list;
    $conn;

    try {
        $conn = mysqli_connect($servername, $username, $password, $database);
        mysqli_connect($conn, 'set names UTF-8: ');
        
        $result = $conn->query("SELECT * FROM guest_book");
    }
    
    catch (Exception $e) {
        echo $e->getMessage();
    }
    finally {
        mysqli_close($conn);
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel = "stylesheet" type ="text/css" href="common.css">
    </head>
    <body>
        <h1><?= $title; ?></h1>
        <table id = "guest-book">
        <tr>
            <th>이름</th><th>인사말</th><th>시간</th>
        </tr>

        <h3>
            추가했다 이부분
        </h3>
        
        <?php
        if ($result->num_rows >0) {
            while ($row = $result->fetch_assoc()){ ?>
                <tr>
                    <td><?= $row["visitor"]; ?></td>
                    <td><?= $row["visitor"]; ?></td>
                    <td><?= $row["visitor"]; ?></td>
                </tr>
            <?php }
        }
        ?>
        </table> 
    </body>
</html>