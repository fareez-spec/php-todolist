<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Todo List</title>

    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark">
        <ul class="nav ">
                <li class="nav-item">
                    <a href="index.php" class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a href="add.php" class="nav-link" href="#">Add</a>
                </li>
            </ul>
    </nav>
    <div class="container mt-5">
        <div class="row">
            <div class="col">
            <div class="card">
                <div class="card-body table-responsive">
                    
                   <h1>PHP Todo LIst<span class="float-right"><a class="btn btn-primary" href="add.php">Add Task</a></span></h1>  
                   <hr>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Task</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Task 1</td>
                <td>
                    <button class="btn btn-success">Done</button>
                    <button class="btn btn-danger">Delete</button>
                </td>
            </tr>
            <tr>
                <td>Task 2</td>
                <td>
                    <button class="btn btn-success">Done</button>
                    <button class="btn btn-danger">Delete</button>
                </td>
            </tr>

        </tbody>


    </table>        </div>
                </div>
            </div>
        </div>
    </div>
   
   

    
</body>
</html>