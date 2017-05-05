<?php 
  include 'functions.php';
?>

<html>
<head>
  <title>Questions - IdeaWeb</title>
  <link href="css/master.css" rel="stylesheet">
</head>

<body>
	<header>
		<a href="index.html" class="header">Idea Web</a>
	</header>
	
	<center>
		</br>
		</br>
	<a href="askQuestion.html" style="color:white">Ask a question</a></h4>
	</center>
 
 <div class="questionlist">
 
 	<p class="questionheader">Current questions:</p>
 	<br/>
  <?php 
  $result = getAllQuestions();
    while($row = $result->fetch_assoc()) {
      echo '<div><a href="./question.php?id=' . $row['Id'] .'" class="questionlist">' . $row['Title'] . '</a></div>';
    }
  ?>
  </div>
</body>

</html>