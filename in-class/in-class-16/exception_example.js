// Example of try-catch with custom exception message

function divideNumbers(a, b) {
    try {
        if (b === 0) {
            throw new Error("Division by zero is not allowed!");
        }
        const result = a / b;
        console.log(`The result of ${a} divided by ${b} is: ${result}`);
        return result;
    } catch (error) {
        console.error("Custom Error Message: " + error.message);
        // You could also throw the error again if needed
        throw error;
    }
}

// Test the function with valid numbers
try {
    divideNumbers(10, 2);  // This should work fine
} catch (error) {
    console.error("Main block error:", error.message);
}

// Test the function with division by zero
try {
    divideNumbers(10, 0);  // This will throw our custom error
} catch (error) {
    console.error("Main block error:", error.message);
} 