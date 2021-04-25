<?php
$score = 0;
$q1 = $_POST["q1"];
$q2 = $_POST["q2"];
$q3 = $_POST["q3"];
$q4 = $_POST["q4"];
$q5 = $_POST["q5"];

 if ($q1 == "University of Kansas"){
   $score += 1;
 }
 if ($q2 == "2021"){
   $score += 1;
 }
 if ($q3 == "Joe Biden"){
   $score += 1;
 }
 if ($q4 == "0"){
   $score += 1;
 }
 if ($q5 == "Spongebob Squarepants"){
   $score += 1;
 }
//$percent = 5;
$percent = ($score)/5*100;

echo"1) What school is this class for?<br>";
echo"You Answered: $q1<br>Correct Answer: University of Kansas<br><br>";
echo"2) What year is it?<br>";
echo"You Answered: $q2<br>Correct Answer: 2021<br><br>";
echo"3) Who is the president of the United States?<br>";
echo"You Answered: $q3<br>Correct Answer: Joe Biden<br><br>";
echo"4) Solve for x: sin(0) = x<br>";
echo"You Answered: $q4<br>Correct Answer: 0<br><br>";
echo"5) What TV show is the quote 'I can't hear you it's too dark in here!' from?<br>";
echo"You Answered: $q5<br>Correct Answer: Spongebob Squarepants<br><br>";

echo"Score: $score/5<br>Percentage: $percent%";
 ?>
