<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NAVBAR</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary pt-3">
  <div class="container-fluid">
    <img src="https://th.bing.com/th/id/OIP.km2NfislvdN204xtV2ppEgHaHa?w=185&h=184&c=7&r=0&o=5&dpr=1.3&pid=1.7" width="60px">
    <h1 class="navbar-brand mx-2"> <b>EVENT CALENDAR</b></h1>
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="btn btn-outline-dark mx-2 d-inline-flex focus-ring focus-ring-dark py-1 px-2 text-decoration-none border rounded-2" aria-current="page" href="index.php">HOME</a>
        </li>
        <!-- class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover" -->
        <li class="nav-item">
        <a class="btn btn-outline-dark mx-2 d-inline-flex focus-ring focus-ring-dark py-1 px-2 text-decoration-none border rounded-2" aria-current="page" href="aboutUs.php">ABOUT US</a>
        </li>
</ul>
    <form class="d-flex" >
        <a class="btn btn-outline-dark mx-2 d-inline-flex focus-ring focus-ring-dark py-1 px-2 text-decoration-none border rounded-2" type="submit" href="signup.php">SIGN UP</a>
        <a class="btn btn-outline-dark mx-2 d-inline-flex focus-ring focus-ring-dark py-1 px-2 text-decoration-none border rounded-2" type="submit" href="loginPage.php">LOGIN</a>
        <a class="btn btn-outline-dark mx-2 d-inline-flex focus-ring focus-ring-dark py-1 px-2 text-decoration-none border rounded-2" type="submit" href="logout.php">LOGOUT</a>
    </form>
  </div>
</nav>
</body>
</html>
