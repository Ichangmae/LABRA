<!DOCTYPE html>
<html>
<head>
  <title>Dental Clinic - Services</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <style>
    body {
      background-image: url("service.png");
      background-size: cover;
      background-repeat: no-repeat;
    }


    .message-container {
      display: flex;
      align-items: center;
      justify-content: center;
      margin-top: 100px;
    }

    .message {
      font-size: 24px;
      color: white;
      margin-top: 50px;
      margin-left: 30px;
    }

    .navbar-nav {
      flex-direction: row;
      justify-content: flex-start;
    }

    .navbar-nav .nav-item {
      margin-right: 10px;
    }

    .navbar-nav .nav-link {
      color: gray;
    }

    .navbar-nav .nav-link.active {
      color: gray;
    }

    .navbar-brand {
      color: gray;
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Dental Clinic</a>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mr-auto"> <!-- Use 'mr-auto' class to push items to the left -->
        <li class="nav-item">
          <a class="nav-link" href="homepage.php">Home</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="services.php">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="appointment.php">Appointment</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact</a>
        </li>
      </ul>
    </div>
    <ul class="navbar-nav"> <!-- Move the logout button outside the 'navbarNav' div -->
      <li class="nav-item">
        <a class="nav-link" href="login.php">Log Out</a>
      </li>
    </ul>
  </nav>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>