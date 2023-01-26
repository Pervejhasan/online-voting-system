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
        <!-- =================================================================== -->
        <div class="row my-5">
            <div class="col-md-2"></div>
            <div class="col-md-5">
                <?php

if(isset($_SESSION['groups'])){
$groups=$_SESSION['groups'];
for($i=0;$i<count($groups);$i++){
    ?>

                <div class="row">
                    <div class="col-md-4">
                        <img src="../uploads/<?php echo $groups[$i]['photo'] ;?> " class="group-img rounded rounded-2"
                            alt="group image">
                    </div>
                    <div class="col-md-8">
                        <strong class="text-dark h5 my-2">Group name: </strong>
                        <?php echo $groups[$i]['username'] ;?><br>
                        <strong class="text-dark h5 my-2">Votes: </strong><?php echo $groups[$i]['votes'] ;?><br>
                    </div>
                </div>


                <form action="../actions/voting.php" method="post">
                    <input type="hidden" name="groupvotes" value="<?php echo $groups[$i]['votes'] ;?>">

                    <input type="hidden" name="groupid" value="<?php echo $groups[$i]['id'] ;?>">
                    <?php


if($_SESSION['status']==1){
?>
                    <button class=" btn bg-success my-3 text-white">Voted</button>
                    <?php
}
else{
    ?>
                    <button class=" btn bg-success my-3 text-white" type="submit">Vote</button>
                    <?php  
}
?>

                </form>
                <hr class="w-75 m-auto my-4">

                <?php   
}

}else{
?>
                <div class="container">
                    <p>No Group to display</p>

                </div>


                <?php

}
?>


            </div>


            <!-- ================================================================= -->

            <div class="col-md-3 border border border-info rounded-1 rounded d-flex justify-content-center align-items-center flex-column bg-primary"
                style="height: 250px; width:250px;">
                <!-- user profile -->
                <img src="../uploads/<?php echo $data['photo'];?>"
                    class="user-img rounded-circle border border-3 border-white mb-2 my-4" alt="user image">
                <br>
                <p><strong class="text-dark h5">Name: </strong><?php echo $data['username'];?></p>
                <p><strong class="text-dark h5">Mobile: </strong><?php echo $data['mobile'];?></p>
                <p><strong class="text-dark h5">Status: </strong><?php echo $status;?></p>
            </div>

            <div class="col-md-2"></div>



        </div>
    </div>

    <script src="https://kit.fontawesome.com/6afa902829.js" crossorigin="anonymous"></script>
</body>

</html>