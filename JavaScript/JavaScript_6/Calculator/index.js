// Užduotis
// Let’s write basic calculator app - create new project with index.js and  index.html.

// Create basic html that has two input fields and buttons:
// sum (+) - to calculate sum of two digits from input
// sub (-) - to calculate subtraction of two digits
// div (/) - to divide first input number with second
// mul (*) - to multiply two numbers
// mod (%) - to calculate modulus of first number divided by second

// You should use named and anonymous functions in your project.
// To assign click action to the buttons use event handlers and selectors.
// You can use either selectors to extract value from inputs or event listeners to  listen for their input(e.g. ‘input’, ‘blur’).

// Answer of the operation can either be outputted as html value of selected tag or  as an alert.

const firstNumber = document.getElementById('first');
const secondNumber = document.querySelector('#second');
const sum = document.querySelector('#sum');
const sub = document.querySelector('#sub');
const div = document.querySelector('#div');
const mul = document.querySelector('#mul');
const mod = document.querySelector('#mod');
const result = document.querySelector('#result');
const clear = document.querySelector('#clear');


sum.addEventListener('click', () => {
    // result.innerText = calculator('sum', +firstNumber.value, +secondNumber.value); < - taip atrodo atsakymas su calculator funkcija
    result.innerText = +firstNumber.value + +secondNumber.value
})

sub.addEventListener('click', () => {
    result.innerText = +firstNumber.value - +secondNumber.value
})

div.addEventListener('click', () => {
    result.innerText = +firstNumber.value / +secondNumber.value
})

mul.addEventListener('click', () => {
    result.innerText = +firstNumber.value * +secondNumber.value
})

mod.addEventListener('click', () => {
    result.innerText = +firstNumber.value % +secondNumber.value
})

// MOD funkcijos aprašymas kitaip:
// ARBA
// function getModule() {
//     result.innerText = +firstNumber.value % +secondNumber.value
// }

// ARBA
// const getModule = () => {
//     result.innerText = +firstNumber.value % +secondNumber.value
// };
// mod.addEventListener('click', getModule);

clear.addEventListener('click', () => {
    result.innerText = ''; 
    firstNumber.value = '';
    secondNumber.value = '';
})


// function calculator(value, n1, n2) {
//     switch(value) {
//         case 'sum': 
//             return n1 + n2;
//         case 'sub': 
//             return n1 - n2;
//         case 'div':
//             return n1 / n2;
//         case 'mul': 
//             return n1 * n2;
//         case 'mod':
//             return n1 % n2;
//     }
// }

// function displayResult(value, n1, n2) {
//     result.innerText = 'Rezultatas: '+calculator(value, n1, n2);
// }