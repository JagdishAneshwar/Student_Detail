<?php
include('connection.php');
if (isset($_POST['file_submit'])) {

    $f_name = $_POST['First_name'];
    $m_name = $_POST['Middle_name'];
    $l_name = $_POST['Last_name'];
    $rol_no = $_POST['rol_no'];
    $class = $_POST['Class'];
    $sem = $_POST['Sem'];
    $div = $_POST['Div'];
    $email = $_POST['Email'];
    $pwd = $_POST['Password'];
    $gen = $_POST['Gender'];
    $contact = $_POST['Contact'];
    if ($_FILES['upload_file']['name'] != '') {
        date_default_timezone_set('Asia/Kolkata');
        $current_date = date('dmYHis');
        $target_dir = "uploads/";
        $file = $_FILES['upload_file']['name'];
        $path = pathinfo($file);
        $filename = $path['filename'];
        $ext = $path['extension'];
        $temp_name = $_FILES['upload_file']['tmp_name'];
        $file_name = $current_date . '.' . $ext;
        $path_file = $target_dir . $file_name;
        move_uploaded_file($temp_name, $path_file);
    }

    $query = mysqli_query($connect, "INSERT INTO users(`username`, `mid_name`, `last_name`, `email`, `password`, `class`, `div`, `roll_no`, `img_path`,`gen`, `sem`, `contact`) 
    VALUES ('$f_name','$m_name','$l_name','$email','$pwd','$class','$div','$rol_no','$path_file','$gen', '$sem', '$contact')");

    
    header("Location:login.php");
    
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
            <img class="img-fluid" src="reg.png" height=200 width=200 style="display: block; margin-left: auto; margin-right:auto;"></img>
        </div>

        <form method="POST" enctype="multipart/form-data">
        <div class="h1 m-3 mb-5" align="center">Student Registration</div>
        <div class="mb-5">
                    <div class="row">
                        <div class="col">
                            <label for="First_name">First Name</label>
                            <input type="text" name="First_name" id="First_name" class="form-control" placeholder="UserName" required><br>
                        </div>
                        <div class="col">
                            <label for="Middle_name">Middle Name</label>
                            <input type="text" name="Middle_name" id="Middle_name" class="form-control" placeholder="Middle Name" required><br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="Last_name">Last Name</label>
                            <input type="text" name="Last_name" id="Last_name" class="form-control" placeholder="LastName" required><br>
                        </div>
                        <div class="col">
                            <label for="Roll_no">Roll No</label>
                            <input type="number" name="rol_no" id="rol_no" class="form-control" placeholder="Roll No" required><br>
                        </div>
                    </div>
                    <div class="contact">
                            <label for="Contact">Contact No.</label>
                            <input type="number" name="Contact" id="Contact" class="form-control" placeholder="Contact" required><br>
                    </div>

                    <label for="Email">Email</label>
                    <input type="Email" name="Email" id="Email" class="form-control" placeholder="Email ID" required><br>

                    <label for="Password">Password</label>
                    <input type="Password" name="Password" id="Password" class="form-control" placeholder="Password" required><br>

                    <label for="class">Class</label>
                    <select id='Class' class="form-select" aria-label="Default select example" name='Class'>
                        <option selected>select your Class</option>
                        <option value="FyB.sc CS">FyB.sc CS</option>
                        <option value="SyB.sc CS">SyB.sc CS</option>
                        <option value="TyB.sc CS">TyB.sc CS</option>
                    </select><br>

                    <label for="sem">Semister</label>
                    <select id='Sem' class="form-select" aria-label="Default select example" name='Sem'>
                        <option selected>select your Semister</option>
                        <option value="Sem-I">Sem-I</option>
                        <option value="Sem-II">Sem-II</option>
                        <option value="Sem-III">Sem-III</option>
                        <option value="Sem-IV">Sem-IV</option>
                        <option value="Sem-V">Sem-V</option>
                        <option value="Sem-VI">Sem-VI</option>
                    </select><br>

                    <label for="div">Div</label><br>
                    <input type="radio" id='Div' class="form-radio" name='Div' value="A">
                    <label>A</label>
                    <input type="radio" id='Div' class="form-radio ms-3" name='Div' value="B">
                    <label>B</label><br><br>

                    <label for="gender">Gender</label><br>
                    <input type="radio" id='Gender' class="form-radio" name='Gender' value="Male">
                    <label>Male</label>
                    <input type="radio" id='Gender' class="form-radio ms-3" name='Gender' value="Female">
                    <label>Female</label>
                    <input type="radio" id='Gender' class="form-radio ms-3" name='Gender' value="Other">
                    <label>Other</label><br><br>
                    
                    <label for="formFile" class="form-label">Upload Image</label>
                    <input class="form-control" name="upload_file" type="file" id="formFile" accept='image/png'>
                
                    <div class="col-12 mt-2">
                    <div class="form-check">
                    <input class="form-check-input" type="checkbox" required>
                    <label class="form-check-label" for="invalidCheck2">
                        Agree to terms and conditions
                    </label>
                    </div>
                </div>
                </div>
                <button type="submit" name="file_submit" class="btn col-12 btn-primary">Register</button><br><br>

        </form>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>




