<?php
    include 'functions.php';

    $id = $_GET['id'];

    $r = getQuestion($id);

    echo $r['Title'];
?>