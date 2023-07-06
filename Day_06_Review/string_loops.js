
// My personal code
/*
function evenOddStr(str) {
    // My personal code
    var arrStr =  str.split('');
    var evenStr = [];
    var oddStr = [];
    for(let x = 0; x < arrStr.length; x++){
        let n = x % 2; // Find even / odd numbers
        if(n == 0) {
            evenStr.push(arrStr[x]);
        } else {
            oddStr.push(arrStr[x]);
        }
    }
    console.log(evenStr.toString().replaceAll(",", "") + " " + oddStr.toString().replaceAll(",", ""));

}

evenOddStr("Marvin");
*/

// From OpenAi
// Function to print even-indexed and odd-indexed characters
function printEvenOddChars(S) {
    let evenChars = "";
    let oddChars = "";
  
    // Iterate over the characters of the string
    for (let i = 0; i < S.length; i++) {
      // Check if the index is even or odd
      if (i % 2 === 0) {
        evenChars += S[i];
      } else {
        oddChars += S[i];
      }
    }
  
    // Print the even-indexed and odd-indexed characters
    console.log(evenChars + " " + oddChars);
  }

printEvenOddChars("Marvin");