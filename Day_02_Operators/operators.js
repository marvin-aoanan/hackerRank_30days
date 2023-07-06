function solve(meal_cost, tip_percent, tax_percent) {
    
    var tip_amount = (meal_cost * tip_percent) / 100;
    var tax_amount = (meal_cost * tax_percent) / 100;
    var total_cost = meal_cost + tip_amount + tax_amount;
    var rounded_cost = Math.round(total_cost);
    return rounded_cost;

}

console.log(solve(12, 20, 8));