<?php

// Ask a new question.
function askQuestion($username, $title, $question)
{
    $connection = mysqli_connect('localhost', 'williamchirico', 'williamchiricopass', 'williamchiricodatabase') or die('Error connecting to MySQL server.');

    $sql = "INSERT INTO Question (Title, Question, Username, Votes) VALUES ('$title', '$question', '$username', 0)";

    return $connection->query($sql);
}

// Get all of the questions.
function getAllQuestions()
{
    $connection = mysqli_connect('localhost', 'williamchirico', 'williamchiricopass', 'williamchiricodatabase') or die('Error connecting to MySQL server.');

    $sql = "SELECT * FROM Question";

    return $connection->query($sql);
}

// Get the details of a question.
function getQuestion($id)
{
    $connection = mysqli_connect('localhost', 'williamchirico', 'williamchiricopass', 'williamchiricodatabase') or die('Error connecting to MySQL server.');

    $sql = "SELECT * FROM Question WHERE Id='$id'";

    $result = $connection->query($sql);

    return $result->fetch_assoc();
}

// Post an answer to a question.
function postAnswer($username, $answer, $questionId)
{
    $connection = mysqli_connect('localhost', 'williamchirico', 'williamchiricopass', 'williamchiricodatabase') or die('Error connecting to MySQL server.');

    $sql = "INSERT INTO Answer (Username, Answer, QuestionId) VALUES ('$username', '$answer', $questionId)";

    return $connection->query($sql);
}

// Get the answers for a question.
function getAnswers($questionId)
{
    $connection = mysqli_connect('localhost', 'williamchirico', 'williamchiricopass', 'williamchiricodatabase') or die('Error connecting to MySQL server.');

    $sql = "SELECT * FROM Answer WHERE QuestionId='$questionId'";

    return $connection->query($sql);
}
?>