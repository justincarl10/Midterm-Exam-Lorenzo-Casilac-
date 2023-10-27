<?php
            session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
	<title>MATH QUIZ</title>
	
</head>
 
<body>
		
		<form action="" method="POST" class="wrapper">
            <h1>Math Quiz</h1><br>
            <h2 class="login__content" id="1" >1. Solve for x in the equation 2x + 5 = 11</h2>
            <label>
                <input type="radio" name="answer_1" value="A" >
                A. x = 2
            </label><br>
            <label>
                <input type="radio" name="answer_1" value="B" >
                B. x = 3
            </label><br>
            <label>
                <input type="radio" name="answer_1" value="C" >
                C. x = 4
            </label><br>
            <label>
                <input type="radio" name="answer_1" value="D" >
                D. x = 5
            </label><br>
            <br>

            <h2 class="login__content" id="2" >2. What is the area of a rectangle with a length of 8 units and the width of 5 units?</h2>
            <label>
                <input type="radio" name="answer_2" value="A" >
                A. 13 square units
            </label><br>
            <label>
                <input type="radio" name="answer_2" value="B" >
                B. 26 square unit
            </label><br>
            <label>
                <input type="radio" name="answer_2" value="C" >
                C. 40 square units
            </label><br>
            <label>
                <input type="radio" name="answer_2" value="D" >
                D. 45 square units
            </label><br>
            <br>

            <h2 class="login__content" id="3" >3. If a car travels at a constant speed of 60 miles per hour, how far will it travel in 3 hours?</h2>
            <label>
                <input type="radio" name="answer_3" value="A" >
                A. 120 miles
            </label><br>
            <label>
                <input type="radio" name="answer_3" value="B" >
                B. 140 miles
            </label><br>
            <label>
                <input type="radio" name="answer_3" value="C" >
                C. 160 miles
            </label><br>
            <label>
                <input type="radio" name="answer_3" value="D" >
                D. 180 miles
            </label><br>
            <br>

            <h2 class="login__content" id="4" >4. Simplify the equation 3(2x -5) + 4x</h2>
            <label>
                <input type="radio" name="answer_4" value="A" >
                A. 10x - 15
            </label><br>
            <label>
                <input type="radio" name="answer_4" value="B" >
                B. 10x - 5
            </label><br>
            <label>
                <input type="radio" name="answer_4" value="C" >
                C. 14x - 5
            </label><br>
            <label>
                <input type="radio" name="answer_4" value="D" >
                D. 14x - 15
            </label><br>
            <br>

            <h2 class="login__content" id="5" >5. If a triangle has angles measuring 30 degrees, 60 degrees, and 90 degrees, what type of triangle is it?</h2>
            <label>
                <input type="radio" name="answer_5" value="A" >
                A. Equilateral
            </label><br>
            <label>
                <input type="radio" name="answer_5" value="B" >
                B. Isosceles
            </label><br>
            <label>
                <input type="radio" name="answer_5" value="C" >
                C. Scalene
            </label><br>
            <label>
                <input type="radio" name="answer_5" value="D" >
                D. Right Triangle
            </label><br>
            <br>
        
            <input name="submit" class="login__button" value="Next" type="submit">
        </div>
        </form>
    </div>

    <?php
    if(isset($_POST['submit'])){
        $_SESSION['score']=0;
        $answer_1=$_POST['answer_1'];

        if($answer_1=="B"){
            $_SESSION['score']++;
        }
        $answer_2=$_POST['answer_2'];

        if($answer_2=="C"){
            $_SESSION['score']++;
        }
        $answer_3=$_POST['answer_3'];

        if($answer_3=="D"){
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
        echo "<meta http-equiv='refresh' content='0; url=quizscience.php'>";
    }
    ?>
</body>
 
</html>