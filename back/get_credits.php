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
    //echo "Connected successfully";
    
    //echo "test";
    
    // $nome = 'Eunice';
    
    // $sql = "SELECT * FROM revendedoras WHERE nome='$nome'";
    // $result = mysqli_query($conn, $sql);
    // $received_name = "";
    
    // echo "<script>alert('rururuurur') </script>";
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        
        $nome = $_POST['nome'];
        
        $sql = "SELECT * FROM revendedoras WHERE nome='$nome'";
        $result = mysqli_query($conn, $sql);
        $received_name = "";
        $points = "";
        
        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                $points = $points.$row["pontos"];
            }
        } else {
            echo "pontuação indisponível";
        }     
        echo $points;
    }
    else {
        echo "<script>alert('Ocorreu um erro com a conexão...');</script>";
    }
    
?>

