const outputValue = document.getElementById("outputValue");
const outputArrayObject = document.getElementById("outputArrayObject");

const numbers = [1, 2, 12, 8, 3, 4, 5];

const products = [
    {
        name: "phone",
        price: 500,
    },
    {
        name: "laptop",
        price: 1500,
    },
    {
        name: "television",
        price: 1000,
    },
    
];

// sorting array
const result = numbers.sort(compareElement);

// sorting array object
// const resultProduct = products.sort(compareElement); // menggunakan function
const resultProduct = product.sort((a, b)=> a.price - b.price) // menggunakan aninomous arrow function

// menggunakan funtion
function compareElement(a, b) {
    return a - b;
}

console.log(resultProduct)

outputValue.innerHTML = "[" + result + "]"
