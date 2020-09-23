<?php
printf("Inputdata (number1 number2): ");
fscanf(STDIN, "%d %d", $x,$y);
if($x>$y) printf("%d\n greater than %d\n",$x, $y);
else if ($x<$y) printf("%d\n less than %d\n",$x,$y);
else printf("%d\n equal to %d\n",$x,$y);
