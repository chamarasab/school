<?php
    include_once 'connection.php';

    $id = $_GET['id'];

    $cursor = $students->deleteOne(["id"=>$id]);

    echo "<div class='alert alert-success'> Record deleted successfully </div>";

    header("location: students.php"); //reroute to home page
?>