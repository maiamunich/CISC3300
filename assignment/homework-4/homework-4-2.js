// Generate random number and use ternary operator to set message
const randomNumber = Math.random() * 10;
let message;
if (randomNumber > 5) {
    message = "greater than five!";
} else {
    message = "less than five!";
}

// Log both the random number and the result
console.log("Random number:", randomNumber);
console.log("Message:", message);
