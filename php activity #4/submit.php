<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Handle POST request
    $name = htmlspecialchars($_POST['postName']);
    $email = htmlspecialchars($_POST['postEmail']);
    echo "POST Method: Thank you, $name! Your email ($email) has been received.";
} elseif ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Handle GET request
    $name = htmlspecialchars($_GET['getName']);
    $email = htmlspecialchars($_GET['getEmail']);
    echo "GET Method: Thank you, $name! Your email ($email) has been received.";
} else {
    echo "Invalid request.";
}
?>