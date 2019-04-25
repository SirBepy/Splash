
<?php include '../includes/head.php'?>
    <link rel="stylesheet" href="../assets/style/home.css">
    <title>Splash - Trivia</title>
  </head>
<body class="paddingtop-5em" >

<?php include '../includes/navbar.php';?>

<!-- Reference: Some php code was used from the following Youtube video: https://www.youtube.com/watch?v=MbJJZ0tBuR4 -->
<?php if(empty($_POST)){ ?>
<form class="padding-4em" action='trivia.php' method='post' id='quizForm'>
        
    <h1>Test your knowledge!</h1>
    
    <h2>How many Pokemon are there in the first Generation?</h2>

    <div class='form-group form-check'>
        <input type='radio' class='form-check-input' name='answerOne' id='answerOne' value='A'>
        <label class='form-check-label' for='answerOneA'>A)  150</label>
    </div>

    <div class='form-group form-check'>
        <input type='radio' class='form-check-input' name='answerOne' id='answerOne' value='B'>
        <label class='form-check-label' for='answerOneB'>B)  151</label>
    </div>

    <div class='form-group form-check'>
        <input type='radio' class='form-check-input' name='answerOne' id='answerOne' value='C'>
        <label class='form-check-label' for='answerOneC'>C)  100</label>
    </div>
    


    <h2 class="paddingtop-2em">From what did the idea for Pokemon spark?</h2>
    
    <div class='form-group form-check'>
        <input type='radio' class='form-check-input' name='answerTwo' id='answerTwo' value='A'>
        <label class='form-check-label' for='answerTwoA'>A)  From fishing</label>
    </div>

    <div class='form-group form-check'>
        <input type='radio' class='form-check-input' name='answerTwo' id='answerTwo' value='B'>
        <label class='form-check-label' for='answerTwoB'>B)  From having a pet mouse</label>
    </div>

    <div class='form-group form-check'>
        <input type='radio' class='form-check-input' name='answerTwo' id='answerTwo' value='C'>
        <label class='form-check-label' for='answerTwoC'>C)  From collecting insects</label>
    </div>


        
    <h2 class="paddingtop-2em">Which Pokemon is the franchise mascot?</h2>
    
    <div class='form-group form-check'>
        <input type='radio' class='form-check-input' name='answerThree' id='answerThree' value='A'>
        <label class='form-check-label' for='answerThreeA'>A)  Clefairy</label>
    </div>

    <div class='form-group form-check'>
        <input type='radio' class='form-check-input' name='answerThree' id='answerThree' value='B'>
        <label class='form-check-label' for='answerThreeB'>B)  Charizard</label>
    </div>

    <div class='form-group form-check'>
        <input type='radio' class='form-check-input' name='answerThree' id='answerThree' value='C'>
        <label class='form-check-label' for='answerThreeC'>C)  Pikachu</label>
    </div>



    <h2 class="paddingtop-2em">What is the original name for Pokemon?</h2>
    
    <div class='form-group form-check'>
        <input type='radio' class='form-check-input' name='answerFour' id='answerFour' value='A'>
        <label class='form-check-label' for='answerFourA'>A)  Pocket Monsters</label>
    </div>

    <div class='form-group form-check'>
        <input type='radio' class='form-check-input' name='answerFour' id='answerFour' value='B'>
        <label class='form-check-label' for='answerFourB'>B)  Battle Monsters</label>
    </div>

    <div class='form-group form-check'>
        <input type='radio' class='form-check-input' name='answerFour' id='answerFour' value='C'>
        <label class='form-check-label' for='answerFourC'>C)  Poked Monsters</label>
    </div>



    <h2 class="paddingtop-2em">For what console were the first Pokemon games released?</h2>
    
    <div class='form-group form-check'>
        <input type='radio' class='form-check-input' name='answerFive' id='answerFive' value='A'>
        <label class='form-check-label' for='answerFiveA'>A)  Gamecube</label>
    </div>

    <div class='form-group form-check'>
        <input type='radio' class='form-check-input' name='answerFive' id='answerFive' value='B'>
        <label class='form-check-label' for='answerFiveB'>B)  Gameboy</label>
    </div>

    <div class='form-group form-check'>
        <input type='radio' class='form-check-input' name='answerFive' id='answerFive' value='C'>
        <label class='form-check-label' for='answerFiveC'>C)  Nintendo 64</label>
    </div>

    <button type='submit' class='btn btn-primary'>Submit!</button>
    
</form>

<?php 

} else {

// Reference: Some php code was used from the following Youtube video: https://www.youtube.com/watch?v=MbJJZ0tBuR4

    if(!empty($_POST['answerOne'])) {
        $answer1= $_POST['answerOne'];
    } else {
        $answer1="";
    }
    if(!empty($_POST['answerTwo'])) {
        $answer2= $_POST['answerTwo'];
    } else {
        $answer2="";
    }
    if(!empty($_POST['answerThree'])) {
        $answer3= $_POST['answerThree'];
    } else {
        $answer3="";
    }
    if(!empty($_POST['answerFour'])) {
        $answer4= $_POST['answerFour'];
    } else {
        $answer4="";
    }
    if(!empty($_POST['answerFive'])) {
        $answer5= $_POST['answerFive'];
    } else {
        $answer5="";
    }

    $score = 0;

    if ($answer1 == "B"){$score++;}
    if ($answer2 == "C"){$score++;}
    if ($answer3 == "C"){$score++;}
    if ($answer4 == "A"){$score++;}
    if ($answer5 == "B"){$score++;}
    if($score == 5) {
        echo "<h1 class='padding-2em'>Wow! Your Score is: $score / 5 <br> Well Played!</h1>";    
    } else if($score >= 3) {
        echo "<h1 class='padding-2em'>Great! Your Score is: $score / 5 <br> Good Job!</h1>";
    } else {
        echo "<h1 class='padding-2em'>Meh... Your Score is: $score / 5 <br> Horrible!</h1>";
    }

?>

    <div class="flip slide">
        <div class="flip paddingbot-60vh">
            <div class="magikarps">
                <img class="karp1" src="../assets/images/home/magikarp.png"
                    alt="Image of the not so amazing water pokemon called Magikarp">
                <img class="karp2" src="../assets/images/home/magikarp.png"
                    alt="Image of the not so amazing water pokemon called Magikarp">
                <img class="karp3" src="../assets/images/home/magikarp.png"
                    alt="Image of the not so amazing water pokemon called Magikarp">
                <img class="karp4" src="../assets/images/home/magikarp.png"
                    alt="Image of the not so amazing water pokemon called Magikarp">
                <img class="karp5" src="../assets/images/home/magikarp.png"
                    alt="Image of the not so amazing water pokemon called Magikarp">
                <img class="karp6" src="../assets/images/home/magikarp.png"
                    alt="Image of the not so amazing water pokemon called Magikarp">
            </div>
        </div>

        <div class="waveContainer waveAnimation">
            <div class="bgTop">
                <div class="wave waveTop"></div>
            </div>
            <div class="bgMiddle">
                <div class="wave waveMiddle"></div>
            </div>
            <div class="bgBottom">
                <div class="wave waveBottom"></div>
            </div>
        </div>
    </div>
<?php } ?>

<?php include '../includes/footer.php';?>