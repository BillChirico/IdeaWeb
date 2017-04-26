<?php
$connection = mysqli_connect('localhost', 'johnsmith', 'pass', 'johnsmithdatabase') or die('Error connecting to MySQL server.');

$username = $_POST['username'];
$title = $_POST['title'];
$question = $_POST['question'];

$sql = "INSERT INTO Question (Title, Question, Username, Votes)
VALUES ('$title', '$question', '$username', 0)";

if ($connection->query($sql) == TRUE) {
    echo "<h1>Thank you for your question!</h1>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>