<?php
// if (isset($_POST['submit'])) {
  // if(isset($_POST['white']))
  // {

    $correct = 0;
    echo "Question 1.) What milk color does a hippopotamus produce?:<br>";
    echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp You answered: ".$_POST["question1"];  //  Displaying Selected Value
    echo "<br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Correct Answer: Pink<br><br>";
    if ($_POST["question1"] == "Pink")
    {
      $correct++;
    }
    else {
      echo "FeedBack: Darn you Picked the wrong choice!<br><br>";
    }
    echo "Question 2.) Which country got rid of its Nuclear weapons?:<br>";
    echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp You answered: ".$_POST["question2"];
    echo "<br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Correct Answer: South Africa<br><br>";
    if ($_POST["question2"] == "South Africa")
    {
      $correct++;
    }
    else {
      echo "FeedBack: Darn you Picked the wrong choice!<br><br>";
    }
    echo "Question 3.) Who is the current president of the United States?:<br>";
    echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp You answered: ".$_POST["question3"];
    echo "<br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Correct Answer: Donald Trump<br><br>";
    if ($_POST["question3"] == "Donald Trump")
    {
      $correct++;
    }
    else {
      echo "FeedBack: Sadly... your wrong...<br><br>";
    }
    echo "Question 4.) What villian managed to kill Superman?:<br>";
    echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp You answered: ".$_POST["question4"];
    echo "<br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Correct Answer: Doomsday<br><br>";
    if ($_POST["question4"] == "Doomsday")
    {
      $correct++;
    }
    else {
      echo "FeedBack: Darn you Picked the wrong choice!<br><br>";
    }
    echo 'Question 5.) Which philospher said the famous line "I think, therefore I am"?:<br>';
    echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp You answered: ".$_POST["question5"];
    echo "<br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Correct Answer: Renee Descartes<br><br>";
    if ($_POST["question5"] == "Renee Descartes")
    {
      $correct++;
    }
    else {
      echo "FeedBack: Darn you Picked the wrong choice!<br><br>";
    }
    echo 'You Answered ';
    echo $correct;
    echo '/5 correctly!<br>';
    echo 'Thats a ';
    echo ($correct/5)*100;
    echo "%!";
  // }
// }

?>
