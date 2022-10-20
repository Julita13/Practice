// // 1. Pratimas
const manoSpan = `<span>Savaites dienos</span>`;
 
let element = document.createElement ('span');
element.innerHTML = manoSpan;

let elementDiv = document.createElement ('div');
let text = document.createTextNode('Mano tekstas');
const elementToRemove = document.querySelector('#trecias');

document.body.append(elementDiv);
document.body.prepend(element);

elementToRemove.remove(); //remove funcijai nereikia argumentu.
//document.querySelector(`#trecias`).remove();

const elementToAddAttribute = document.querySelector('#penktas');
elementToAddAttribute.setAttribute('class', 'red');

const firstParagraph = document.querySelectorAll('p')[0]; //pasirenkam iš visų elementų pirmą paragraph, nurodydami, kad norime nulinio elemento.
console.log(firstParagraph.getAttribute('class')); //sužinom kokias klases turi paragraph

// 2. Pratimas
// Susikurkite HTML dokumentą, kuriame yra “main” elementas.
// UŽDUOTIS: Sukurti jam (jo vidui) tokį markup naudojant JavaScipt:
//
// <h2> tag’as su tekstu; 
// <p>tag’as su tekstu; 
// <ul> tag’as, kurio viduje yra vienas <li>
// <p> tag’as su tekstu;

const main = document.querySelector("main");
let hElement = document.createElement("h2");
hElement.textContent = "Labas";

let pElement = document.createElement("p");
pElement.textContent = "Hello";
let ulElement = document.createElement("ul");
let liElement = document.createElement("li");
liElement.textContent = "123";
ulElement.prepend(liElement);
let secondP = document.createElement("p");
secondP.innerText = "Viso"

main.prepend(hElement, pElement, ulElement, secondP);

// 3. Pratimas, kai išrenkamas random studento vardas. 
// const studentai = ['Ana', 'Andrius', 'Aušra', 'Darius', 
// 'Edita', 'EglėN', 'EglėP', 'Gediminas', 'Gintas', 
// 'Jevgenij', 'Julita', 'Marius', 'Rūta', 'Virginija', 
// 'Vytautas'];
// const max = Math.floor(studentai.length);
// const random = Math.floor(Math.random() * (max - 1 + 1)) + 1;

// let result = '';
// for (let i = 1; i < studentai.length; i++) {
//   if (i === random) {
//     result += `<p class="red">${studentai[i]}</p>`;
//   } else {
//     result += `<p>${studentai[i]}</p>`;
//   }
// }

// document.body.innerHTML = result;

// 4. Pratimas
const cityInput = document.querySelector("#myInput");
const mySecondList = document.querySelector(".myList");
const myButton = document.querySelector("button");


myButton.addEventListener("click", myFunction);

function myFunction(event) {
    event.preventDefault();
    const miestas = cityInput.value;
    const surašytiMiestai = document.querySelectorAll("li");
    const createLi = document.createElement("li");
    const answer = document.querySelector("#atsakymas");
    createLi.innerText = miestas; 
    let miestasEgzistuoja = false;
    for (let i = 0; i < surašytiMiestai.length; i++) {
        if (surašytiMiestai[i].innerText === miestas) {
            miestasEgzistuoja = true;
        }
    }
    if (miestasEgzistuoja) {
        answer.innerText = "Toks miestas jau egzistuoja"
    } else {
        mySecondList.append(createLi);
    }
}


