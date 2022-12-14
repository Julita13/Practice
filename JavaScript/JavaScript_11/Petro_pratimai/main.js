// document.querySelector("h1").textContent = "Bye";
// document.querySelector("h1").innerHTML = 
//     "<span style='color: red'>Yellow</span>"

//  .innerHTML - nerekomenduojamas naudoti, nes juo galima pernelyg laisvai manipuliuoti.
// Pvz.: įrašyti jo viduje script'o tag'a ir išdarinėti su juo ką tik norime. 
// SAUGUMO SUMETIMAI  - potential security risk - innerHTML nerekomenduojama naudoti. 

const header = document.createElement("h2");
header.textContent = "Buenos dias!";
document.body.append(header);
header.style.color = "red"
// append - prideda elementą į body galą, prepend - prideda dokumentą į body pradžią. 
// Nebūtinai reikia append'inti į body, galima tą daryti ir į kitus HTML elementus, pvz į container'į.

// 1. Pratimas
// Susikuriame h1 elementą, jame įrašome savo vardą, 
// pastilizuojame, kad elementas būtų raudonas ir pridedame jį prie <body>.

const vardas = document.createElement("h1");
vardas.innerText = "Julita";
vardas.style.color = "red"; 
document.body.append(vardas);

// 2. Pratimas 
// Sukuriame <ul> elementą, o jame - tris <li> elementus su mašinų brand'ais. 
// <body> turi atsirasti <ul>, kuriame trys <li>

const newList = document.createElement("ul");
const newItem1 = document.createElement("li");
const newItem2 = document.createElement("li");
const newItem3 = document.createElement("li");
newItem1.innerText = "Toyota";
newItem2.innerText = "Chrysler";
newItem3.innerText = "Ford";
newList.append(newItem1, newItem2, newItem3);
document.body.append(newList);


