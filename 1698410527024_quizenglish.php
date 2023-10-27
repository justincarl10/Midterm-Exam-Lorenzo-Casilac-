<?php
            session_start();
            
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
	<title>ENLGISH QUIZ</title>
	
</head>
 
<body>
		
		<form action="" method="POST" class="wrapper">
            <h1>English Quiz</h1><br>
            <h2 class="login__content" id="1" >1. Which word is a synonym for "happy"?</h2>
            <label>
                <input type="radio" name="answer_1" value="A" >
                A. Sad
            </label><br>
            <label>
                <input type="radio" name="answer_1" value="B" >
                B. Ecstatic
            </label><br>
            <label>
                <input type="radio" name="answer_1" value="C" >
                C. Gay
            </label><br>
            <label>
                <input type="radio" name="answer_1" value="D" >
                D. Perplexed
            </label><br>
            <br>

            <h2 class="login__content" id="2" >2. What is the plural form of "goose"?</h2>
            <label>
                <input type="radio" name="answer_2" value="A" >
                A. Gooses
            </label><br>
            <label>
                <input type="radio" name="answer_2" value="B" >
                B. Geeses
            </label><br>
            <label>
                <input type="radio" name="answer_2" value="C" >
                C. Geese
            </label><br>
            <label>
                <input type="radio" name="answer_2" value="D" >
                D. Geses
            </label><br>
            <br>

            <h2 class="login__content" id="3" >3. Which word is a homonym for "flower"?</h2>
            <label>
                <input type="radio" name="answer_3" value="A" >
                A. Flour
            </label><br>
            <label>
                <input type="radio" name="answer_3" value="B" >
                B. Flare
            </label><br>
            <label>
                <input type="radio" name="answer_3" value="C" >
                C. Floor
            </label><br>
            <label>
                <input type="radio" name="answer_3" value="D" >
                D. Flew
            </label><br>
            <br>

            <h2 class="login__content" id="4" >4. What word is the past tense of "sing"?</h2>
            <label>
                <input type="radio" name="answer_4" value="A" >
                A. Sung
            </label><br>
            <label>
                <input type="radio" name="answer_4" value="B" >
                B. Singed
            </label><br>
            <label>
                <input type="radio" name="answer_4" value="C" >
                C. Sang
            </label><br>
            <label>
                <input type="radio" name="answer_4" value="D" >
                D. Sings
            </label><br>
            <br>

            <h2 class="login__content" id="5" >5. What is a group of lions called?</h2>
            <label>
                <input type="radio" name="answer_5" value="A" >
                A. Herd
            </label><br>
            <label>
                <input type="radio" name="answer_5" value="B" >
                B. Flock
            </label><br>
            <label>
                <input type="radio" name="answer_5" value="C" >
                C. Pride
            </label><br>
            <label>
                <input type="radio" name="answer_5" value="D" >
                D. School
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

        if($answer_2=="C"){
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

        if($answer_5=="C"){
            $_SESSION['score']++;
        }
        echo "<meta http-equiv='refresh' content='0; url=result.php'>";
    }
    ?>
</body>
 
</html>