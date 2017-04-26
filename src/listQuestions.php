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
      echo '<div><a href="./q.php?id=' . $row['Id'] .'">' . $row['Title'] . '</a></div>';
    }
  ?>
</body>

</html>