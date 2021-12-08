<?php
    include_once '..\connection.php';

    $cursor = $students->find();

    echo '{"students":[';
    foreach($cursor as $document) {
        echo '{"id":"'.$document['id'].'",'; 
        echo '"name":"'.$document['name'].'",'; 
        echo '"address":"'.$document['address'].'",'; 
        echo '"contact":"'.$document['contact'].'"},';
    }
    echo '{}]}';

?>