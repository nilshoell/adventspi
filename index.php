<!DOCTYPE html>
<html lang="de">
<head>
  <title>Adventskranz</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- Font Awesome Icons -->
  <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js" integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe" crossorigin="anonymous"></script>
  
  <!-- Bootstrap 4 CSS and popper.js -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

  <!-- jQuery JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
</head>

<!-- PHP code for setting LEDs -->
<?php
if (isset($_GET['advent']) && is_numeric($_GET['advent'])) {
    shell_exec('bash /opt/scripts/advent.sh ' . $_GET['advent']);
}
?>

<body class="" id="page-top">
    <div class="container-fluid">
        <div class="row">
            <div class="col mt-2">
                <a href="#?advent=1" role="button" class="btn btn-secondary btn-lg">1. Advent</a>
            </div>
            <div class="col mt-2">
                <a href="#?advent=2" role="button" class="btn btn-secondary btn-lg">2. Advent</a>
            </div>
        </div>
        <div class="row">
            <div class="col mt-2">
                <a href="#?advent=3" role="button" class="btn btn-secondary btn-lg">3. Advent</a>
            </div>
            <div class="col mt-2">
                <a href="#?advent=4" role="button" class="btn btn-secondary btn-lg">4. Advent</a>
            </div>
        </div>
        <div class="row mt-3"><a href="#?advent=0" role="button" class="btn btn-danger">Ausschalten</a></div>
    </div>
</body>

</html>
