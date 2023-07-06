function weirdNotWeird(N) {
    //var N = Math.abs(N) % 0;

    function evenOdd(N) {
        if(N % 2 == 0) {
            return "even";
        } else {
            return "odd";
        }

    }
    
    if (evenOdd(N) == "even" && N > 2 && N < 5) {
        return "Not Weird";
    } else if (evenOdd(N) == "even" && N >= 6 && N <= 20) {
        return "Weird";
    } else if (evenOdd(N) == "even" && N > 20) {
        return "Not Weird";
    } else {
        return "Weird";
    } 
}

console.log(weirdNotWeird(22));
