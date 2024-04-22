<!DOCTYPE html>
<html>
<head>
  <title>Appointments</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
  <style>
    body {
      background-image: url("admin.panel.png");
      background-size: cover;
    }

    label {
      font-family: 'Georgia', serif;
      font-size: 20px;
      color: black;
      text-align: left;
    }

    table {
      font-family: 'Georgia', serif;
      font-size: 20px;
      color: solid black;
      border-collapse: collapse;
      width: 100%;
      border: 1px solid black;
      text-align: center;
    }

    th, td {
      border: 1px solid black;
      padding: 10px;

    }

    .button-container {
      color: black;
      font-family: 'Georgia', serif;
      text-align: center;
    }

    .btn-primary {
      background-color: skyblue;
      border-color: skyblue;
      color: black;
      font-family: 'Georgia', serif;
      font-size: 20px;
    }


    .btn-update {
      background-color: yellow;
      border-color: yellow;
      color: black;
      font-family: 'Georgia', serif;
      font-size: 20px;
    }

    .btn-cancel {
      background-color: lightgray;
      border-color: lightgray;
      color: black;
      font-family: 'Georgia', serif;
      font-size: 20px;
    }

    .btn-delete {
      background-color: red;
      border-color: red;
      color: black;
      font-family: 'Georgia', serif;
      font-size: 20px;
    }

    .btn-secondary{
      background-color: transparent;
      border-color: transparent;
      color: grey;
      font-family: 'Georgia', serif;
      font-size: 20px;
    }

    .btn-back{
      background-color: red;
      border-color: transparent;
      color: grey;
      font-family: 'Georgia', serif;
      font-size: 20px;
    }

    .form-group {
      font-family: 'Georgia', serif;
      font-size: 20px;
      margin-bottom: 20px;
      margin-left: 250px;
    }

    .form-group label {
      font-family: 'Georgia', serif;
      font-size: 20px;
      margin-bottom: 20px;
      margin-left: 20px;
      font-weight: bold;
    }

    .form-control {
      width: 70%;
    }
  </style>
</head>
<body>
  
  <!-- Navigation Bar -->
  <nav class="navbar navbar-expand-lg navbar-light">
  <ul class="navbar-nav mr-auto">
    <li class="nav-item">
      <a class="nav-link btn btn-secondary" href="admin_panel.php"><b>Back</b></a>
    </li>
  </ul>
  <ul class="navbar-nav ml-auto">
    <li class="nav-item">
      <a class="nav-link btn btn-back" href="admin_login.php"><b>Log Out</b></a>
    </li>
  </ul>
</nav>

  <div class="container mt-4">
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <!-- CRUD Form -->
    <form method="post" action="crud.php">
      <div class="form-group text" >
        <label for="appointmentID">Appointment ID:</label>
        <input type="text" class="form-control" id="appointmentID" name="appointmentID" required>
      </div>

      <div class="form-group">
        <label for="patientID">Patient ID:</label>
        <input type="text" class="form-control" id="patientID" name="patientID" required>
      </div>

      <div class="form-group">
        <label for="date">Date:</label>
        <input type="date" class="form-control datepicker" id="date" name="date" required>
      </div>

      <div class="form-group">
        <label for="time">Time</label>
        <input type="time" class="form-control" id="time">
      </div>

      <!-- Add more input fields for other information -->

      <div class="button-container">
        <button type="submit" class="btn btn-primary">Save</button>
        <button type="button" class="btn btn-update">Update</button>
        <button type="button" class="btn btn-delete">Delete</button>
        <button type="button" class="btn btn-cancel">Cancel</button>
      </div>
    </form>

    <!-- Display Table -->
    <table class="table mt-4">
      <thead>
        <tr>
          <th>Appointment ID</th>
          <th>Patient ID</th>
          <th>Date</th>
          <th>Time</th>

          <!-- Add table headers for other information -->
        </tr>
      </thead>
    </table>
  </div>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
  <script>
    // Initialize datepicker
    $(document).ready(function() {
      $('.datepicker').datepicker({
        format: 'yyyy-mm-dd',
        autoclose: true,
        todayHighlight: true
      });
    });
  </script>
</body>
</html>