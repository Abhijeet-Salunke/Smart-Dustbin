<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <link rel="stylesheet" href="css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

        <script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"
    integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
    crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> 

<body>
<header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-custom">
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
                            <a class="nav-link active" href="dustbin.php">Dustbin Readings</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="technology.php">Technology</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="about.php">About Us </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="contact.php">Contact </a>
                        </li>
                    </ul>
                </div>
        </nav>
    </header>   <center>
       <section class="dustbin">
        <h1>Smart Dustbin data</h1>
        <div class="container">
            <canvas id="chart"></canvas>
        </div>
        <div class="container">
            <h1>Garbage Level Fill Chart</h1>
            <!-- Create a canvas element for the chart -->
            <canvas id="garbageChart" width="400" height="100"></canvas>
            <p id="sensorValue" style="text-align: center; margin-top: 10px;">Loading...</p>
        </div>
        <iframe width="450" height="260" style="border: 1px solid #cccccc; margin-top: 20px;"
            src="https://thingspeak.com/channels/2422676/charts/1?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15"></iframe>
    
    </section>
</center>
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

    <script src="JS/main.js" ></script>
</body>
</html>