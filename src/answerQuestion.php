<html>
<head>
    <title>Ask Question - IdeaWeb</title>


    <link href="css/master.css" rel="stylesheet">
</head>

<body>
   <header>
		<a href="index.html" class="header">Idea Web</a>
   </header>
   <h3 class="instruction">Answer the question by completeing the form below.</h3>
   <h4 class="instruction"> Or... view other questions by clicking <a href="listQuestions.php" style="color:white">Here</a></h4>
   <br/>
   
   <div class="questionForm">
    <form action="questionAnswered.php" method="post">
        <input type="hidden" name="id" value="<?php echo $_GET["id"] ?>" />
        <div class="form-group">
            <label>
                    <p class="formtext">Username:</p>
                    <input class="form-control" type="text" name="username" required />
                </label>
        </div>

        <div class="form-group">
            <label>
                   	<p class="formtext">Answer:</p>
                    <textarea class="form-control" name="answer" rows="5.5" cols="42"></textarea>
                </label>
        </div>
        <input class="askButton" type="submit" value="Answer Question!">
    </form>
    </div>
</body>

</html>