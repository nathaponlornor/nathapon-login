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
    
        <button class="w-100 btn btn-lg btn-primary mt-3" type="submit"><b>LOGIN</b>
        <a href='bi.html'></a></button>
        
        <p class="mt-5 mb-3 text-muted">
        <a href='regis.php'>Don't have an account? REGISTER HERE!</a></p>
      </form>
    </main>
  </body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'db.php'; // เชื่อมต่อกับฐานข้อมูล
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT id FROM users WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        header("Location: http://nathapon.com/fendfind");
        exit();
    } else {
        echo "<script>alert('Username หรือ Password ไม่ถูกต้อง');</script>";
    }
    $conn->close();
}
?>
