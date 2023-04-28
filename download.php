<?php

session_start();
require "vendor/autoload.php";
use App\QuestionManager;

$manager = new QuestionManager;
if($_SERVER["REQUEST_METHOD"] == "POST" and isset($_POST['download']))
{
    $manager->txt_result($_SESSION['answers']);
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Text Results</title>
</head>
</html>