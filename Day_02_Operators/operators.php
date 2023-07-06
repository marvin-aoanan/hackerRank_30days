<?php
/**
 * Task
 * Given the meal price (base cost of a meal), tip percent (the percentage of the meal price being added as tip), and tax percent (the percentage of the meal price being added as tax) for a meal, find and print the meal's total cost. Round the result to the nearest integer.
 * 
 */
/*
 * Complete the 'solve' function below.
 *
 * The function accepts following parameters:
 *  1. DOUBLE meal_cost
 *  2. INTEGER tip_percent
 *  3. INTEGER tax_percent
 */

 /**
  * Explanation
  * meal_cost = 12, tip_percent = 20, tax_percent = 8
  * Calculation
  * tip = 12 and 12/100 x 20 = 2.4
  * tax = 8 and 8/100 x 12 = 0.96
  * total = meal_cost + tip + tax = 12 + 2.4 + 0.96 = 15.36
  * round(total) = 15
  */

function solve($meal_cost, $tip_percent, $tax_percent) {
    // Write your code here
    $tip_percent = ($meal_cost*$tip_percent)/100;
    $tax_percent = ($tax_percent*$meal_cost)/100;
    $total = $meal_cost + $tip_percent + $tax_percent;
    return round($total);
}

echo solve(12, 20, 8);
