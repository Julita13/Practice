const myForm = document.querySelector("#online-task")
const result = document.querySelector("#result");

myForm.addEventListener("submit", invertNumbers);

function invertNumbers(event) {
    event.preventDefault();
    const skaičiai = document.querySelector("input[name=skaičius]").value;
    const reverse = (skaičiai) => parseInt((skaičiai)
    .split("")
    .reverse()
    .join(""), 10);
    result.innerText = reverse(skaičiai);
}


// const myForm = document.querySelector('form');
// myForm.addEventListener("submit", myFunction);

// function myFunction(e) {
//   e.preventDefault();
//   const inputValue = document.querySelector('input').value;
//   //  arba const inputValue = myForm.elements["number"].value;
//   document.querySelector('p').innerText = reverse(inputValue);
// }

// function reverse(e) {
//   const spliting = e.split(''); //sukarpo po viena simboli ('')
//   const reverseSplit = spliting.reverse(); //simbolius suraso atvirksciai
//   return reverseSplit.join('');
// }