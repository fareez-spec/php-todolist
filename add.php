<?php
include_once("connection.php");
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
                    
                   <h1>Add Task</h1>  
                   <hr>
                    <form action="" method="post">
                        <div class="form-group">
                            <input class="form-control" type="text" name="task" placeholder="task">
                            <br>
                            <button class="btn btn-info float-right" type="submit" name="btnAdd">Add Task</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
   

    
</body>
</html>