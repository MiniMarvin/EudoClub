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
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $nome = $_POST['nome'];
        $now_points = $_POST['now_points'];
        $price = $_POST['price'];
        $points = $now_points - $price;
        
        echo "nome: $nome | now: $now_points | price: $price | points $points";
        
        
        if($points < 0) { // can't trade
            echo "<script>alert('Saldo insuficiente!');</script>";
        }
        else { // trade accepted
            $sql = "UPDATE revendedoras SET pontos=$points WHERE nome='$nome';";
            $result = mysqli_query($conn, $sql);
            // $received_name = "";
            
            // if (mysqli_num_rows($result) > 0) {
            //     // output data of each row
            //     while($row = mysqli_fetch_assoc($result)) {
            //         $received_name = $received_name.$row["pontos"];
            //     }
            // } else {
            //     echo "pontuação indisponível";
            // }
            
            echo "<script>alert('Transação aceita');</script>";
        }
        
        
    }
    else {
        echo "<script>alert('Ocorreu um erro com a conexão...');</script>";
    }
    
?>

