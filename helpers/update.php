<?php
require "../settings/connection.php";
$ime = $_POST['ime'];
$prezime = $_POST['prezime'];
$adresa = $_POST['adresa'];
$id = $_POST['id'];
$sql = "UPDATE users SET ime='$ime',prezime='$prezime',adresa='$adresa' WHERE id=$id ";
$query = mysqli_query($db, $sql);
header("Location:../index.php");
