<?php
// Error reporting:
error_reporting(E_ALL^E_NOTICE);


if(!isset($_GET['o'])||!isset($_GET['t'])||!isset($_GET['r']))  
  header('Location: /brainstorm/index.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>The “Extra Thumb Brainstorming Task</title>
    <link rel="stylesheet" type="text/css" href="styles.css" />
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
</head>

<body>
    <div id="wrapper">
        <div class="style8 question_start">
            <h2>“Extra Thumb” Brainstorming Question</h2>
            <hr/>
            <div class="main-div">

                <p id="question content">
                    Scenario:<br/>
                    Imagine for a moment what would happen if everyone born after the year 2020 had an extra thumb on each hand. This extra thumb will be built just as the present one is, but located on the other side of the hand. It faces inward, so that it can press against the fingers, just as the regular thumb does now. <br/><br/>
                    Here is a picture to help you see how it will be.<br/>
                    <div class="conlumn"><img src="img/thumb_picture.png"></div>
                    <br/>
                    <p style="clear:both;">
                        <br/><br/>
                        <?php
                        if($_GET['r']==0){
                            //echo "When working on this question, please focus on the <b>quantity of ideas</b>. Your performance will be judged solely based on how many ideas you propose. The more ideas you propose, the higher your performance is.";
                            echo "Now the question is: How will an individual who has extra thumb use this feature to help the SOCIETY?";

                        }else if($_GET['r']==1){
                            //echo "When working on this question, please focus on the <b>originality of ideas</b>. Your performance will be judged solely based on how unique are the ideas that you propose. The more original the ideas are, the higher your performance is.";
                            echo "Now the question is: How will an individual benefit when he or she has this extra thumb?";
                        }
                        ?>
                    </p>
                </p> 
            </div>   
            <hr/>
            <p>
            </p>
            <h2>
                <?php
                    echo "<a class='nextLink submit' href='thumbsurvey.php?o=".$_GET['o']."&r=".$_GET['r']."&t=".$_GET['t']."'>START</a>"
                ?>
            </h2>
        </div>
    </div>
    <div class="footer">
        BrainStorm Task Survey 2013 @ <a href="http://www.nthu.edu.tw/" target="_blank">National Tsing Hua University</a> and <a href="http://www.washington.edu/" target="_blank">University of Washington</a>.
         <?php
              session_start();
              if(!isset($_SESSION['thumbt'])){
                $_SESSION['thumbt'] = time();
                  if($_GET['o']==0){
                        $_SESSION['introduction'] = $_SESSION['thumbt'] - $_SESSION['introduction'];
                  }
              }
              echo "<br/>You spent ".$_SESSION['introduction']."s on introduction.php<br/>";

              // echo $_SESSION['thumbt'];
        ?>
    </div>  
</body>
</html>
