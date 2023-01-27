<?php
session_start();
include ('connection.php');

$votes=$_POST['groupvotes'];
$totalVotes=$votes+1;
$gid=$_POST['groupid'];

$uid=$_SESSION['id'];

$updateVotes=mysqli_query($conn,"update voterdata  set votes='$totalVotes' where id='$gid' ");


$updateStatus=mysqli_query($conn,"update voterdata  set status=1 where id='$uid' ");
if($updateVotes and $updateStatus){

    $getgroups=mysqli_query($conn,"SELECT username,photo,votes,id from voterdata where standard='group'");

    $groups=mysqli_fetch_all($getgroups,MYSQLI_ASSOC);
    $_SESSION['groups']=$groups;
    $_SESSION['status']=1;
   echo '<script>
    
    alert("Voting Successful");
    window.location="../partials/dashboard.php";
    </script>
    ';

}else{
    echo '
    <script>
    
    alert("Technical Error! vote after sometime");
    window.location="../partials/dashboard.php";
    </script>
    
    
    ';
}
?>