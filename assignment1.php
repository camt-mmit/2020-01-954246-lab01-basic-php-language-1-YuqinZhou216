<?php
 /**
 *ID: 602110197
 *Name: Yuqin Zhou
 *WeChat:blue
 */


printf("Input data(price %%discount): ");
fscanf(STDIN,  "%d %d", $price, $discount);
$discount_cost= $price*$discount*0.01;
$netprice = $price-$discount_cost;
printf("price %.2f discount %.2f net price is: %.2f\n",$price, $discount_cost, $netprice);
