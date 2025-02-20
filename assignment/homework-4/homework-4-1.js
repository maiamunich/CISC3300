const cats = [
    {
        name: 'Charlie',
        adoptionStatus: 'available'
    },
    {
        name: 'Lily',
        adoptionStatus: 'not-available'
    },
    {
        name: 'Coco',
        adoptionStatus: 'available'
    },
    {
        name: 'Oreo',
        adoptionStatus: 'not-available'
    },
    {
        name: 'Luna',
        adoptionStatus: 'available'
    },
    {
        name: 'Milo',
        adoptionStatus: 'available'
    },
    {
        name: 'Lola',
        adoptionStatus: 'not-available'
    },
    {
        name: 'Leo',
        adoptionStatus: 'available'
    },
    {
        name: 'Willow',
        adoptionStatus: 'available'
    },
    {
        name: 'Bella',
        adoptionStatus: 'not-available'
    },
    {
        name: 'Max',
        adoptionStatus: 'available'
    },
    {
        name: 'Cleo',
        adoptionStatus: 'available'
    },
    {
        name: 'Lucy',
        adoptionStatus: 'not-available'
    },
    {
        name: 'Daisy',
        adoptionStatus: 'available'
    },
];

const cat = {name:"Pinecone", age:13, type:'Munchkin', cuteness: 9001};

/*Question 6*/ 
const cat2 ={adoptionStatus: 'available'}
console.log(cat.name);
console.log(cat2.adoptionStatus);
const availableCats = cats.filter(cat => cat.adoptionStatus === 'available').map(cat => cat.name);

const adoptionSentence = "I would love to adopt " + availableCats.join(", ") + " because they need a loving home!";

console.log("Available Cats:", availableCats);
console.log("Adoption Sentence:", adoptionSentence);

/* Question 7*/

const randomNumber = Math.random() * 10;
let message;
if (randomNumber > 5) {
    message = "greater than five!";
} else {
    message = "less than five!";
}
console.log("Random number:", randomNumber);
console.log("Message:", message);
 /* Question 8*/
 cats.forEach(cat => {
    console.log(`Name: ${cat.name}, Adoption Status: ${cat.adoptionStatus}`);
});

/* Question 9*/
if (1 == '1') {
    console.log("First comparison is true! (using ==)");
    console.log("This is because == converts types before comparing");
}

if (1 === '1') {
    console.log("This won't print!");
} else {
    console.log("Second comparison is false! (using ===)");
    console.log("This is because === checks both value AND type");
}

/* Question 10*/

const cuteCats = cats.map(cat => cat.name + " is cute!");

console.log("Cute cats:", cuteCats);
