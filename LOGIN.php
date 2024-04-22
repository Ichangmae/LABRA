<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Define username & password
    $username = "user1";
    $password = "010221";

    // Get USERNAME & PASSWORD
    $submittedUsername = $_POST["username"];
    $submittedPassword = $_POST["password"];

    // Check if the submitted USERNAME & PASSWORD match the defined credentials
    if ($submittedUsername == $username && $submittedPassword == $password) {
        // Start a session & store the USERNAME in it
        session_start();
        $_SESSION["username"] = $submittedUsername;

        // Redirect the user to the homepage
        header("Location: homepage.php");
        exit();
    } else {
        // Display an error message
        $errorMessage = "Invalid username or password.";
    }
}

// Handle logout action
if (isset($_GET['action']) && $_GET['action'] == 'logout') {
    // Destroy the session
    session_start();
    session_destroy();

    // Redirect back to the login page
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>LOGIN PAGE</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
         body {
            background-image: url("user.login.png");
            background-size: cover;
        }

        .login-container {
            font-family: 'Georgia', serif;
            font-size: 30px;
            max-width: 800px;
            margin: 0 auto;
            margin-top: 70px;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
        }

        .logo {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
        }

        .logo img {
            width: 250px;
            height: 250px;
            margin-top: 150px;
            border-radius: 50%;
        }

        .error-message {
            color: red;
            text-align: center;
            margin-top: 10px;
        }

        .form-group {
            font-family: 'Georgia', serif;
            font-size: 20px;
            margin-bottom: 20px;
            margin-left: 210px;

        }

        .form-group label {
            font-family: 'Georgia', serif;
            font-weight: bold;
        }

        .form-control {
            width: 60%;
            font-size: 25px;
            padding: 12px 20px;
            height: auto;
        }

        .btn-primary {
      background-color: transparent;
      border-color: transparent;
      color: black;
      font-family: 'Georgia', serif;
      font-size: 25px;
    }

    .btn-secondary {
            background-color: transparent;
            border-color: transparent;
            color: black;
            font-family: 'Georgia', serif;
            font-size: 25px;
        }

    </style>
</head>

<body>
    <div class="login-container">
        <div class="logo">
            <img src="logo2.png" alt="Logo">
        </div>

        <?php if (isset($errorMessage)) { ?>
            <p class="error-message"><?php echo $errorMessage; ?></p>
        <?php } ?>

        <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">

            <div class="form-group">
                <label for="username"><b>USERNAME:<b></label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>

            <div class="form-group">
                <label for="password"><b>PASSWORD:<b></label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>

            <div class="text-center">
                <input type="submit" class="btn btn-primary" value="Login">
                <button type="button" class="btn btn-secondary" onclick="goToMainPage()">Cancel</button>
            </div>
        </form>
    </div>

    <script>
        function goToMainPage() {
            window.location.href = "main_page.php";
        }
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>