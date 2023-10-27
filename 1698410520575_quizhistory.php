<?php
            session_start();
            
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
	<title>HISTORY QUIZ</title>
	
</head>
 
<body>
		
		<form action="" method="POST" class="wrapper">
            <h1>History Quiz</h1><br>
            <h2 class="login__content" id="1" >1. Who was the first President of the United States?</h2>
            <label>
                <input type="radio" name="answer_1" value="A" >
                A. Thomas Jefferson
            </label><br>
            <label>
                <input type="radio" name="answer_1" value="B" >
                B. Theodore Roosevelt
            </label><br>
            <label>
                <input type="radio" name="answer_1" value="C" >
                C. Benjamin Franklin
            </label><br>
            <label>
                <input type="radio" name="answer_1" value="D" >
                D. George Washington
            </label><br>
            <br>

            <h2 class="login__content" id="2" >2. In which year did World War I begin?</h2>
            <label>
                <input type="radio" name="answer_2" value="A" >
                A. 1912
            </label><br>
            <label>
                <input type="radio" name="answer_2" value="B" >
                B. 1914
            </label><br>
            <label>
                <input type="radio" name="answer_2" value="C" >
                C. 1917
            </label><br>
            <label>
                <input type="radio" name="answer_2" value="D" >
                D. 1921
            </label><br>
            <br>

            <h2 class="login__content" id="3" >3. What ancient civilization built the pyramids in Egypt?</h2>
            <label>
                <input type="radio" name="answer_3" value="A" >
                A. Romans
            </label><br>
            <label>
                <input type="radio" name="answer_3" value="B" >
                B. Greek
            </label><br>
            <label>
                <input type="radio" name="answer_3" value="C" >
                C. Egyptian
            </label><br>
            <label>
                <input type="radio" name="answer_3" value="D" >
                D. Chinese
            </label><br>
            <br>

            <h2 class="login__content" id="4" >4. Who is known for leading the non-violent civil rights movement in India?</h2>
            <label>
                <input type="radio" name="answer_4" value="A" >
                A. Nelson Mandela
            </label><br>
            <label>
                <input type="radio" name="answer_4" value="B" >
                B. Mahatma Ghandi
            </label><br>
            <label>
                <input type="radio" name="answer_4" value="C" >
                C. Martin Luthor King Jr.
            </label><br>
            <label>
                <input type="radio" name="answer_4" value="D" >
                D. Winston Churchill
            </label><br>
            <br>

            <h2 class="login__content" id="5" >5. Which famous explorer completed the first voyage around the world?</h2>
            <label>
                <input type="radio" name="answer_5" value="A" >
                A. Christopher Columbus
            </label><br>
            <label>
                <input type="radio" name="answer_5" value="B" >
                B. Ferdinand Majelan
            </label><br>
            <label>
                <input type="radio" name="answer_5" value="C" >
                C.  Miguel Lopez de Legaspi
            </label><br>
            <label>
                <input type="radio" name="answer_5" value="D" >
                D. Marco Polo
            </label><br>
            <br>
        
            <input name="submit" class="login__button" value="Next" type="submit">
        </div>
        </form>
    </div>

    <?php
    if(isset($_POST['submit'])){
        $answer_1=$_POST['answer_1'];

        if($answer_1=="D"){
            $_SESSION['score']++;
        }
        $answer_2=$_POST['answer_2'];

        if($answer_2=="B"){
            $_SESSION['score']++;
        }
        $answer_3=$_POST['answer_3'];

        if($answer_3=="C"){
            $_SESSION['score']++;
        }
        $answer_4=$_POST['answer_4'];

        if($answer_4=="B"){
            $_SESSION['score']++;
        }
        $answer_5=$_POST['answer_5'];

        if($answer_5=="B"){
            $_SESSION['score']++;
        }
        echo "<meta http-equiv='refresh' content='0; url=quizPHP.php'>";
    }
    ?>
</body>
 
</html>