<?php
    include_once 'connection.php';

    $cursor = $students->find();

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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .float{
            position:fixed;
            width:60px;
            height:60px;
            bottom:40px;
            right:40px;
            background-color:#0C9;
            color:#FFF;
            border-radius:50px;
            text-align:center;
            box-shadow: 2px 2px 3px #999;
        }

        .my-float{
            margin-top:22px;
        }
    </style>
    <title>Students</title>
</head>
<body>
    <nav class="navbar navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">ABC School</a>
        </div>
    </nav>
    <div class="container">
        <div class="card mt-3">
            <div class="card-header">
                About
            </div>
            <div class="card-body">
                <h5 class="card-title">PHP with MongoDB </h5>
                <p class="card-text">This project integrates with MONGODB PHP and executes CRUD functions. <br> by, <i>Chamara Ekanayake.</i></p>
                <a href="https://github.com/chamarasab" class="btn btn-dark">GitHub</a>
                <a href="https://www.youtube.com/watch?v=OcR03c9DQe0" class="btn btn-danger">Youtube</a>
            </div>
        </div>
        <div class="card mt-3 mb-3 bg-light">
            <div class="card-header text-center">
                <h5>All Student Details</h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover mt-0">
                        <thead class="table-primary">
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Name</th>
                                <th scope="col">Address</th>
                                <th scope="col">Contact</th>
                            </tr>
                        </thead>
                        <tbody  >
                            <?php foreach($cursor as $document) {?>
                                <tr>
                                    <th scope="row"><?php echo $document['id']; ?></th>
                                    <td><?php echo $document['name']; ?></td>
                                    <td><?php echo $document['address']; ?></td>
                                    <td><?php echo $document['contact']; ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!--<div class="card my-2 bg-light">
            <h4 class="card-title mx-auto mt-4">New Student Form</h4>
            <div class="card-body">
                <form method="POST" class="my-3 mx-3">
                    <div class="mb-3">
                        <label for="id" class="form-label">Student Id</label>
                        <input type="text" class="form-control" id="id" name="txtId" aria-describedby="id">
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Student Name</label>
                        <input type="text" class="form-control" id="name" name="txtName" aria-describedby="name">
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Student Address</label>
                        <input type="text" class="form-control" id="address" name="txtAddress" aria-describedby="address">
                    </div>
                    <div class="mb-3">
                        <label for="contact" class="form-label">Student Contact Number</label>
                        <input type="number" class="form-control" id="contact" name="txtContact" aria-describedby="address">
                    </div>

                    <input type="submit" name="submit" class="btn btn-primary" value="Insert Student"/>
                </form>
            </div>
        </div>-->
        <a href="http://localhost/school/addstudent" class="float">
            <i class="fa fa-plus my-float"></i>
        </a>
    </div>
</body>
</html>