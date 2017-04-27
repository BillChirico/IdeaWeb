<?php
    include 'functions.php';

    $id = $_GET['id'];

    $r = getQuestion($id);
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

   <div class="showquestion">
   		<h3>User: <?php echo $r['Username'] ?></h3>
    	<h3>Title: <?php echo $r['Title'] ?></h3>
    	<h3>Question: <?php echo $r['Question'] ?></h3>
   </div>
   
   <div class="showreply">
   		<h3>This is a test reply</h3>
   	
   </div>
</body>

</html>