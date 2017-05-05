<?php
include 'functions.php';

$username = $_POST['username'];
$answer = $_POST['answer'];
$question = $_POST['id'];

if (postAnswer($username, $answer, $question) == TRUE) {
    echo "<h1>Thank you for your question!</h1>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>