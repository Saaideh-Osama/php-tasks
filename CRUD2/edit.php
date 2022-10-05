<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "enterprise";
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>user Edit</title>
</head>
<body>
  
    <div class="container mt-5">

     
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>user Edit 
                            <a href="mainpage.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['id']))
                        {
                            $id = mysqli_real_escape_string($conn, $_GET['id']);
                            $query = "SELECT * FROM employees WHERE id='$id' ";
                            $query_run = mysqli_query($conn, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $user = mysqli_fetch_array($query_run);
                                ?>
                                <form action="code.php" method="POST">
                                    <input type="hidden" name="id" value="<?= $user['id']; ?>">

                                    <div class="mb-3">
                                        <label>image</label>
                                        <input type="file" name="image" value="<?=$user['image'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Name</label>
                                        <input type="text" name="names" value="<?=$user['names'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>address</label>
                                        <input type="text" name="addresss" value="<?=$user['addresss'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>salary</label>
                                        <input type="text" name="salary" value="<?=$user['salary'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>position</label>
                                        <input type="text" name="position" value="<?=$user['position'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" name="update" class="btn btn-primary">
                                            update user info
                                        </button>
                                    </div>

                                </form>
                                <?php
                            }
                            else
                            {
                                echo "<h4>No Such Id Found</h4>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
