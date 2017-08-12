<?php
    //include_once 'dbconnect.php';
    // header('content-type: application/json; charset=utf-8');
    // header("access-control-allow-origin: *");
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "eudora";
    
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    
    // Check connection
    if (!$conn) {
        die("Connection failed" . mysqli_connect_error());
    }
        
    $sql = "SELECT * FROM  revendedoras WHERE categoria='begin' ORDER BY id";
    $result = mysqli_query($conn, $sql);
    $received_name = "";
    $points = "";
    $i = 0;
    
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            echo $row["nome"]."|";
            $i += 1;
        }
    } else {
        echo "erro";
    }
    
    
?>

