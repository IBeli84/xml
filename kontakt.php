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
        .badge-primary {background-color: rgb(0, 0, 0);}
        .copyright {color:rgb(0, 0, 0);}
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
<div class="container mt-5">
    <h1>Where to find us!</h1>
    <p>Ovdje nas možete naći!</p>
    <div class="card w-50 p-3">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
  </div>
  <div class="ratio ratio-1x1">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d120780.91839675083!2d-122.47227637170505!3d37.76108567084074!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80859a6d00690021%3A0x4a501367f076adff!2sSan%20Francisco%2C%20CA%2C%20USA!5e1!3m2!1sen!2shr!4v1749397650168!5m2!1sen!2shr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
</div>
</div>
<div class="container mt-5">
<h2>Staff</h2>
<p>Slobodno nam se javite putem maila.</p>
<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $json_data = file_get_contents('users.json');
            $users = json_decode($json_data, true)['users'];
            foreach ($users as $user) {
                echo "<tr>";
                echo "<td>" . $user['name'] . "</td>";
                echo "<td>" . $user['email'] . "</td>";
                echo "<td><span class='badge badge-primary'>" . $user['role'] . "</span></td>";
                echo "</tr>";}
            ?>
        </tbody>
    </table>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0-alpha3/js/bootstrap.min.js"></script>
<footer class="bg-body-tertiary text-center text-lg-start fixed-bottom w-100">
  <div class="container-fluid text-center p-3" style="background-color: rgb(240, 255, 28);">
    <p class="copyright" >© Ivan Beli 2025</p>
</footer>
</body>
</html>