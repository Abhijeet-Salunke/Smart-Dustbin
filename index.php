<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
       
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="index.php">Smart Dustbin</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="features.php">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="dustbin.php">Dustbin Readings</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="technology.php">Technology </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="about.php">About Us </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="contact.php">Contact </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <section class="home">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="welcome">Welcome to the Smart Underground Dustbin System</h2>
                    <p class="lead">Efficient waste management for a sustainable future.</p>
                    <p>The smart underground dustbin system revolutionizes waste management by leveraging IoT technology
                        to monitor the fill level of underground dustbins in real-time. Our system ensures timely waste
                        collection, optimizes route planning for collection vehicles, and contributes to a cleaner
                        environment.</p>
                    <p>Key features of our system:</p>
                    <ul>
                        <li>Real-time monitoring of dustbin fill levels</li>
                        <li>Automatic alerts for when the dustbin reaches critical levels</li>
                        <li>Data analytics for optimizing waste collection routes</li>
                        <li>Integration with municipal waste management systems</li>
                    </ul>
                    <p>Our smart dustbin solution offers a sustainable and efficient approach to waste management,
                        reducing operational costs and minimizing environmental impact.</p>
                    <a href="dustbin.php" class="btn btn-primary btn-lg">View Dustbin Readings</a>
                </div>
                <div class="col-md-6">
                    <img src="Assests/smartunderground.png" class="img-fluid" alt="Smart Underground Dustbin">
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