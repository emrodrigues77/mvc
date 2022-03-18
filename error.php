<?php

$message = filter_input(INPUT_GET, "message", FILTER_DEFAULT);

echo "<h1>An error occurred</h1>";
echo $message;
echo "<hr />";
echo "<a href='index.php'>Home</a>";