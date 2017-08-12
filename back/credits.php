<?php
    /*
     - Quando uma supervisora registra uma compra então a usuária receberá créditos
     - Quando a usuária compra algo ela perde créditos
     */
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "eudora";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    
    
    $key = "echovalue";
    /*if (isset($_POST['Key']) ) {
        $received = $_POST['Key'];
        if($received  == $key) {
            */
            $revendedora = $_POST['revendedora'];
            $revendedora = 'Eunice';
            
            //$sql = "SELECT pontos FROM revendedoras WHERE nome='$revendedora'";
            $sql = "SELECT * FROM revendedoras WHERE nome='$revendedora'";
            $credits = $conn->query($sql);
            $return_val = "";
            
            $conn->close();
    //     }
    // }

?>