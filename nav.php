<?php
session_start();
if (!isset($_SESSION["login"])){
    header('location: index.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>WEB Elyka Maya</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</head>

<body>

<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">DASHBOARD</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="home.php">Home</a></li>
            <li><a href="data.php">Data 1</a></li>
            <li><a href="data.php">Data 2</a></li>
            <li><a href="data.php">Data 3</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
        </ul>
    </div>
</nav>
