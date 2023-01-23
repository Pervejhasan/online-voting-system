<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voting System-Registration Page</title>
    <!-- Bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="../image/vot-favicon.png">
</head>

<body class="bg-secondary">
    <h2 class="text-white text-center p-3 ">Voting System</h2>
    <div class="bg-info py-4 w-50 m-auto rounded">
        <h3 class="text-center p-3">Register Account</h3>
        <div class="container text-center">
            <form action="">
                <div class="mb-3">
                    <input type="text" class="form-control  w-50 m-auto" name="username" placeholder="Enter your name"
                        require>
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control  w-50 m-auto" name="mobile"
                        placeholder="Enter your mobile number" require maxlength="10" minlength="10">
                </div>


                <div class="mb-3">
                    <input type="password" class="form-control  w-50 m-auto" name="password"
                        placeholder="Enter your password" require>
                </div>



                <div class="mb-3">
                    <input type="password" class="form-control  w-50 m-auto" name="cpassword"
                        placeholder="Confirm password" require>
                </div>




                <div class="mb-3">
                    <input type="file" class="form-control  w-50 m-auto" name="photo">
                </div>

                <div class="mb-3">
                    <select name="std" class=" form-select w-50 m-auto">
                        <option value="group">Group</option>
                        <option value="voter">Voter</option>

                    </select>
                </div>


                <button type="submit" class="btn btn-primary my-4">Register</button>
                <p class="">Already have an account? <a href="../index.php" class="text-white">Login
                        here</a> </p>

            </form>
        </div>
    </div>
</body>

</html>