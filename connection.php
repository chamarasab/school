<?php
    require 'vendor/autoload.php';

    $client = new MongoDB\Client("mongodb://localhost:27017");

    $db = $client->school;

    $students = $db->students;
    $teachers = $db->teachers;

?>