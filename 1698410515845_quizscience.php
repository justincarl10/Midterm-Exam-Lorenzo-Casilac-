<?php
            session_start();
                
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
	<title>SCIENCE QUIZ</title>
	
</head>
 
<body>
		
		<form action="" method="POST" class="wrapper">
            <h1>Science Quiz</h1><br>
            <h2 class="login__content" id="1" >1. What is the powerhouse of the cell?</h2>
            <label>
                <input type="radio" name="answer_1" value="A" >
                A. Nucleus
            </label><br>
            <label>
                <input type="radio" name="answer_1" value="B" >
                B. Mitochondria
            </label><br>
            <label>
                <input type="radio" name="answer_1" value="C" >
                C. Endoplasmic Reticulum
            </label><br>
            <label>
                <input type="radio" name="answer_1" value="D" >
                D. Ribosome
            </label><br>
            <br>

            <h2 class="login__content" id="2" >2. What is the chemical symbol for gold?</h2>
            <label>
                <input type="radio" name="answer_2" value="A" >
                A. Au
            </label><br>
            <label>
                <input type="radio" name="answer_2" value="B" >
                B. Ag
            </label><br>
            <label>
                <input type="radio" name="answer_2" value="C" >
                C. Fe
            </label><br>
            <label>
                <input type="radio" name="answer_2" value="D" >
                D. Mg
            </label><br>
            <br>

            <h2 class="login__content" id="3" >3. What is the chemical symbol for iron?</h2>
            <label>
                <input type="radio" name="answer_3" value="A" >
                A. Fe
            </label><br>
            <label>
                <input type="radio" name="answer_3" value="B" >
                B. Mg
            </label><br>
            <label>
                <input type="radio" name="answer_3" value="C" >
                C. He
            </label><br>
            <label>
                <input type="radio" name="answer_3" value="D" >
                D. Sn
            </label><br>
            <br>

            <h2 class="login__content" id="4" >4. What is the hottest planet in the solar system?</h2>
            <label>
                <input type="radio" name="answer_4" value="A" >
                A. Mercury
            </label><br>
            <label>
                <input type="radio" name="answer_4" value="B" >
                B. Earth
            </label><br>
            <label>
                <input type="radio" name="answer_4" value="C" >
                C. Venus
            </label><br>
            <label>
                <input type="radio" name="answer_4" value="D" >
                D. Mars
            </label><br>
            <br>

            <h2 class="login__content" id="5" >5. What is the phenomenon where heat is trapped in the atmosphere?</h2>
            <label>
                <input type="radio" name="answer_5" value="A" >
                A. Greenhouse Effect
            </label><br>
            <label>
                <input type="radio" name="answer_5" value="B" >
                B. Global Warming
            </label><br>
            <label>
                <input type="radio" name="answer_5" value="C" >
                C. Climate Change
            </label><br>
            <label>
                <input type="radio" name="answer_5" value="D" >
                D. None of the above
            </label><br>
            <br>
        
            <input name="submit" class="login__button" value="Next" type="submit">
        </div>
        </form>
    </div>

    <?php
   if(isset($_POST['submit'])){
    $answer_1=$_POST['answer_1'];

    if($answer_1=="B"){
        $_SESSION['score']++;
    }
    $answer_2=$_POST['answer_2'];

    if($answer_2=="A"){
        $_SESSION['score']++;
    }
    $answer_3=$_POST['answer_3'];

    if($answer_3=="A"){
        $_SESSION['score']++;
    }
    $answer_4=$_POST['answer_4'];

    if($answer_4=="C"){
        $_SESSION['score']++;
    }
    $answer_5=$_POST['answer_5'];

    if($answer_5=="A"){
        $_SESSION['score']++;
    }
        echo "<meta http-equiv='refresh' content='0; url=quizhistory.php'>";
    }
    ?>
</body>
 
</html>