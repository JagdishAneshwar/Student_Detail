<?php
include('connection.php');
if (isset($_POST['submit'])) {
    $user = $_POST['name'];
    $pwd = $_POST['password'];
    $query = mysqli_query($connect, "SELECT * FROM admin");
    $fetch = mysqli_fetch_array($query);

    if ($fetch['username'] == $user && $fetch['password'] == $pwd) {
        header("Location:details.php");
        echo '<script>alert("Successfully Logined")</script>';
    
} else{
    echo '<script>alert("Entered Details are wrong!!")</script>';
}
}
?>






<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="bootstrap.min.css" rel="stylesheet">
    <title>Register</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary p-3 shadow">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Student Management</a>
            <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tooltip" data-bs-placement="right" title="Student" href="login.php">Student</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tooltip" data-bs-placement="right" title="Admin" href="admin.php">Admin</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="containder-fluid mb-5">
        <div class="border shadow" style="width: 600px; margin-top: 80px; margin-left: 330px; padding: 50px;">
            <div>
                <img class="img-fluid" src="log.png" height=200 width=200 style="display: block; margin-left: auto; margin-right:auto;"></img>
            </div>
            <div class="h1 m-3 mb-5" align="center">Student Login</div>
            <form method="POST" enctype="multipart/form-data">
                    <div class="m-3">
                        <label for="User" class="form-label">Student Name</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="m-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>

            <input type="submit" class="btn btn-primary col-11 m-4 p-2" id="submit" name="submit" value='Login'>
            <div class="input-group mb-3">
                <p class="ps-4 link-info">Haven't registered yet?  <a class="link-success" href="register.php">Register Here</a></p>
                <br>
            </div>
            </form>
        </div>
    </div>

    <div class="footer">

    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>