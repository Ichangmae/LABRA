<!DOCTYPE html>
<html>
<head>
  <title>Dental Clinic - Appointment</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <style>
    body {
      background-image: url("APPOINTMENTS.png");
      background-size: cover;
    }

    .message-container {
      display: flex;
      align-items: center;
      justify-content: center;
      margin-top: 100px;
    }

    .message {
      font-size: 25px;
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

    .transaction-container {
      font-family: 'Georgia', serif;
      border-radius: 10px;
      padding: 20px;
      margin-top: 270px;
      max-width: 800px;
      text-align: left;
      margin-left: 700px;
      margin-right: 0px;
      font-size: 28px;
    }

    .form-group {
      margin-bottom: 20px;
    }

    .form-group label {
      font-weight: bold;
    }

    .form-control {
      width: 90%;
      font-size: 20px;
      padding: 10px 20px;
      height: auto; 
    }

    .btn {
      width: 25%;
      font-size: 20px;
      padding: 10px 20px;
      height: auto; 
    }
    
  </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Dental Clinic</a>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="homepage.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="services.php">Services</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="appointment.php">Appointment</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact</a>
        </li>
      </ul>
    </div>
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="login.php">Log Out</a>
      </li>
    </ul>
  </nav>

  <div class="transaction-container">
    <form>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="last-name">Last Name:</label>
          <input type="text" class="form-control" id="last-name" placeholder=" ">
        </div>
        <div class="form-group col-md-6">
          <label for="first-name">First Name:</label>
          <input type="text" class="form-control" id="first-name" placeholder=" ">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="age">Age:</label>
          <input type="text" class="form-control" id="age" placeholder=" ">
        </div>
        <div class="form-group col-md-6">
          <label for="service">Service</label>
          <select class="form-control" id="service">
            <option value="dental_bonding"> </option>
            <option value="dental_bonding">Dental Bonding - P3,000</option>
            <option value="dental_crowns">Dental Crowns - P5,000</option>
            <option value="bridgework">Bridgework - P3,000</option>
            <option value="cosmetic_fillings">Cosmetic Fillings - P7,000</option>
            <option value="root_canal_therapy">Root Canal Therapy - P9,000</option>
            <option value="invisalign">Invisalign - P8,000</option>
            <option value="dental_veneers">Dental Veneers - P8,000</option>
            <option value="teeth_cleanings">Teeth Cleanings - P2,000</option>
            <option value="dentures">Dentures - P4,000</option>
            <option value="teeth_whitening">Teeth Whitening - P5,000</option>
            <option value="tooth_extractions">Tooth Extractions - 8,000</option>
          </select>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="phone">Phone No:</label>
          <input type="text" class="form-control" id="phone" placeholder=" ">
        </div>
        <div class="form-group col-md-6">
          <label for="address">Address:</label>
          <input type="text" class="form-control" id="address" placeholder=" ">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="date">Date</label>
          <input type="date" class="form-control" id="date">
        </div>
        <div class="form-group col-md-6">
          <label for="time">Time</label>
          <input type="time" class="form-control" id="time">
        </div>
      </div>
      <button type="submit" class="btn btn-primary"><b>SUBMIT<b></button>
    </form>
  </div>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>