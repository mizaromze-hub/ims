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

    <title>Companies | InternTrack</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

<!-- Navbar -->

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

                    <a class="nav-link"
                       href="applications.php">

                        <i class="bi bi-file-earmark-text"></i>
                        Applications

                    </a>

                </li>

                <li class="nav-item">

                    <a class="nav-link active"
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

<!--  Companies Content  -->

<div class="container mt-4">

    <h2 class="fw-bold mb-4">
        Internship Companies
    </h2>

    <div class="row">

        <!-- Shopee -->
        <div class="col-md-4 mb-4">

            <div class="card shadow p-4 company-card">

                <h4>
                    <i class="bi bi-shop"></i>
                    Shopee
                </h4>

                <p><strong>Industry:</strong> E-Commerce</p>
                <p><strong>Location:</strong> Kuala Lumpur</p>
                <p><strong>Internship:</strong> UI/UX, Marketing</p>
                <p><strong>Allowance:</strong> RM1200</p>

                <button class="btn btn-primary w-100 mt-2"
                        data-bs-toggle="modal"
                        data-bs-target="#shopeeModal">

                    View Details

                </button>

            </div>

        </div>

        <!-- Petronas -->
        <div class="col-md-4 mb-4">

            <div class="card shadow p-4 company-card">

                <h4>
                    <i class="bi bi-fuel-pump"></i>
                    Petronas
                </h4>

                <p><strong>Industry:</strong> Oil & Gas</p>
                <p><strong>Location:</strong> KLCC</p>
                <p><strong>Internship:</strong> Web Development</p>
                <p><strong>Allowance:</strong> RM1500</p>

                <button class="btn btn-primary w-100 mt-2"
                        data-bs-toggle="modal"
                        data-bs-target="#petronasModal">

                    View Details

                </button>

            </div>

        </div>

        <!-- AirAsia -->
        <div class="col-md-4 mb-4">

            <div class="card shadow p-4 company-card">

                <h4>
                    <i class="bi bi-airplane"></i>
                    AirAsia
                </h4>

                <p><strong>Industry:</strong> Aviation</p>
                <p><strong>Location:</strong> Sepang</p>
                <p><strong>Internship:</strong> Marketing</p>
                <p><strong>Allowance:</strong> RM1000</p>

                <button class="btn btn-primary w-100 mt-2"
                        data-bs-toggle="modal"
                        data-bs-target="#airasiaModal">

                    View Details

                </button>

            </div>

        </div>

        <!-- Maxis -->
        <div class="col-md-4 mb-4">

             <div class="card shadow p-4 company-card">

                <h4>
                    <i class="bi bi-broadcast"></i>
                    Maxis
                </h4>

                <p><strong>Industry:</strong> Telecommunications</p>
                <p><strong>Location:</strong> Cyberjaya</p>
                <p><strong>Internship:</strong> Data Analyst</p>
                <p><strong>Allowance:</strong> RM1300</p>

                <button class="btn btn-primary w-100 mt-2"
                        data-bs-toggle="modal"
                        data-bs-target="#maxisModal">

                    View Details

        </button>

    </div>

</div>

        <!-- Maybank -->
        <div class="col-md-4 mb-4">

            <div class="card shadow p-4 company-card">

                <h4>
                    <i class="bi bi-bank"></i>
                    Maybank
                </h4>

                <p><strong>Industry:</strong> Banking</p>
                <p><strong>Location:</strong> Kuala Lumpur</p>
                <p><strong>Internship:</strong> Finance</p>
                <p><strong>Allowance:</strong> RM900</p>

                <button class="btn btn-primary w-100 mt-2"
                        data-bs-toggle="modal"
                        data-bs-target="#maybankModal">

                    View Details

        </button>

    </div>

</div>

        <!-- CelcomDigi -->
        <div class="col-md-4 mb-4">

            <div class="card shadow p-4 company-card">

                <h4>
                    <i class="bi bi-cpu"></i>
                    CelcomDigi
                </h4>

                <p><strong>Industry:</strong> Technology</p>
                <p><strong>Location:</strong> Subang</p>
                <p><strong>Internship:</strong> Software Development</p>
                <p><strong>Allowance:</strong> RM1400</p>

                <button class="btn btn-primary w-100 mt-2"
                        data-bs-toggle="modal"
                        data-bs-target="#celcomModal">

                    View Details

        </button>

    </div>

</div>

        <!-- Google -->
        <div class="col-md-4 mb-4">

            <div class="card shadow p-4 company-card">

                <h4>
                    <i class="bi bi-google"></i>
                    Google
                </h4>

                <p><strong>Industry:</strong> Technology</p>
                <p><strong>Location:</strong> Singapore</p>
                <p><strong>Internship:</strong> Software Engineer</p>
                <p><strong>Allowance:</strong> RM3000</p>

                <button class="btn btn-primary w-100 mt-2"
                        data-bs-toggle="modal"
                        data-bs-target="#googleModal">

                    View Details

        </button>

    </div>

</div>

        <!-- Microsoft -->
        <div class="col-md-4 mb-4">

            <div class="card shadow p-4 company-card">

                <h4>
                    <i class="bi bi-windows"></i>
                    Microsoft
                </h4>

                <p><strong>Industry:</strong> Technology</p>
                <p><strong>Location:</strong> Kuala Lumpur</p>
                <p><strong>Internship:</strong> Cloud Engineer</p>
                <p><strong>Allowance:</strong> RM2800</p>

                <button class="btn btn-primary w-100 mt-2"
                        data-bs-toggle="modal"
                        data-bs-target="#microsoftModal">

                    View Details

        </button>

    </div>

</div>

        <!-- Grab -->
        <div class="col-md-4 mb-4">

            <div class="card shadow p-4 company-card">

                <h4>
                    <i class="bi bi-car-front-fill"></i>
                    Grab
                </h4>

                <p><strong>Industry:</strong> Transportation</p>
                <p><strong>Location:</strong> Petaling Jaya</p>
                <p><strong>Internship:</strong> Mobile App Developer</p>
                <p><strong>Allowance:</strong> RM1800</p>

                <button class="btn btn-primary w-100 mt-2"
                        data-bs-toggle="modal"
                        data-bs-target="#grabModal">

                    View Details

        </button>

    </div>

</div>

    </div>

</div>

<!--  Modals  -->

<!-- Shopee Modal -->
<div class="modal fade"
     id="shopeeModal"
     tabindex="-1">

    <div class="modal-dialog modal-dialog-centered">

        <div class="modal-content">

            <div class="modal-header">

                <h5 class="modal-title">
                    Shopee Internship
                </h5>

                <button type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"></button>

            </div>

            <div class="modal-body">

                <p><strong>Position:</strong> UI/UX Intern</p>

                <p><strong>Allowance:</strong> RM1200</p>

                <p><strong>Location:</strong> Kuala Lumpur</p>

                <p>
                    Shopee is looking for creative students
                    with UI/UX and marketing skills.
                </p>

            </div>

        </div>

    </div>

</div>

<!-- Petronas Modal -->
<div class="modal fade"
     id="petronasModal"
     tabindex="-1">

    <div class="modal-dialog modal-dialog-centered">

        <div class="modal-content">

            <div class="modal-header">

                <h5 class="modal-title">
                    Petronas Internship
                </h5>

                <button type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"></button>

            </div>

            <div class="modal-body">

                <p><strong>Position:</strong> Web Developer Intern</p>

                <p><strong>Allowance:</strong> RM1500</p>

                <p><strong>Location:</strong> KLCC</p>

                <p>
                    Petronas offers opportunities for
                    software and web development students.
                </p>

            </div>

        </div>

    </div>

</div>

<!-- AirAsia Modal -->
<div class="modal fade"
     id="airasiaModal"
     tabindex="-1">

    <div class="modal-dialog modal-dialog-centered">

        <div class="modal-content">

            <div class="modal-header">

                <h5 class="modal-title">
                    AirAsia Internship
                </h5>

                <button type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"></button>

            </div>

            <div class="modal-body">

                <p><strong>Position:</strong> Marketing Intern</p>

                <p><strong>Allowance:</strong> RM1000</p>

                <p><strong>Location:</strong> Sepang</p>

                <p>
                    AirAsia seeks students interested in
                    digital marketing and communications.
                </p>

            </div>

        </div>

    </div>

</div>

<!-- Maxis Modal -->
<div class="modal fade" id="maxisModal" tabindex="-1">

    <div class="modal-dialog modal-dialog-centered">

        <div class="modal-content">

            <div class="modal-header">

                <h5 class="modal-title">
                    Maxis Internship
                </h5>

                <button type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"></button>

            </div>

            <div class="modal-body">

                <p><strong>Position:</strong> Data Analyst Intern</p>
                <p><strong>Allowance:</strong> RM1300</p>
                <p><strong>Location:</strong> Cyberjaya</p>

                <p>
                    Maxis seeks students skilled in data analysis
                    and business intelligence.
                </p>

            </div>

        </div>

    </div>

</div>

<!-- Maybank Modal -->
<div class="modal fade" id="maybankModal" tabindex="-1">

    <div class="modal-dialog modal-dialog-centered">

        <div class="modal-content">

            <div class="modal-header">

                <h5 class="modal-title">
                    Maybank Internship
                </h5>

                <button type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"></button>

            </div>

            <div class="modal-body">

                <p><strong>Position:</strong> Finance Intern</p>
                <p><strong>Allowance:</strong> RM900</p>
                <p><strong>Location:</strong> Kuala Lumpur</p>

                <p>
                    Maybank provides internships in finance,
                    accounting and banking systems.
                </p>

            </div>

        </div>

    </div>

</div>

<!-- Celcom Modal -->
<div class="modal fade" id="celcomModal" tabindex="-1">

    <div class="modal-dialog modal-dialog-centered">

        <div class="modal-content">

            <div class="modal-header">

                <h5 class="modal-title">
                    CelcomDigi Internship
                </h5>

                <button type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"></button>

            </div>

            <div class="modal-body">

                <p><strong>Position:</strong> Software Intern</p>
                <p><strong>Allowance:</strong> RM1400</p>
                <p><strong>Location:</strong> Subang</p>

                <p>
                    CelcomDigi offers opportunities in software
                    engineering and networking.
                </p>

            </div>

        </div>

    </div>

</div>

<!-- Google Modal -->
<div class="modal fade" id="googleModal" tabindex="-1">

    <div class="modal-dialog modal-dialog-centered">

        <div class="modal-content">

            <div class="modal-header">

                <h5 class="modal-title">
                    Google Internship
                </h5>

                <button type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"></button>

            </div>

            <div class="modal-body">

                <p><strong>Position:</strong> Software Engineer Intern</p>
                <p><strong>Allowance:</strong> RM3000</p>
                <p><strong>Location:</strong> Singapore</p>

                <p>
                    Google is looking for students interested
                    in AI, cloud and software engineering.
                </p>

            </div>

        </div>

    </div>

</div>

<!-- Microsoft Modal -->
<div class="modal fade" id="microsoftModal" tabindex="-1">

    <div class="modal-dialog modal-dialog-centered">

        <div class="modal-content">

            <div class="modal-header">

                <h5 class="modal-title">
                    Microsoft Internship
                </h5>

                <button type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"></button>

            </div>

            <div class="modal-body">

                <p><strong>Position:</strong> Cloud Engineer Intern</p>
                <p><strong>Allowance:</strong> RM2800</p>
                <p><strong>Location:</strong> Kuala Lumpur</p>

                <p>
                    Microsoft offers internships in cloud,
                    cybersecurity and Azure technologies.
                </p>

            </div>

        </div>

    </div>

</div>

<!-- Grab Modal -->
<div class="modal fade" id="grabModal" tabindex="-1">

    <div class="modal-dialog modal-dialog-centered">

        <div class="modal-content">

            <div class="modal-header">

                <h5 class="modal-title">
                    Grab Internship
                </h5>

                <button type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"></button>

            </div>

            <div class="modal-body">

                <p><strong>Position:</strong> Mobile App Developer Intern</p>
                <p><strong>Allowance:</strong> RM1800</p>
                <p><strong>Location:</strong> Petaling Jaya</p>

                <p>
                    Grab seeks creative students interested in
                    mobile development and UI/UX systems.
                </p>

            </div>

        </div>

    </div>

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