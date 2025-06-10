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
<h2>Top 20 pjesama</h2>
<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Id</th>
                <th>Ime</th>
                <th>Album</th>
                <th>Pregledi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $xml = simplexml_load_file('games.xml');
            $limit = 4;
            $totalpjesme = count($xml->pjesma);
            $totalPages = ceil($totalpjesme / $limit);
            $page = isset($_GET['page']) ? $_GET['page'] : 1;
            $start = ($page - 1) * $limit; 
            for ($i = $start; $i < min($start + $limit, $totalpjesme); $i++) {
                $pjesma = $xml->pjesma[$i];
                echo "<tr>";
                echo "<td>" . $pjesma->id . "</td>";
                echo "<td>" . $pjesma->name . "</td>";
                echo "<td>" . $pjesma->album . "</td>";
                echo "<td>" . $pjesma->pregledi . "</td>";
                echo "</tr>";}
            ?>
        </tbody>
    </table>
</div>
<nav aria-label="Page navigation">
<ul class="pagination justify-content-center">
<?php for ($i = 1; $i <= $totalPages; $i++) : ?>
<li class="page-item <?php if ($page == $i) echo 'active'; ?>">
<a class="page-link" href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
</li>
<?php endfor; ?>
</ul>
</nav>
</div>
<footer class="bg-body-tertiary text-center text-lg-start fixed-bottom w-100">
  <div class="container-fluid text-center p-3" style="background-color: rgb(240, 255, 28);">
    <p class="copyright" >© Ivan Beli 2025</p>
</footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0-alpha3/js/bootstrap.min.js"></script>
</body>
</html>