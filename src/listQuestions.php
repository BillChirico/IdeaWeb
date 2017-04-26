<?php 
include 'functions.php';




?>

<html>
<header>
  <title>IdeaWeb</title>
</header>

<body>
  <?php 
  $result = getAllQuestions();
    while($row = $result->fetch_assoc()) {
    echo $row['Username'];
    }
  ?>
</body>

</html>