<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>

    <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
     <link rel="stylesheet" href="SignUp.css">
     <link rel="stylesheet" href="Buttons.css">
    <!-- Bootstrap JavaScript -->
     <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c">
     
</head>

<body>

<div class="container">
    <h1>Sign Up</h1>
    <p>and create your account today!</p>


    <form class="row g-3">
        <!-- FIRST NAME -->
    <div class="col-md-6">
        <label for="inputFirstName4" class="form-label">First Name</label>
        <input type="email" class="form-control" id="inputEmail4">
    </div>
    <!-- LAST NAME -->
    <div class="col-md-6">
        <label for="inputLastName4" class="form-label">Last Name</label>
        <input type="password" class="form-control" id="inputPassword4">
    </div>
    <!-- EMAIL -->
    <div class="col-12">
        <label for="inputEmail" class="form-label">Email Address</label>
        <input type="text" class="form-control" id="inputEmail" placeholder="address@email.com">
    </div>
    <!-- USERNAME -->
    <div class="col-12">
        <label for="inputUsername" class="form-label">Username</label>
        <input type="text" class="form-control" id="inputUsername">
    </div>
    <!-- PASSWORD -->
    <div class="col-12">
        <label for="inputPassword" class="form-label">Password</label>
        <input type="text" class="form-control" id="inputPassword">
        <p class="form-text" style="font-size:15px; color:#212020;">Password must be at least 6 characters</p>
    </div>
    <!-- BUTTON -->
    <div class="col-12">
        <a href="Welcome.php">
            <button class="btn-signup" type="button">Signup</button>
        </a>
    </div>
    </form>

    <div class="d-flex align-items-center justify-content-center" style="height: 100%; margin-top:10px;">
        <p class="mx-4"> Already have an account? </p>
        <a href="LogIn.php">
            <button class="btn-login" type="submit">Login</button>
        </a>
    </div>
</div>

</body>