<!DOCTYPE html>
<html>
<head>
  <title>Dental Clinic</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    body {
      background-image: url("mainpage.png");
      background-size: cover;
    }

    .logo-container {
      display: flex;
      justify-content: center;
      align-items: center;
      margin-bottom: 20px;
    }

    .logo img {
      max-width: 500px;
      margin-top: 300px;
      margin-right: 10px;
      border-radius: 50%;
      object-fit: cover;
      height: 350px;
      width: 350px;
    }

    .btn-primary {
      background-color: transparent;
      border-color: transparent;
      color: black;
      font-family: 'Georgia', serif;
      font-size: 25px;
    }
    
  </style>
</head>

<body>
  <div class="logo-container">
    <div class="logo">
      <img src="logo2.png" alt="Logo">
    </div>
  </div>

  <br>
  <div class="text-center">
    <a href="login.php" class="btn btn-primary">LOGIN</a>
    <a href="admin_login.php" class="btn btn-primary">ADMIN</a>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>