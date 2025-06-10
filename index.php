<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MetallicA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
        .navbar {background-color:rgb(240, 255, 28);}
        .navbar .navbar-brand {color:rgb(0, 0, 0);}
        .navbar .nav-link {color:rgb(0, 0, 0);}
        .table thead th {background-color: #343a40;color:rgb(255, 255, 255);}
        .table-striped tbody {background-color:rgb(255, 255, 255);}
        .badge-primary {background-color: rgb(240, 255, 28);}
        .copyright {color:rgb(0, 0, 0);}
        .img-fluid{display: block;
            margin-left: auto;
            margin-right: auto;
            width: 50%;}
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Metallica</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="games.php">Pjesme</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="kontakt.php">Kontakt</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="container mt-1">
        <div class="text-center">
        <h1>METALLICA</h1>
        <h3>Home to news about the band and tour dates</h3>
</div>
        <hr>
        <div class="col-lg-12 text-start">
            <img src="images/s1.jpeg" class="img-fluid" width="700">
            <h2>M72 2026: The tour returns to Europe</h2>
            <p>Greetings from the road as the M72 World Tour currently rolls through North America… we’re not ready to stop yet! An incredible year four of M72 in 2026 will take us back to Europe next spring and summer to visit some cities we have not been to yet. The production will feature the same unique stadium production at mid-field in-the-round, with the Snake Pit in the center of the stage providing a complete 360° view of the show. We’re excited to continue the now-tradition of No Repeat Weekends and will also have a mix of some One Night Only shows.</p>
        </div>
        <hr>
        <div class="col-lg-12 text-start">
            <img src="images/s2.jpg" class="img-fluid">
            <h2>Load (Remastered)</h2>
            <p>It’s no surprise what’s next in our series of reissued, remastered albums… you guessed it: Load is finally ready for you to check out! Pre-orders start now, and the full package will hit your doorsteps, record stores, and all your favorite digital outlets on Friday, June 13, 2025.</p>
        </div>
        <hr>
        <div class="col-lg-7 text-start">
            <h2>Test out our new XML validation</h2>
            <div class="container mt-5 col-4">
<form action="upload.php" method="post" enctype="multipart/form-data">
  <div class="mb-3">
    <label for="xmlFile" class="form-label">XML File</label>
    <input class="form-control" type="file" id="xmlFile" name="xml_file">
  </div>
  <div class="mb-3">
    <label for="xsdFile" class="form-label">XSD File</label>
    <input class="form-control" type="file" id="xsdFile" name="schema_file">
  </div>
  <button type="submit" class="btn btn-primary">Check for validity</button>
</form>
</div>
</div>
</div>
<br>
<br>
<br>
<br>
<footer class="bg-body-tertiary text-center text-lg-start fixed-bottom w-100">
  <div class="container-fluid text-center p-3" style="background-color: rgb(240, 255, 28);">
    <p class="copyright" >© Ivan Beli 2025</p>
</footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0-alpha3/js/bootstrap.min.js"></script>
</body>
</html>