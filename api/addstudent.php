<?php
    include_once '..\connection.php';

    
       $post_data = array();
       $post_data['id'] = $_POST['id']; 
       $post_data['name'] = $_POST['name']; 
       $post_data['address'] = $_POST['address'];
       $post_data['contact'] = $_POST['contact'];

       $students->insertOne($post_data);

       $post_data = array();
       $_POST = array();
       
       echo "Insert Success";
   
?>