<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <link href="main.css" rel="stylesheet">
</head>

<body>
<header class="ScriptHeader rt-container col-rt-12">
        <div class="rt-heading">
            <h1>Student details</h1>
        </div>
    </header>

    <center>
        <img src="deat.png" height=200 width=200 style="display: block; margin-left: auto; margin-right: auto;padding:5px"></img>
        <h1>Student details</h1><br><br>
    </center>
    <div class="table mb-5">
    <?php
    include('connection.php');
    $query = mysqli_query($connect, "SELECT * FROM users");
    $row = mysqli_num_rows($query);
    $fetch = mysqli_fetch_array($query);

    if ($row > 0) { ?>
        <table border=2 padding=5 align="center">
            <tr>
                <th style="text-align: center; padding:10px;">Sr. No</th>
                <th style="text-align: center; padding:10px;">Name</th>
                <th style="text-align: center;">&nbsp;&nbsp;Roll No </th>
                <th style="text-align: center; padding:10px;">&nbsp;&nbsp;Email</th>
                <th style="text-align: center; padding:10px;">&nbsp;&nbsp;Photo</th>
            </tr>
            <?php $count = 1;
            while ($fetch = mysqli_fetch_array($query)) { ?>
                <tr>
                    <td style="text-align: center; padding:10px;"><?= $count++; ?></td>
                    <td style="text-align: center; padding:10px;"><?= $fetch['username'] . " " . $fetch['mid_name'] . "
" . $fetch['last_name']; ?></td>
                    <td style="text-align: center; padding:10px;"><?= $fetch['roll_no']; ?></td>
                    <td style="text-align: center; padding:10px;"><?= $fetch['email']; ?></td>
                    <td style="text-align: center; padding:10px;">&nbsp;&nbsp;<img src='<?= $fetch['img_path']; ?>' height=100 width=120></img></td>
                </tr>
            <?php } ?>
        </table>
    <?php
    }
    ?>
</div>
</body>

</html>