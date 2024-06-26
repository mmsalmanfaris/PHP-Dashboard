<?php
  $msg = "";

  require_once 'dbcon.php';

  if ($_SERVER["REQUEST_METHOD"] == 'POST'){
    $name = $_POST["name"];
    $city = $_POST["city"];
    $gender = "";
    if($_POST["gender"] == 'male'){
      $gender = "Male";
    }
    else{
      $gender = "Female";
    }
    $username = $_POST["username"];
    $password = $_POST["password"];

    $qry = "INSERT INTO tbluser(Name, City, Gender, Username, Password) VALUES('$name', '$city', '$gender', '$username', '$password')";

    $res = $con->query($qry);

    if(!$res){
      die("Error");
    }

    // $msg = "success";
    // echo "Saved Successfully";

    header('Location: view.php');

  }
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Basic Register Form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  <div class="d-flex justify-content-center vh-100 align-items-center">
    <div class="card p-5">
      <h1>Registration Form</h1>

      <hr>

      <form action="" method="POST">
        <div class="form-group mb-3">
          <label for="" class="form-label">Name</label>
          <input type="text" name="name" id="" class="form-control" required>
        </div>
        <div class="form-group mb-3">
          <label for="" class="form-label">City</label>
          <input type="text" name="city" id="" class="form-control" required>
        </div>

        <div class="form-group mb-3">
          <input type="radio" name="gender" id="" class="" value="male">
          <label for="" class="form-label">Male</label>
          <input type="radio" name="gender" id="" class="" value="female">
          <label for="" class="form-label">Female</label>
        </div>

        <div class="form-group mb-3">
          <label for="" class="form-label">User Name</label>
          <input type="text" name="username" id="" class="form-control" required>
        </div>
        <div class="form-group mb-3">
          <label for="" class="form-label">Password</label>
          <input type="text" name="password" id="" class="form-control" required>
        </div>
        <input type="submit" name="register" class="btn btn-primary w-100">

        <a href="view.php" class="btn btn-primary"> View Data</a>
      </form>

    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

<?php
  // if($msg == "success"){
  //   echo"
  //   <script>
  //   Swal.fire({
  //     title: 'Good job!',
  //     text: 'You clicked the button!',
  //     icon: 'success'
  //   });
  //   </script>";
  // }
?>