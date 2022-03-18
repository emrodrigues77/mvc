<?php
require_once "vendor/autoload.php";
require_once "app.php";

use App\Core\Application;

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>Simple Framework</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
</head>

<body>
    <h1>Simple MVC</h1>
    <?php

    $app = new Application();

    ?>
    <script src="/assets/js/jquery.slim.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
</body>

</html>