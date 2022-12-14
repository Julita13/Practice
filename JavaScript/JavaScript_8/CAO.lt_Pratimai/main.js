//  1. Pratimas
// Sukurkite funkciją, į kurią būtų paduotas vietas parametras - n. Jis pasakys kokio dydžio L raidė turi būti 
// (ji sudaryta iš daug mažų L raidžių).
// t.y. jei kviesite funkciją fn(4), tai turėtų atspausdinti tokį rezultatą:
// L
// L
// L
// L L L L

function createLetter (event) {
    const size = Number(event.target.value);
    const result = document.querySelector("#first-answer");
    
    let firstAnswer = ""; 
    for (i = 0; i < size - 1; i++) { // -1 ??? 
        firstAnswer += "L<br>";
    }
    for (i = 0; i < size; i++) {
        firstAnswer += "L";
    }
    result.innerHTML = firstAnswer;
}

document.getElementById("size").addEventListener("input", createLetter)

// 2. Pratimas
// Sukurkite panašią funkciją, kuri atspausdintų C raidę.
// t.y. jei kviesite funkciją fn(5), tai turėtų atspausdinti tokį rezultatą:
// CCCCC
// C
// C
// C
// CCCCC

function drawC (event) {
    const dydis = Number(event.target.value);
    const theResult = document.querySelector("#second-answer");

    let outcome = ""; 
    for (i = 0; i < dydis; i++) {
        outcome += "C"
    }
    outcome += "<br>"
    for (i = 0; i < dydis - 2; i++) {  // kodėl čia 2? kaip veikia šita matematika?
        outcome += "C<br>";
    }
    for (i = 0; i < dydis; i++) {
        outcome += "C";
    }
    theResult.innerHTML = outcome;

    if (dydis < 3) {
        theResult.innerText = "The number provided should be at least 3"
    }
}

document.getElementById("dydis").addEventListener("input", drawC)


// 3. Pratimas
// Sukurkite input (be mygtuko), į kurį įrašius vardą ir nulipus nuo input (t.y. blur event), 
// vardas atsiras po apačia, tvarkingame sąraše (su kableliais):
// Pvz.: Petras, Jonas, Mantas, Antanas.

function showName (event) {
    const myName = event.target.value.trim();
    const thirdAnswer = document.getElementById("third-answer");
    if (myName) {
        thirdAnswer.innerText += ` ${myName}, `;
    }
}

document.getElementById("vardas").addEventListener("blur", showName);

//  4. Pratimas
// Sukurkite formą su dviem inputais, kurie paims skaičius. Suvedus duomenis - 
// turi alert'int skaičių, kuris arčiausiai 100. Pvz.: fn(101, 81) grąžins 101.


const myForm = document.querySelector("#fourth-task");
const fourthAnswer = document.querySelector("#fourth-answer");

function compareNumbers (firstNumber, secondNumber) {
    if (Math.abs(100-firstNumber) > Math.abs(100-secondNumber)) {
        fourthAnswer.innerText = secondNumber;
    }
    else {
        fourthAnswer.innerText = firstNumber
    }
}

function showResult (event) {
    event.preventDefault(); 
    const firstNumber = document.querySelector("input[name=firstnumber]").value;
    const secondNumber = document.querySelector("input[name=secondnumber]").value;
    compareNumbers(firstNumber, secondNumber);
}

myForm.addEventListener("submit", showResult);

//  5. Pratimas 
// Sukurkite programą, kurioje pakrovus puslapį susigeneruoja skaičius tarp 1 ir 5. 
// Vartotojas turi formą su vienu input - gali spėti skaičių. Atspėjus - išmeta alert(atspejai), 
// kitaip alert(neatspejai).

// const fifthTask = document.querySelector("#fifth-task");
// const randomNumber = Math.floor(Math.random() * 5) + 1;
// console.log(randomNumber)

// function atspėkSkaičių(event) {
//   event.preventDefault();
//   const guessNumber = document.querySelector("input[name=guess]").value;
//   const fifthAnswer = document.querySelector("#fifth-answer")
//   if (guessNumber == randomNumber) {
//     fifthAnswer.innerText = "Atspėjote!"
//   }
//   else {
//     fifthAnswer.innerText = "Neatspėjote"
//   }
// }

// fifthTask.addEventListener("submit", atspėkSkaičių);

// 6. Pratimas
// Pakoreguokite penktą pratimą, kad skaičiuotų iš kelinto karto atspėjai ir tai parašytų alert'e.

const fifthTask = document.querySelector("#fifth-task");
let counter = 0;
const randomNumber = Math.floor(Math.random() * 5) + 1;
console.log(randomNumber)

function atspėkSkaičių(event) {
  event.preventDefault();
  counter++; // kaip jis čia veikia???
  const guessNumber = document.querySelector("input[name=guess]").value;
  const fifthAnswer = document.querySelector("#fifth-answer")
  if (guessNumber == randomNumber) {
    fifthAnswer.innerText = `Atspėjote iš ${counter} karto`
  }
  else {
    fifthAnswer.innerText = "Neatspėjote"
  }
}

fifthTask.addEventListener("submit", atspėkSkaičių);

//  KAIP ŠIUO ATVEJU VEIKIA TAS COUNTER???