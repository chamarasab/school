<?php
    include_once 'connection.php';

    if (isset($_POST['submit'])) {
       $post_data = array();
       $post_data['id'] = $_POST['txtId']; 
       $post_data['name'] = $_POST['txtName']; 
       $post_data['address'] = $_POST['txtAddress'];
       $post_data['contact'] = $_POST['txtContact'];

       $students->insertOne($post_data);

       $post_data = array();
       $_POST = array();
       header("Refresh:0");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Add Student</title>
</head>
<body>
    <nav class="navbar navbar-dark bg-primary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">ABC School</a>
            </div>
    </nav>
    <div class="container">
        <div class="card mt-3 mb-2 bg-light">
            <h4 class="card-title mx-auto mt-4">New Student Form</h4>
            <div class="card-body">
                <form method="POST" class="my-3 mx-3">
                    <div class="mb-3">
                        <label for="id" class="form-label">Student Id</label>
                        <input type="text" placeholder="ex: std001" class="form-control" id="id" name="txtId" aria-describedby="id">
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Student Name</label>
                        <input type="text" placeholder="ex: Chamara" class="form-control" id="name" name="txtName" aria-describedby="name">
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Student Address</label>
                        <input type="text" placeholder="ex: Kurunegala" class="form-control" id="address" name="txtAddress" aria-describedby="address">
                    </div>
                    <div class="mb-3">
                        <label for="contact" class="form-label">Student Contact Number</label>
                        <input type="number" placeholder="ex: 761234568" class="form-control" id="contact" name="txtContact" aria-describedby="address">
                    </div>
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <input type="submit" name="submit" class="btn btn-primary" value="Insert Student"/>
                        <a href="http://localhost/school/students" class="btn btn-warning">View Students</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>