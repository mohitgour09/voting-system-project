<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voting system -Registration page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
    rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
    crossorigin="anonymous">

</head>
<body class="bg-dark">
    <h1 class="class text-center text-info p-3">Voting System</h1>
    <div class="bg-info py-4">
        <h2 class="text-center">Register Account</h2>
        <div class="container text-center">
            <form action="../actions/register.php" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <input type="text" class="form-control w-50 m-auto"  name="username"
                    placeholder="Enter your name"  required="required">
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control w-50 m-auto"  name="mobile"
                    placeholder="Enter your mobile number"  required="required" maxLength="10" minLength="10">
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control w-50 m-auto"  name="password"
                    placeholder="Enter your password"  required="required">
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control w-50 m-auto"  name="cpassword"
                    placeholder="confirm password"  required="required">
                </div>
                <div class="mb-3">
                    <input type="file" class="form-control w-50 m-auto"  name="photo">
                </div>
                <div class="mb-3">
                    <select name="std" class="form-select w-50 m-auto">
                        <option value="Group">Group</option>
                        <option value="Voter">Voter</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-dark my-4">Register</button>
                <p>Already have an account? <a href="../"
                 class="text-white">Login Here</a></p>

            </form>
        </div>
    </div>
</body>
</html>