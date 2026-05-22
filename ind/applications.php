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

    <title>Applications | InternTrack</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    <!-- Google Font : Roboto -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

<!-- ================= Navbar ================= -->

<nav class="navbar navbar-expand-lg bg-body-tertiary shadow-sm">

    <div class="container">

        <!-- Logo -->
        <a class="navbar-brand fw-bold" href="dashboard.php">

            <i class="bi bi-briefcase-fill"></i> InternTrack

        </a>

        <!-- Mobile Toggle -->
        <button class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent">

            <span class="navbar-toggler-icon"></span>

        </button>

        <!-- Navbar Content -->
        <div class="collapse navbar-collapse"
             id="navbarSupportedContent">

            <!-- Left Menu -->
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <li class="nav-item">

                    <a class="nav-link"
                       href="dashboard.php">

                        <i class="bi bi-speedometer2"></i>
                        Dashboard

                    </a>

                </li>

                <li class="nav-item">

                    <a class="nav-link active"
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

              <!-- Right Side -->
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

<!-- ================= Applications Content ================= -->

<div class="container mt-4">

    <h3 class="mb-4">
        Internship Applications
    </h3>

    <!-- Search -->
    <input type="text"
           class="form-control mb-4"
           placeholder="Search company or position...">

    <!-- Table -->
    <table class="table table-bordered table-hover">

        <thead class="table-dark">

            <tr>

                <th>Company</th>
                <th>Position</th>
                <th>Location</th>
                <th>Allowance</th>
                <th>Status</th>

            </tr>

        </thead>

        <tbody>

            <tr>

                <td>Shopee</td>
                <td>UI/UX Intern</td>
                <td>Kuala Lumpur</td>
                <td>RM1200</td>

                <td>
                    <span class="badge bg-warning">
                        Pending
                    </span>
                </td>

            </tr>

            <tr>

                <td>Petronas</td>
                <td>Web Developer Intern</td>
                <td>KLCC</td>
                <td>RM1500</td>

                <td>
                    <span class="badge bg-success">
                        Accepted
                    </span>
                </td>

            </tr>

            <tr>

                <td>AirAsia</td>
                <td>Marketing Intern</td>
                <td>Sepang</td>
                <td>RM1000</td>

                <td>
                    <span class="badge bg-success">
                        Accepted
                    </span>
                </td>

            </tr>

            <tr>

                <td>Maxis</td>
                <td>Data Analyst Intern</td>
                <td>Cyberjaya</td>
                <td>RM1300</td>

                <td>
                    <span class="badge bg-danger">
                        Rejected
                    </span>
                </td>

            </tr>

            <tr>

                <td>Maybank</td>
                <td>Finance Intern</td>
                <td>Kuala Lumpur</td>
                <td>RM900</td>

                <td>
                    <span class="badge bg-warning">
                        Pending
                    </span>
                </td>

            </tr>

            <tr>

                <td>CelcomDigi</td>
                <td>Software Intern</td>
                <td>Subang</td>
                <td>RM1400</td>

                <td>
                    <span class="badge bg-warning">
                        Pending
                    </span>
                </td>

            </tr>

            <tr>
                <td>Google</td>
                <td>Software Engineer Intern</td>
                <td>Singapore</td>
                <td>RM3000</td>

                <td>
                    <span class="badge bg-success">
                        Accepted
                    </span>
                </td>
            </tr>

            <tr>
                <td>Microsoft</td>
                <td>Cloud Engineer Intern</td>
                <td>Kuala Lumpur</td>
                <td>RM2800</td>
                <td><span class="badge bg-warning">
                    Pending
                </span>
                </td>
            </tr>

            <tr>
                <td>Grab</td>
                <td>Mobile App Developer Intern</td>
                <td>Petaling Jaya</td>
                <td>RM1800</td>
                <td><span class="badge bg-danger">
                    Rejected
                </span>
             </td>
            </tr>

        </tbody>

    </table>

<script>

const searchInput = document.querySelector('.form-control');

searchInput.addEventListener('keyup', function(){

    const filter = searchInput.value.toLowerCase();

    const rows = document.querySelectorAll('tbody tr');

    rows.forEach(row => {

        const text = row.textContent.toLowerCase();

        row.style.display =
            text.includes(filter)
            ? ''
            : 'none';

    });

});

</script>

</div>

<!-- Footer -->
<footer class="text-center p-3 mt-5">

    © 2026 InternTrack System

</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

<!-- Dark Mode -->
<script>

const darkModeToggle = document.getElementById('darkModeToggle');
const darkModeIcon = document.getElementById('darkModeIcon');
const htmlElement = document.documentElement;

const currentTheme = localStorage.getItem('theme') || 'light';

htmlElement.setAttribute('data-bs-theme', currentTheme);

updateIcon(currentTheme);

darkModeToggle.addEventListener('click', () => {

    const currentTheme = htmlElement.getAttribute('data-bs-theme');

    const newTheme = currentTheme === 'light'
                     ? 'dark'
                     : 'light';

    htmlElement.setAttribute('data-bs-theme', newTheme);

    localStorage.setItem('theme', newTheme);

    updateIcon(newTheme);

});

function updateIcon(theme){

    if(theme === 'dark'){

        darkModeIcon.className = 'bi bi-sun-fill';

    }else{

        darkModeIcon.className = 'bi bi-moon-stars-fill';

    }

}

</script>

</body>
</html>