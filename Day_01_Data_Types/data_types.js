function main() {
    var i = 4
    var d = 4.0
    var s = "HackerRank "
    // Declare second integer, double, and String variables.
    var num;
    var db;
    var str;

    // Read and save an integer, double, and String to your variables.
    num = parseInt(readLine());
    db = parseFloat(readLine());
    str = readLine();

    // Print the sum of both integer variables on a new line.
    let sumInt = num + i;
    console.log(sumInt);

    // Print the sum of the double variables on a new line.
    let sumFloat = db + d;
    console.log(sumFloat.toFixed(1));

    // Concatenate and print the String variables on a new line
    // The 's' variable above should be printed first.
    console.log(s + str);

}