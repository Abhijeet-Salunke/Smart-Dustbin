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
                            <a class="nav-link" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="features.php">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="dustbin.php">Dustbin Readings</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="technology.php">Technology</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="about.php">About Us </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="contact.php">Contact </a>
                        </li>
                    </ul>
                </div>
            <!-- </div> -->
        </nav>
    </header>
    <section class="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 info">
                    <h2>Contact Us</h2>
                    <!-- <p>We'd love to hear from you! Feel free to reach out to us with any inquiries or feedback.</p> -->
                    <p>Address: ADCET,Ashta</p>
                    <p>Email: info@smartdustbins.com</p>
                    <p>Phone: +91 9421749462</p>
                </div>
                <div class="min-vh-25 col-lg-5 form card">
                    <h3>Send Us a Message</h3>
                    <form  action="database.php" method="POST" > 
                        <div class="form-group">
                            <label for="name">Your Name:</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
                        </div>
                        <div class="form-group">
                            <label for="email">Your Email:</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
                        </div>
                        <div class="form-group">
                            <label for="message">Your Message:</label>
                            <textarea class="form-control" id="message" name="message" rows="2"
                                placeholder="Enter your message"></textarea>
                        </div>
                        <button type="submit"  name="submit"class="btn btn-primary">Send Message</button>
                    </form>
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