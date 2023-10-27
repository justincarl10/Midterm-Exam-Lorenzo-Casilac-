<?php
            session_start();
            
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
	<title>PHP QUIZ</title>
	
</head>
 
<body>
		
		<form action="" method="POST" class="wrapper">
            <h1>PHP Quiz</h1><br>
            <h2 class="login__content" id="1" >1. WordPress is a...</h2>
            <label>
                <input type="radio" name="answer_1" value="A" >
                A. Software
            </label><br>
            <label>
                <input type="radio" name="answer_1" value="B" >
                B. Web App
            </label><br>
            <label>
                <input type="radio" name="answer_1" value="C" >
                C. CMS
            </label><br>
            <label>
                <input type="radio" name="answer_1" value="D" >
                D. Other
            </label><br>
            <br>

            <h2 class="login__content" id="2" >2. SEO is Part Of...</h2>
            <label>
                <input type="radio" name="answer_2" value="A" >
                A. Video Editing
            </label><br>
            <label>
                <input type="radio" name="answer_2" value="B" >
                B. Graphic Designing
            </label><br>
            <label>
                <input type="radio" name="answer_2" value="C" >
                C. Web Designing
            </label><br>
            <label>
                <input type="radio" name="answer_2" value="D" >
                D. Digital Marketing
            </label><br>
            <br>

            <h2 class="login__content" id="3" >3. PHP is a....</h2>
            <label>
                <input type="radio" name="answer_3" value="A" >
                A. Server Side Script
            </label><br>
            <label>
                <input type="radio" name="answer_3" value="B" >
                B. Programming Language
            </label><br>
            <label>
                <input type="radio" name="answer_3" value="C" >
                C. Markup Language
            </label><br>
            <label>
                <input type="radio" name="answer_3" value="D" >
                D. None Of the Above
            </label><br>
            <br>

            <h2 class="login__content" id="4" >4. Localhost IP is..</h2>
            <label>
                <input type="radio" name="answer_4" value="A" >
                A. 192.168.0.1
            </label><br>
            <label>
                <input type="radio" name="answer_4" value="B" >
                B. 127.0.0.0
            </label><br>
            <label>
                <input type="radio" name="answer_4" value="C" >
                C. 1080:80
            </label><br>
            <label>
                <input type="radio" name="answer_4" value="D" >
                D. Any Other
            </label><br>
            <br>

            <h2 class="login__content" id="5" >5. A computer science student does...</h2>
            <label>
                <input type="radio" name="answer_5" value="A" >
                A. Web Designer
            </label><br>
            <label>
                <input type="radio" name="answer_5" value="B" >
                B. Web Developer
            </label><br>
            <label>
                <input type="radio" name="answer_5" value="C" >
                C. Graphic Designer
            </label><br>
            <label>
                <input type="radio" name="answer_5" value="D" >
                D. All of the Above
            </label><br>
            <br>
        
            <input name="submit" class="login__button" value="Next" type="submit">
        </div>
        </form>
    </div>

    <?php
    if(isset($_POST['submit'])){
        $answer_1=$_POST['answer_1'];

        if($answer_1=="C"){
            $_SESSION['score']++;
        }
        $answer_2=$_POST['answer_2'];

        if($answer_2=="D"){
            $_SESSION['score']++;
        }
        $answer_3=$_POST['answer_3'];

        if($answer_3=="B"){
            $_SESSION['score']++;
        }
        $answer_4=$_POST['answer_4'];

        if($answer_4=="A"){
            $_SESSION['score']++;
        }
        $answer_5=$_POST['answer_5'];

        if($answer_5=="D"){
            $_SESSION['score']++;
        }
        echo "<meta http-equiv='refresh' content='0; url=quizenglish.php'>";
    }
    ?>
</body>
 
</html>