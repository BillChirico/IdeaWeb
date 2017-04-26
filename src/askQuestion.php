<?php
$connection = mysqli_connect('localhost', 'b', 'b', 'ideaweb') or die('Error connecting to MySQL server.');

$username = $_POST['username'];
$question = $_POST['question'];

$sql = "INSERT INTO Question (Question, Username, Votes)
VALUES ('$question', '$username', 0)";

if ($connection->query($sql) == TRUE) {
    echo "<h1>Thank you for your question!</h1>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>