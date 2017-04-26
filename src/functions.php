<?php

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
?>