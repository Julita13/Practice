//  JS Boolean metodai

// 1. Pratimas
// Pasirašykite variable isLegalAge, kurį priskirkite true arba false. Console.log'e atvaizduokite šį variable.
// Sukurkite antrą console.log, kuriame atvaizduokite šį variable su toString() metodu. Turėtų skirtis spalva teksto.

const isLegalAge = true;
console.log(isLegalAge);
console.log(isLegalAge.toString());
console.log(typeof isLegalAge.toString());  // additional checking, if boolean was converted to string;

// JS Number metodai
// 1. Pratimas
// Sukurk variable 'milkPrice'. Su JS patikrink ir informuok vartotoją alert() ar jam reikės centų, ar nereikės (t.y. ar skaičius sveikas).

// const milkPrice = 1.32;
// if(Number.isInteger(milkPrice)) {
//   alert("Jums nereikės centų");
// } else {
//   alert("Jums prireiks centų");
// }; 

//  dar vienas sprendimo būdas su ternary operators: 
// const milkPrice = 1.32;
// Number.isInteger(milkPrice) ? alert("Jums neprireiks centų") : alert("Jums prireiks centų");

// 2. Pratimas
// Pakoreguok pirmą pratimą, kad alert taip pat ir išmestų kainą - su dviem skaičias po kablelio (t.y. 3.00 Eur).

// const secondMilkPrice = 1;
// if (Number.isInteger(secondMilkPrice)) {
//   alert(`Jums nereikės centų, nes pieno kaina: ${secondMilkPrice.toFixed(2)}`);
// } else {
//   alert(`Jums prireiks centų, nes pieno kaina: ${secondMilkPrice.toFixed(2)}`);
// }; 

// 3. Pratimas
// Sukurk programą degalinei - bus du input laukeliai (kuriame su HTML): viename įvedame kainą su trim skaičias po kablelio, 
// antrame - degalų kiekį, su vienu skaičiu po kablelio (HTML naudojame step="0.1" atributą pasakyti kiek skaičių po kablelio 
// vartotojas gali paduoti). Pavyzdžiui: 1.399Eur x 5.1L. Pateikus duomenis - vartotojui apačioje turi išmesti kainą h1 laukelyje 
// (sukuriame su JS), su dviem skaičiais po kablelio (pvz. 7.13 Eur).

const calculator = document.querySelector("#third-task");

function calculatePrice(e) {
  e.preventDefault();
  const degalųKaina = document.querySelector("input[name = price]").value;
  const degalųKiekis = document.querySelector("input[name = amount]").value;
  const answer = document.createElement("h1");
  const galutinėKaina = (degalųKaina * degalųKiekis).toFixed(2);
  const finalAnswer = `Už degalus privalote sumokėti: ${answer.innerText = galutinėKaina} €`;
  document.body.append(finalAnswer);
}

calculator.addEventListener("submit", calculatePrice);
