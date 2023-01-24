<?php

session_start();
$data=$_SESSION['data'];
if($_SESSION['status']==1){
    $status='<b class="text-success">Voted</b>';
}else{
    $status='<b class="text-danger">Not Voted</b>';
}

?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voting System-Dashboard</title>
    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="../image/vot-favicon.png">
    <link rel="stylesheet" href="../style.css">
</head>

<body class="bg-secondary text-light">
    <div class="container my-3">
        <a href="../index.php"><button class="btn btn-primary text-white"><i
                    class="fa-solid fa-arrow-left-long text-white me-1"></i>Back</button></a>

        <a href="logout.php" class="float-end"><button class="btn btn-primary text-white">Logout</button></a>



        <h1 class="my-3 text-center">Voting System</h1>
        <hr class=" w-25   m-auto border border-2">

        <div class="row my-5">

            <div class="col-md-7">
                <!-- groups -->
                <div class="row">
                    <div class="col-md-4">
                        <img src="" alt="group image">
                    </div>
                    <div class="col-md-8">
                        <strong class="text-dark h5">Group name:</strong><br>
                        <strong class="text-dark h5">Votes:</strong><br>
                    </div>
                </div>

            </div>






            <div class="col-md-5">
                <!-- user profile -->

                <img src="../uploads/<?php echo $data['photo'];?>" class="user-img rounded-circle" alt="user image">
                <br>
                <strong class="text-dark h5">Name: </strong><?php echo $data['username'];?><br><br>
                <strong class="text-dark h5">Mobile: </strong><?php echo $data['mobile'];?><br><br>
                <strong class="text-dark h5">Status: </strong><?php echo $status;?><br><br>
            </div>
            <hr class="w-75 m-auto">
        </div>
    </div>

    <script src="https://kit.fontawesome.com/6afa902829.js" crossorigin="anonymous"></script>
</body>

</html>