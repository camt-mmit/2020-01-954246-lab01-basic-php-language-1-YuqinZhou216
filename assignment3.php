<?php
    printf("input menu number: ");
    fscanf(STDIN, "%s", $menu);
    if($menu==1) { printf("input (number1,number2): ");
    fscanf(STDIN,"%d%d",$a,$b);
      (printf("price %d, discount %f,net %.2f",$a,$b=$a*$b/100,$c=$a-$b));
    } else if($menu==2)  {printf("input (number1,number2): ");
    fscanf(STDIN,"%d%d",$a,$b);
    if ($a==$b) printf("$a equal $b");
      else if($a < $b) printf( "$a less than $b"); 
      else printf( "$a greater $b");
    }
   else printf("menu %s",$menu);