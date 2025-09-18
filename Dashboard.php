<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
     <link rel="stylesheet" href="Dashboard.css">
     <link rel="stylesheet" href="Buttons.css">
    <!-- Bootstrap JavaScript -->
     <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c">
     
</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">
                            <img src="Images\HomeOutline.png" alt="Home" width="30" height="30" class="d-inline-block align-text-top">
                            Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#" style="color:red;">
                            <img src="Images\LibraryOutline.png" alt="Library" width="30" height="30" class="d-inline-block align-text-top">
                            Library
                        </a>
                    </li> 
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">
                            <img src="Images\AchievementOutline.png" alt="Achievements" width="30" height="30" class="d-inline-block align-text-top">
                            Achievements
                        </a>
                    </li> 
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">
                            <img src="Images\LogsOutline.png" alt="Logs" width="30" height="30" class="d-inline-block align-text-top">
                            Logs
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">
                            <img src="Images\SettingsOutline.png" alt="Settings" width="30" height="30" class="d-inline-block align-text-top">
                            Settings
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">
                            <img src="Images\ProfileOutline.png" alt="Profile" width="30" height="30" class="d-inline-block align-text-top">
                            Profile
                        </a>
                    </li>
                </ul>

                <form class="d-flex">
                     <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
</body>