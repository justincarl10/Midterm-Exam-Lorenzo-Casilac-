<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Score</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <form action="" method="POST" class="wrapper">
        
        <label>
            <div class="login_form">
        <?php
            session_start();
        
            $score = $_SESSION['score'];
            $total=25;
            
            ?>
        <h2 class="login__title"><p>Score:
        <strong style="font-size:1.5em;" ><?= $score; ?></strong>/<?= $total; ?></p></h2>
                <h1>Job Well Done!</h1><br>
                <input type="submit" name="submit" value="Retake the Quiz?" class="login__button">
                <a href="answer.php" class="login__button">Reveal the Answers? </a>
                <?php
            if(isset($_POST['submit'])){
                echo "<meta http-equiv='refresh' content='0; url=quizmath.php'>";
            }
            ?>
                </div>            
        </label>
        </form>
</body>
</html>