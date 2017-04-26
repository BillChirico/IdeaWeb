<?php

function getAllQuestions()
{
    $connection = mysqli_connect('localhost', 'b', 'b', 'ideaweb') or die('Error connecting to MySQL server.');

    $sql = "SELECT * FROM Question";

    return $connection->query($sql);
}
?>