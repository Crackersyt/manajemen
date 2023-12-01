<?php
require_once('fungsi.php');

if(!empty($_SESSION["id"])){
  header("Location: dashboard.html");
}

$login = new Login();

if(isset($_POST["submit"])){
  $result = $login->login($_POST["username"], $_POST["password"]);

  if($result == 1){
    $_SESSION["login"] = true;
    $_SESSION["id"] = $login->idUser();
    header("Location: dashboard.html");
  }
  elseif($result == 10){
    echo
    "<script> alert('Password Salah'); </script>";
  }
  elseif($result == 100){
    echo
    "<script> alert('Pengguna tidak terdaftar'); </script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
  
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Fonts -->

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,400;0,700;1,300;1,700&family=Roboto:wght@300&display=swap"
      rel="stylesheet"
    />

    <!-- icons -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
      integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <!-- css -->
    <link rel="stylesheet" href="css/style.css" />

    <title>Document</title>
  </head>
  <body>
    
    <div class="container">
      <h1>Login</h1>

      <!-- Form -->
      <form action="" class="form" method="POST">
        <!-- Username Start -->

        <div class="user-box">
          <div class="user-icon">
            <i class="fa-solid fa-user"></i>
          </div>
          <div class="user-input">
            <input type="text" class="input-us" name="username" id="username" placeholder="Username" />
          </div>
        </div>

        <!-- Password start -->
        <div class="password-box">
          <div class="password-icon">
            <i class="fa-solid fa-lock"></i>
          </div>
          <div class="password-input">
            <input
              type="password"
              class="pass-input"
              name="password"
              id="password"
              placeholder="password"
            />
          </div>
        </div>

        <!-- Login submit -->
        <button type="submit" name="submit"class="btn">Login</button>

        <!-- Register -->
        <div class="daftar">
          <p>
            Belum punya akun? <a href="#" class="register">Daftar disini</a>
          </p>
        </div>
      </form>
    </div>
  </body>
</html>
