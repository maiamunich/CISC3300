const hasPinecone = (str) => {
    return str.toLowerCase().includes('pinecone');
};

const sentences = [
    "The pinecone fell from the tree",
    "The sky is blue today",
    "I love collecting pinecones in autumn",
    "Dogs are great pets",
    "This Pinecone database is amazing"
];

const pineconeResults = sentences.filter(hasPinecone);

console.log("Sentences containing 'pinecone':", pineconeResults); 