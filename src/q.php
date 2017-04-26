<?php
    include 'functions.php';

    $id = $_GET['id'];

    $r = getQuestion($id);
?>

<html>
<header>
  <title><?php echo $r['Title'] ?> - IdeaWeb</title>
</header>

<body>
    <h3>Id: <?php echo $r['Id'] ?></h3>
    <h3>User: <?php echo $r['Username'] ?></h3>
    <h3>Title: <?php echo $r['Title'] ?></h3>
    <h3>Question: <?php echo $r['Question'] ?></h3>
</body>

</html>