<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" 
    crossorigin="anonymous">

    <title>Bill Report</title>
    <link href="login.css" rel="stylesheet">
  </head>
  <body class="text-center">
    <main class="form-signin">
      <form method="post">
        <img class="mb-4" src="image/logo.png" alt="logo">
        <h1 class="h3 mb-3 fw-normal"><b>Bill Report Power BI</b></h1>
    
        <div class="form-floating mt-4">
          <input type="email" class="form-control" id="username" name="username" placeholder="name@example.com">
          <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating mt-1">
          <input type="password" class="form-control" id="password" name="password" placeholder="Password">
          <label for="floatingPassword">Password</label>
        </div>
        <div class="form-floating mt-1">
          <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Password">
          <label for="floatingPassword">Confirm Password</label>
        </div>
    
        <button class="w-100 btn btn-lg btn-primary mt-3" type="submit"><b>REGISTER</b></button>
        <p class="mt-5 mb-3 text-muted"><a href='login.php'>BACK</a></p>
      </form>
    </main>
  </body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'db.php'; // เชื่อมต่อกับฐานข้อมูล
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if ($password == $confirm_password) {
        $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('ลงทะเบียนสำเร็จ');</script>";
        } else {
            echo "<script>alert('Error: " . $sql . "<br>" . $conn->error . "');</script>";
        }
    } else {
        echo "<script>alert('Password และ Confirm Password ไม่ตรงกัน');</script>";
    }
    $conn->close();
}
?>
