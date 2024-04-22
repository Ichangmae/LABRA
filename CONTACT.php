<!DOCTYPE html>
<html>
<head>
  <title>Dental Clinic - Contact</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <style>
    body {
      background-image: url("contact.png");
      background-size: cover;
    }

    .container {
      max-width: 600px;
      margin-top: 40px;
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
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="homepage.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="services.php">Services</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link text-secondary" href="appointment.php">Appointment</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="contact.php">Contact</a>
        </li>
      </ul>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="login.php">Log Out</a>
        </li>
      </ul>
    </div>
  </nav>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>