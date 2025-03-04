
//parenthesis enclose/encapsulate expressions
// || is or - will pass if either is true
console.log((1 > 2) || (2 < 3))

//we can chain them together to make more complex expressions
console.log((true || false) && (true && true) || (true))

const yo = "pincone"
//switch
switch(yo) {
    case 'cat1':
        // code block
        break;
    case 'pinecone':
        console.log('found')
        break;
    default:
        console.log('default')
    // code block
}

//ternary
const ternaryValue = 1 > 2 ? 'true' : 'false';
console.log("ternaryValue")
console.log(ternaryValue)


//short circuit

const firstValue = 'first value'
const shortCircuit = (firstValue || nothing)

console.log("shortCircuit")
console.log(shortCircuit)


//loops
const cats = ['cat1', 'cat2', 'cat3'];

//for loops
for (let i = 0; i < cats.length; i++) {
    console.log(cats[i]);
}

//forEach, takes a callback function and passes the current element to it
cats.forEach(function(currentElement) {
    console.log(currentElement)
});

//for of
for (const cat of cats) {
    console.log(cat);
}

//for in - iterates object properties
const catObject = {
    name: 'Pinecone',
    type: 'munchkin'
}

for(const property in catObject) {
    console.log(property)
    console.log(catObject[property])
}


//while loops
let k = 0
while (k < cats.length) {
    console.log(cats[k]);
    k++;
}

//map - creates a new array from calling a function for every array element.
const cats2 = cats.map(function (cat){
    return 'new ' + cat
})
console.log(cats2)

//can also use arrow function syntax
const cats3 = cats.map(cat => 'new' + cat)
console.log(cats3)

//filter - creates a new array filled with elements that pass a test provided by a function
const cats4 = cats.filter(function (cat){
    if (cat === 'cat1') {
        return true;
    }
})
console.log(cats4)

const cats5 = cats.filter(cat => cat === 'cat1')
console.log(cats5)