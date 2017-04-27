<?php
include 'functions.php';

$username = $_POST['username'];
$title = $_POST['title'];
$question = $_POST['question'];

if (askQuestion($username, $title, $question) == TRUE) {
    echo "<h1>Thank you for your question!</h1>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>