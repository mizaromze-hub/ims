<?php

session_start();

$error = "";

if(isset($_POST['login'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username == "admin" && $password == "1234"){

        $_SESSION['user'] = $username;

        header("Location: dashboard.php");
        exit();

    }else{

        $error = "Invalid username or password!";

    }

}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>InternTrack Login</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body id="vanta-bg">

<div class="d-flex justify-content-center align-items-center vh-100">

    <div class="card shadow-lg border-0 card-login">

        <div class="card-body p-5">

            <div class="text-center mb-4">

                <i class="bi bi-briefcase-fill login-icon"></i>

                <h2 class="fw-bold mt-3">
                    InternTrack
                </h2>

                <p class="text-muted">
                    Internship Application Tracker
                </p>

            </div>

            <form method="POST">

                <div class="mb-3">

                    <label class="form-label">
                        Username
                    </label>

                    <input type="text"
                           name="username"
                           class="form-control"
                           placeholder="Enter your username">

                </div>

                <div class="mb-3">

                    <label class="form-label">
                        Password
                    </label>

                    <input type="password"
                           name="password"
                           class="form-control"
                           placeholder="Enter your password">

                </div>

                <p class="text-danger small">

                    <?php echo $error; ?>

                </p>

                <div class="d-grid">

                    <button type="submit"
                            name="login"
                            class="btn btn-primary">

                        Login

                    </button>

                </div>

            </form>

        </div>

    </div>

</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

<!-- Vanta JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r134/three.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.clouds.min.js"></script>

<script>

VANTA.CLOUDS({

  el: "#vanta-bg",

  mouseControls: true,
  touchControls: true,
  gyroControls: false,

  minHeight: 200.00,
  minWidth: 200.00,

  skyColor: 0x5686ff,
  cloudColor: 0xffffff,
  cloudShadowColor: 0x183550,

  speed: 1.20

})

</script>

</body>
</html>