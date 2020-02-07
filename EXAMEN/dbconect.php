<?php 

function getsentence (){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "examen";

    $conn = new mysqli($servername, $username, $password, $dbname);
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT sentence FROM refranero ";
    
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo '<option value='.$row['sentence'].'>'.$row['sentence'].'</option>';
        }
    }
    $conn->close();
}
?>