<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voting System</title>
    <!-- Bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="image/vot-favicon.png">


</head>

<body class="bg-secondary">

    <h2 class="text-white text-center p-3 ">Voting System</h2>
    <div class="bg-info py-4 w-50 m-auto rounded">
        <h3 class="text-center p-3">Login</h3>
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
                    <input type="password" class="form-control  w-50 m-auto" name="username"
                        placeholder="Enter your password" require>
                </div>
                <div class="mb-3">
                    <select name="std" class=" form-select w-50 m-auto">
                        <option value="group">Group</option>
                        <option value="voter">Voter</option>

                    </select>
                </div>
                <button type="submit" class="btn btn-primary my-4">Login</button>
                <p class="">Don't have an account? <a href="" class="text-white"> Register here</a> </p>

            </form>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>