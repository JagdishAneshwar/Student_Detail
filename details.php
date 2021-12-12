<?php
include('connection.php');
$query = mysqli_query($connect, "SELECT * FROM users");
$fetch = mysqli_fetch_array($query);
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="bootstrap.min.css" rel="stylesheet">
    <link href="main.css" rel="stylesheet">
    <title>login</title>
</head>
<body>
    <header class="ScriptHeader rt-container col-rt-12">
        <div class="rt-heading">
            <h1>Student details</h1>
        </div>
    </header>
    <section>
        <div class="rt-container">
            <div class="col-rt-12">
                <div class="Scriptcontent">
                 
                    <!------------- profile ---------->
                    <center>
                        <div class="student-profile" style="display: block; margin-left: auto; margin-right: auto;">
                            <div class="container row col-lg-4  bg-transparent text-center">
                                <img class="profile_img rounded-circle" src=<?= $fetch['img_path']; ?> alt="student dp">
                                <h3 class="pt-3"><?= $fetch['username']; ?> <?= $fetch['last_name']; ?></h3>
                            </div>
                        </div>
                    </center>

                    <!-- student class details -->
                    <div class="card-body">

                    <!-- general information -->
                    <div class="card-header bg-transparent border-0">
                        <h3 class="mb-0"><i class="far fa-clone pr-1"></i>Academic Information</h3>
                    </div>


                    <div class="card-body pt-0">
                        <table class="table table-bordered">
                            <tr>
                                <th width="30%">Student ID</th>
                                <td width="2%">:</td>
                                <td><?= $fetch['id']; ?></td>
                            </tr>
                            <tr>
                                <th width="30%">Roll No</th>
                                <td width="2%">:</td>
                                <td><?= $fetch['roll_no']; ?></td>
                            </tr>
                            <tr>
                                <th width="30%">Class</th>
                                <td width="2%">:</td>
                                <td><?= $fetch['class']; ?></td>
                            </tr>
                            <tr>
                                <th width="30%">Divisiion</th>
                                <td width="2%">:</td>
                                <td><?= $fetch['div']; ?></td>
                            </tr>
                            <tr>
                                <th width="30%">Semister</th>
                                <td width="2%">:</td>
                                <td><?= $fetch['sem']; ?></td>
                            </tr>
                        </table>
                    </div>
                    </div>

                </div>
            </div>

            <div class="col-lg-8">
                <div class="card">

                    <!-- general information -->
                    <div class="card-header bg-transparent border-0">
                        <h3 class="mb-0"><i class="far fa-clone pr-1"></i>General Information</h3>
                    </div>


                    <div class="card-body pt-0">
                        <table class="table table-bordered">
                            <tr>
                                <th width="30%">Student Name</th>
                                <td width="2%">:</td>
                                <td><?= $fetch['username']; ?> <?= $fetch['mid_name']; ?> <?= $fetch['last_name']; ?></td>
                            </tr>
                            <tr>
                                <th width="30%">Gender</th>
                                <td width="2%">:</td>
                                <td><?= $fetch['gen']; ?></td>
                            </tr>
                            <tr>
                                <th width="30%">Contact Number</th>
                                <td width="2%">:</td>
                                <td><?= $fetch['contact']; ?></td>
                            </tr>
                            <tr>
                                <th width="30%">Email</th>
                                <td width="2%">:</td>
                                <td><?= $fetch['email']; ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div style="height: 26px"></div>
                <div class="card">
                    <div class="card-header border-0">
                        <h3 class="mb-0"></i>Other Information</h3>
                    </div>
                    <div class="card-body pt-0">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                            commodo consequat.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>