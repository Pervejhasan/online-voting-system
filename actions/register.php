<?php
include ("connection.php");
$username=$_POST['username'];
$mobile=$_POST['mobile'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];


$image=$_FILES['img']['name'];
$tmp_name=$_FILES['img']['tmp_name'];
$std=$_POST['std'];

if($password!=$cpassword){
    echo '<script>
    alert("password do not match");
    window.location="../partials/registration.php";
    </script>';
}
else{
    move_uploaded_file($tmp_name,"../uploads/$image");

    $sql = "INSERT INTO voterdata (username,mobile,password,photo,standard,status,votes)
VALUES ('$username', '$mobile', '$password','$image','$std',0,0)";


//   window.location="../";
if (mysqli_query($conn, $sql)) {
  echo '<script>
  alert("Registration successfully");
  window.location="../index.php";
  </script>';
}
else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


}

?>