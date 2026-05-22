<?php

session_start();

if(!isset($_SESSION['user'])){
    header("Location: index.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Meta Tag -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dashboard | InternTrack</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

    <!-- Chart JS -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- External CSS -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

<!--  Navbar  -->

<nav class="navbar navbar-expand-lg bg-body-tertiary shadow-sm">

    <div class="container">

        <!-- Logo -->
        <a class="navbar-brand fw-bold"
           href="dashboard.php">

            <i class="bi bi-briefcase-fill"></i>
            InternTrack

        </a>

        <!-- Toggle -->
        <button class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent">

            <span class="navbar-toggler-icon"></span>

        </button>

        <!-- Navbar Content -->
        <div class="collapse navbar-collapse"
             id="navbarSupportedContent">

            <!-- Left -->
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <li class="nav-item">

                    <a class="nav-link active"
                       href="dashboard.php">

                        <i class="bi bi-speedometer2"></i>
                        Dashboard

                    </a>

                </li>

                <li class="nav-item">

                    <a class="nav-link"
                       href="applications.php">

                        <i class="bi bi-file-earmark-text"></i>
                        Applications

                    </a>

                </li>

                <li class="nav-item">

                    <a class="nav-link"
                       href="companies.php">

                        <i class="bi bi-buildings"></i>
                        Companies

                    </a>

                </li>

                <li class="nav-item">

                    <a class="nav-link text-danger"
                       href="logout.php">

                        <i class="bi bi-box-arrow-right"></i>
                        Logout

                    </a>

                </li>

            </ul>

            <!-- Right -->
            <div class="d-flex align-items-center">

                <span class="fw-semibold me-4">

                    Welcome, Admin 👋

                </span>

                <!-- Dark Mode -->
                <button class="dark-mode-toggle"
                        id="darkModeToggle">

                    <i class="bi bi-moon-stars-fill"
                       id="darkModeIcon"></i>

                </button>

            </div>

        </div>

    </div>

</nav>

<!-- Content  -->

<div class="container mt-4">

    <h2 class="fw-bold mb-4">
        Internship Overview
    </h2>

    <!-- Cards -->
    <div class="row text-center">

        <!-- Total -->
        <div class="col-md-3 mb-4">

            <div class="card shadow dashboard-card p-4">

                <i class="bi bi-file-earmark-text card-icon"></i>

                <h5>Total Applications</h5>

                <h2>9</h2>

            </div>

        </div>

        <!-- Accepted -->
        <div class="col-md-3 mb-4">

            <div class="card shadow dashboard-card p-4">

                <i class="bi bi-check-circle-fill card-icon"></i>

                <h5>Accepted</h5>

                <h2>3</h2>

            </div>

        </div>

        <!-- Pending -->
        <div class="col-md-3 mb-4">

            <div class="card shadow dashboard-card p-4">

                <i class="bi bi-hourglass-split card-icon"></i>

                <h5>Pending</h5>

                <h2>4</h2>

            </div>

        </div>

        <!-- Rejected -->
        <div class="col-md-3 mb-4">

            <div class="card shadow dashboard-card p-4">

                <i class="bi bi-x-circle-fill card-icon"></i>

                <h5>Rejected</h5>

                <h2>2</h2>

            </div>

        </div>

    </div>

    <!-- Progress -->
    <div class="card shadow p-4 mt-3">

        <h5>
            Internship Goal Progress
        </h5>

        <div class="progress mt-3 w-75 mx-auto"
             style="height:25px;">

            <div class="progress-bar"
                 style="width:33%;">

                33%

            </div>

        </div>

    </div>

  <!-- Pie Chart -->

<div class="card shadow p-4 mt-4">

    <h4 class="mb-4 text-center">
        Application Status
    </h4>

    <div class="d-flex justify-content-center">

        <canvas id="myChart"
                width="300"
                height="300"></canvas>

    </div>

</div>

   <!-- Bar Chart -->

<div class="card shadow p-4 mt-4 chart-card">

    <h4 class="mb-4 text-center">
        Applications by Company
    </h4>

    <div class="d-flex justify-content-center align-items-center">

        <canvas id="barChart"
        width="300"
        height="300"></canvas>

    </div>

</div>

<!-- Footer -->
<footer class="text-center p-3 mt-5">

    © 2026 InternTrack System

</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

<!--  Pie Chart  -->

<script>

const ctx = document.getElementById('myChart');

new Chart(ctx, {

    type: 'pie',

    data: {

        labels: [
            'Accepted',
            'Pending',
            'Rejected'
        ],

        datasets: [{

            radius: '65%',

            data: [3,4,2],

            backgroundColor: [
                '#198754',
                '#ffc107',
                '#dc3545'
            ]

        }]

    },

    options: {

        responsive: false,

        plugins: {

            legend: {

                position: 'top',

                labels: {

                    boxWidth: 10,
                    padding: 8

                }

            }

        }

    }

});

</script>

<!--  Bar Chart  -->

<script>

const barCtx = document.getElementById('barChart');

new Chart(barCtx, {

    type: 'bar',

    data: {

        labels: [
            'Shopee',
            'Petronas',
            'Google',
            'Grab',
            'Microsoft'
        ],

        datasets: [{

            data: [5,3,7,2,4],

            backgroundColor: [

                '#ee4d2d',
                '#00a19c',
                '#4285F4',
                '#00b14f',
                '#fcc400'

            ],

            borderRadius: 8

        }]

    },

    options: {

        responsive: false,

        plugins: {

            legend: {

                display: false

            }

        },

        scales: {

            y: {

                beginAtZero: true,

                ticks: {

                    stepSize: 1

                }

            }

        }

    }

});

</script>

</script>

<!--  Dark Mode  -->

<script>

const darkModeToggle = document.getElementById('darkModeToggle');
const darkModeIcon = document.getElementById('darkModeIcon');
const htmlElement = document.documentElement;

/* Check Theme */
const currentTheme =
      localStorage.getItem('theme') || 'light';

htmlElement.setAttribute(
    'data-bs-theme',
    currentTheme
);

updateIcon(currentTheme);

/* Toggle */
darkModeToggle.addEventListener('click', () => {

    const currentTheme =
          htmlElement.getAttribute('data-bs-theme');

    const newTheme =
          currentTheme === 'light'
          ? 'dark'
          : 'light';

    htmlElement.setAttribute(
        'data-bs-theme',
        newTheme
    );

    localStorage.setItem(
        'theme',
        newTheme
    );

    updateIcon(newTheme);

});

/* Icon */
function updateIcon(theme){

    if(theme === 'dark'){

        darkModeIcon.className =
        'bi bi-sun-fill';

    }else{

        darkModeIcon.className =
        'bi bi-moon-stars-fill';

    }

}

</script>

</body>
</html>