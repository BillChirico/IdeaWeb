<?php
    include 'functions.php';

    $id = $_GET['id'];

    /*$r = getQuestion($id);
	
	answers = getAnswers($id);*/
?>

<html>
<head>
  <title><?php echo $r['Title'] ?> - IdeaWeb</title>
  <link href="css/master.css" rel="stylesheet">
</head>

<body>
   <header>
   		<a href="home.html" class="header">Idea Web</a>
   </header>
   
   <center>
	   </br>
	</br>
  	<a href="listQuestions.php" style="color:white">Question List</a>  
	</br>
  	</br>
     <?php    echo '<a href="answerQuestion.php?id=' . $id .  '" style="color:white">Answer Question</a>';    ?>
   </center>

   <div class="showquestion">
   		<h3>User: <?php echo $r['Username'] ?></h3>
    	<h3>Title: <?php echo $r['Title'] ?></h3>
    	<h3>Question: <?php echo $r['Question'] ?></h3>
   </div>
   <?php 
		while($row = $answers->fetch_assoc()) {
			echo '<div class="showreply"><h3>User: '. $row['Username'] .'</h3><h3>Answer: ' . $row['Answer'] . '</div>';
		}
   ?>
</body>

</html>