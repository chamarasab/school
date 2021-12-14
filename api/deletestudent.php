<?php
    include_once '..\connection.php';
  
    $id = $_POST['id'];

    $cursor = $students->deleteOne(["id"=>$id]);
       
    echo "Delete Success";
   
?>