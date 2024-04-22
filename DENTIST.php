<!DOCTYPE html>
<html>
<head>
  <title>Dentist</title>
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
        <label for="employeeID"> Employee ID:</label>
        <input type="text" class="form-control" id="employeeID" name="employeeID" required>
      </div>

      <div class="form-group text" >
        <label for="empLastName">Last Name:</label>
        <input type="text" class="form-control" id="empLastName" name="empLastName" required>
      </div>

      <div class="form-group text" >
        <label for="empFirstName">First Name:</label>
        <input type="text" class="form-control" id="empFirstName" name="empFirstName" required>
      </div>

      <div class="form-group text" >
        <label for="title">Title:</label>
        <input type="text" class="form-control" id="title" name="title" required>
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
          <th>Employee ID</th>
          <th>Last Name</th>
          <th>First Name</th>
          <th>Title</th>
          <!-- Add table headers for other information -->
        </tr>
      </thead>
    </table>
  </div>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>