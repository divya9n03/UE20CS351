<!DOCTYPE html>
<html lang="en">

<head>
  <title>cc project</title>
</head>

<body>
  <form action="" method="POST">
    <label for="id">id</label>
    <input type="text" name="id">

    <label for="number">Number</label>
    <input type="number" name="number">
    <button type="submit" name="submit">submit</button>
  </form>
</body>

<?php
$host = "cc-db.chr8rexir5gb.us-east-1.rds.amazonaws.com";
$dbname = "cc";
$user = "admin";
$pass = "gsr182002";

$mysql = mysqli_connect($host, $user, $pass, $dbname);

if (isset($_POST['submit'])) {
  $id = $_POST['id'];
  $number = $_POST['number'];
  $bloodtest_details_insert = mysqli_query($mysql, "INSERT INTO usertable (ID , number) VALUE ('$id','$number'))");
}
