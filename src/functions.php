<?php

function askQuestion($username, $title, $question)
{
    $connection = mysqli_connect('localhost', 'johnsmith', 'pass', 'johnsmithdatabase') or die('Error connecting to MySQL server.');

    $sql = "INSERT INTO Question (Title, Question, Username, Votes) VALUES ('$title', '$question', '$username', 0)";

    return $connection->query($sql);
}

function getAllQuestions()
{
    $connection = mysqli_connect('localhost', 'johnsmith', 'pass', 'johnsmithdatabase') or die('Error connecting to MySQL server.');

    $sql = "SELECT * FROM Question";

    return $connection->query($sql);
}

function getQuestion($id)
{
    $connection = mysqli_connect('localhost', 'johnsmith', 'pass', 'johnsmithdatabase') or die('Error connecting to MySQL server.');

    $sql = "SELECT * FROM Question WHERE Id='$id'";

    $result = $connection->query($sql);

    return $result->fetch_assoc();
}

function postAnswer($username, $answer)
{
    $connection = mysqli_connect('localhost', 'johnsmith', 'pass', 'johnsmithdatabase') or die('Error connecting to MySQL server.');

    $sql = "INSERT INTO Answer (Username, Answer) VALUES ('$username', '$answer')";

    return $connection->query($sql);
}
?>