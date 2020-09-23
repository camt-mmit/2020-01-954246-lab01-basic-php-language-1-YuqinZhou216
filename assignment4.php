<?php
printf("Inuput numbers(number1-10):");
fscanf(STDIN,"%s%s%s%s%s%s%s%s%s%s", $number1,$number2,$number3,$number4,$number5, $number6,$number7,$number8,$number9,$number10 ); 
printf("The maxium number %s\n",max($number1,$number2,$number3,$number4,$number5,$number6,$number7,$number8,$number9,$number10));