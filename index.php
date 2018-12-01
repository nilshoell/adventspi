<!DOCTYPE html>
<html lang="en">
<head>
  <title>Adventskranz</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- Bootstrap 4 CSS and popper.js -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

</head>

<!-- PHP code for setting LEDs -->
<?php
if (isset($_GET['advent']) && is_numeric($_GET['advent'])) {
    shell_exec('bash /opt/scripts/advent.sh ' . $_GET['advent']);
}
?>

<body class="" id="page-top">
    <div class="container">

        <h1>Advent Wreath Control</h1>

        <div class="row">
            <div class="col-md-4 mt-2">
                <a href="?advent=1" role="button" class="btn btn-secondary btn-block">1. Advent</a>
            </div>
            <div class="col-md-4 mt-2">
                <a href="?advent=2" role="button" class="btn btn-secondary btn-block">2. Advent</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mt-2">
                <a href="?advent=3" role="button" class="btn btn-secondary btn-block">3. Advent</a>
            </div>
            <div class="col-md-4 mt-2">
                <a href="?advent=4" role="button" class="btn btn-secondary btn-block">4. Advent</a>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-8 col-sm-12 mt-2 text-center">
                <a href="?advent=0" role="button" class="btn btn-danger">Turn Off</a>
            </div>
        </div>
    </div>
</body>

</html>
