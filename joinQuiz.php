<?php

        $code = $_GET['code'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="img/logo-noBG.png" type="image/x-icon">

    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer"/>

    <title>quizHub</title>
</head>

<body>
    <nav>
        <img src="img/logo-noBG.png" alt="logo">

        <form action="" method="post">
            <input type="search" name="" id="" placeholder="Enter the Test Id">
            <input class="fas" type="submit" value="&#xf002">
        </form>
    </nav>

    <div class="join-form">
    
        <h1>Join the quiz</h1>
        <form action="backend/A_joining.php" method="post">
            <label for="name">Enter the name</label>
            <input type="text" name="a_name">

            <label for="email">Enter your email</label>
            <input type="email" name = "a_email">

            <label for="code">Enter the Quiz Code</label>
            <input type="text" name = "code" placeholder = "<?php echo $code ;?>"> 

            <input type="hidden" name="s_time" value="<?php echo date("h:i:s"); ?>">

            <input class="button" type="submit" value="Join">
        </form>

        <p>are you the organizer ? click <a href="joinOrganizer.html">here</a></p>

    </div>

    
    <footer>
        <h3>Contact Developer</h3>
            <a href="" target="_blank" rel="noopener noreferrer"><i class="fab fa-linkedin-in"></i></a>
            <a href="" target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram"></i></a>
            <a href="mailto:karankewat2911@gmail.com" target="_blank" rel="noopener noreferrer"><i class="fas fa-envelope"></i></a>
    </footer>
</body>

<script src="script.js"></script>
</html>