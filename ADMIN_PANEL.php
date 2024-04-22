<!DOCTYPE html>
<html>
<head>
  <title>Admin Panel</title>
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
      margin-left: 0px;
      margin-right: 900px;
    }

    th, td {
      border: 2px solid black;
      padding: 10px;
    }

    .button-container {
      color: black;
      font-family: 'Georgia', serif;
      text-align: center;
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      align-items: center;
      margin-top: 50px;
      
    }

    .btn-primary {
      background-color: transparent;
      border-color: transparent;
      color: black;
      font-family: 'Georgia', serif;
      font-size: 30px;
      padding: 30px 30px;
      margin-top: 50px;
      border-radius: 10px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
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
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link btn btn-back" href="admin_login.php"><b>Log Out<b></a>
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

    <!-- Button Container -->
    <div class="button-container">
      <div class="row">
        <div class="col-md-4">
          <a href="patient_records.php" class="btn btn-primary">PATIENT RECORDS</a>
        </div>
        <div class="col-md-4">
          <a href="appointments.php" class="btn btn-primary">APPOINTMENTS</a>
        </div>
        <div class="col-md-4">
          <a href="appointment_procedures.php" class="btn btn-primary">APPOINTMENT PROCEDURES</a>
        </div>
      </div>
        <div class="col-md-4">
          <a href="procedures.php" class="btn btn-primary">PROCEDURES</a>
        </div>
        <div class="col-md-4">
          <a href="dentist.php" class="btn btn-primary">DENTIST</a>
        </div>
        <div class="col-md-4">
          <a href="payments.php" class="btn btn-primary">PAYMENT</a>
        </div>

        <!-- PHP code to fetch and display data from the database -->
        <?php
        
        ?>
      </tbody>
    </table>

  </div>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  
</body>
</html>