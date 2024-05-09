<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-custom">
            <!-- <div class="container-fluid"> -->
                <a class="navbar-brand" href="index.php">Smart Dustbin</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="features.php">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="dustbin.php">Dustbin Readings</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active " href="technology.php">Technology</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="about.php">About Us </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="contact.php">Contact </a>
                        </li>
                    </ul>
                <!-- </div> -->
            </div>
        </nav>
    </header>
    <section class="technology">
        <div class="container">
            <h2 class="text-center mb-5">Our Technology</h2>
            <div class="row">
                <div class="col-md-6">
                    <h3 class="mb-3">IoT Sensors</h3>
                    <p>Our smart underground dustbin system is equipped with state-of-the-art IoT sensors that utilize ultrasonic technology to continuously monitor the fill level of dustbins. These sensors transmit real-time data wirelessly to a central server for analysis and decision-making.</p>
                </div>
                <div class="col-md-6">
                    <img src="Assests/itosensors.jpeg" class="img-fluid feature-item-technology" alt="IoT Sensors">
                </div>
            </div>
            <div class="row mt-5">
                
                <div class="col-md-6">
                    <img src="Assests/data_analytics.jpeg" class="img-fluid feature-item-technology" alt="Data Analytics">
                </div>
                <div class="col-md-6">
                    <h3 class="mb-3">Data Analytics</h3>
                    <p>Our system leverages advanced data analytics techniques to process and analyze the collected data from IoT sensors. By analyzing waste generation patterns and trends, we can optimize waste collection routes, schedule timely waste pickups, and minimize operational costs.</p>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-6">
                    <h3 class="mb-3">Website Integration</h3>
                    <p>We offer seamless website integration that provides users with access to real-time dustbin readings, data analytics reports, and monitoring capabilities. Our web-based platform ensures easy accessibility and interaction with the dustbin monitoring system, empowering users with valuable insights and actionable information.</p>
                </div>
                <div class="col-md-6">
                    <img src="Assests/website.jpg" class="img-fluid feature-item-technology" alt="Website Integration">
                </div>
            </div>
        </div>
    </section>
    <footer class="footer">
        <div class="container">
                <div class="col-md-3">
                    <h4>Contact Us</h4>
                    <p>Email: info@smartdustbins.com</p>
                    <p>Phone: +91 9421749462</p>
                    <p>Address: ADCET,Ashta</p>
                </div>
                <div class="col-md-3">
                    <h4>Quick Links</h4>
                    <ul class="quick-links">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="features.php">Features</a></li>
                        <li><a href="dustbin.php">Dustbin Readings</a></li>
                        <li><a href="technology.php">Technology</a></li>
                        <li><a href="about.php">About Us</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</body>

</html>