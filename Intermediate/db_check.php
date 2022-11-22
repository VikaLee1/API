<?php 
require_once("db_connect.php");

$sql="SELECT * FROM animal WHERE animal_id=$id";
$result=mysqli_query($connect,$sql);
$row=mysqli_fetch_assoc($result);

$id=$row['animal_id']?:null;
$name=$row['name']?:null;
$description=$row['description']?:null;
$age=$row['age']?:null;
$color=$row['color']?:null;
$picture=$row['picture']?:null;

mysqli_close($connect);
?>