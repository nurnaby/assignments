<?php
$subject_A = 75;
$subject_B = 80;
$subject_C = 65;
$subject_D = 90;
$total_marke = ($subject_A+$subject_B+$subject_C+$subject_D);
$ava_mark =$total_marke/4;



echo "<h4>Rista Avarage Marks:" .$ava_mark. "</h4>";







if ($ava_mark >=80 && $ava_mark<=100) {
     echo " You got A+" ;
     }
elseif ($ava_mark >=70 && $ava_mark<=79 ) {
     echo "You got A" ; 
     } 
elseif ($ava_mark >=60 && $ava_mark<=59 ) {
     echo "You got A-" ; 
     } 
elseif ($ava_mark >=50 && $ava_mark<=59 ) {
     echo "You got B" ; 
     } 
elseif ($ava_mark >=40 && $ava_mark<=49 ) {
     echo "You got C" ; 
     } 
elseif ($ava_mark >=1 && $ava_mark<=39 ) {
     echo "You got F" ; 
     } 
     
     
?>