<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<nav class="navbar navbar-expand-lg navbar-light" style="background: rgb(103, 152, 226);" > 
    <div class="container-fluid">
  <a class="navbar-brand" href="index.php" style="font-size:larger; font-family:sans-serif;">Home</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
 <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="aboutus.php" style="font-size:larger; font-family:sans-serif;">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" style="font-size:larger; font-family:sans-serif;"></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" style="font-size:larger; font-family:sans-serif;" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Quick Link
        </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="#">Moodle</a></li>
          <li><a class="dropdown-item" href="#">Feedback</a></li>
          <li><a class="dropdown-item" href="#">Fedena</a></li>
          <li><a class="dropdown-item" href="#">Academic Calender</a></li>
        </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="department.php" style="font-size:larger; font-family:sans-serif;">Department</a>
      </li>
    </li>
    <li class="nav-item">
      <a class="nav-link active" aria-current="page" href="gallery.php" style="font-size:larger; font-family:sans-serif;">Gallery</a>
    </li>
    <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="contact.php" style="font-size:larger; font-family:sans-serif;">Contact</a>
      </li>
    </ul>
    <form class="d-flex">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link active" href="signup.php">SIGN UP</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="signin.php">SIGN IN</a>
            </li>
        </ul>
    </form>
  </div>
</div>
</nav>

<body> 
    <center><h1> SIGN UP</h1> </center>
  <div class="container">
      <div class="row">
      <div class="col col-12 col-sm-6 col-md-4 col-lg-6 col-xl-12 col-xxl-12"></div>
      </div>
      </div>
    <table class="table table-borderless">
        
    <tr>
        <td>Name</td>
        <td><input type="text" class="form-control"></td>
    </tr>
    <tr>
        <td>Course</td>
        <td><input type="text" class="form-control"></td>
    </tr>
    <tr>
        <td>Dob</td>
        <td><input type="text" class="form-control"></td>
    </tr>
    <tr>
        <td>Phone No</td>
        <td><input type="text" class="form-control"></td>
    </tr>
    <tr>
        <td>Email Id</td>
        <td><input type="text" class="form-control"></td>
    </tr>
    <tr>
        <td>Password </td>
        <td><input type="password" class="form-control"></td>
    </tr>
     <tr>
            <td>Conform</td>
            <td><input type="password" class="form-control"></td>
    </tr>
    <tr>
        <td></td>
        <td><button class="btn btn-outline-success">Submit </button></td>
    </tr>
    
</table>
</body>
</html>