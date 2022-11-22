<?php 
$localhost="localhost";
$username="root";
$password="";
$dbname="BE17_CR5_animal_adoption_Viktoria";

$connect =new mysqli($localhost, $username, $password, $dbname);

if(!$connect) {
    echo "error";
} 
// else {
//     echo "connected";
// }

?>