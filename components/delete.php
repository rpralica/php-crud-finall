<?php 
require "../settings/connection.php";
$id=$_GET['id'];
$sql="DELETE FROM users WHERE id=$id";
$query=mysqli_query($db,$sql);
header("Location:../index.php");
