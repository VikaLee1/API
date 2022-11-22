<?php 
header("Content-type: application/json");
header("Access-Control-Allow_Method: GET");

require_once "db_connect.php";


    $sql = "SELECT * FROM animal";
    $result = mysqli_query($connect, $sql);

    if ($result) {
        $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
      echo json_encode($row);
    } 

