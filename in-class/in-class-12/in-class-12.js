function numberGenerator() {
    let num = 6;  // Parent variable
    
    function checkNumber() {  // Inner function using parent variable
        console.log(num);
    }
    
    num++;  // Modify the parent variable
    return checkNumber;  // Return the inner function
}

const number = numberGenerator();
number();  // Will output 7
  
  