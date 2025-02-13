const hasPinecone = (str) => {
    return str.toLowerCase().includes('pinecone');
};

const sentences = [
    "How are pinecone created?",
    "I love the purple skys",
    "Collecting pinecones is my hobby",
    "Cats are the best thing created",
    "Do pinecones taste like sap?"
];

const pineconeResults = sentences.filter(hasPinecone);

console.log("Sentences containing 'pinecone':", pineconeResults); 