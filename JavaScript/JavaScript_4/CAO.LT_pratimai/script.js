// let i = 0; 

// while (i < 5) {
//   console.log(i);
//   i++
// }
// TAS PATS: tačiau: jei EXECUTION CODE bent vieną kodą pasileidžia - nesvarbu, atitinka sąlygą ar ne.
// let i = 6;

// do {
//     console.log(i);
//     i++
// } while (i < 5)

// WHILE ir DO ... WHILE 
// 1. Pratimas
// Su while ciklu pasirašykite, kad Jūsų vardą išvestų į console 3 kartus.

// const vardas = "Julita";
// let i = 0;
// while (i < 3) {
//     console.log (vardas);
//     i++
// }

// 2. Pratimas 
// Sukurkite kintamąjį (let combo = ""). Kiekvieną kartą paleidus ciklą į combo prisirašo Jūsų vardas 
// (t.y. while ciklo viduje darytų combo += "Petras" ). Sukurkite programą, kur bus kintamasis (let times = 5), 
// kuris nurodys kiek kartų į combo kintamąjį turėtų būti pridėtas Jūsų vardas. Jei times skaičius 0 arba 
// mažiau - vis tiek bent vieną kartą įvyks ciklas ir Jūsų vardą įrašys į combo.
// Pvz:
// times = 0; combo = "Petras"
// times = 1; combo = "Petras"
// times = 2; combo = "PetrasPetras"
// times = 3; combo = "PetrasPetrasPetras"

// let combo = " ";
// const vardas = "Julita";
// const times = 3; 

// do {
//     combo += vardas;
//     times--;
// } while (times > 0); 
// console.log(combo);

// const random1 = Math.floor(Math.random() * 10) + 1;
// console.log(random1);

// // JS MATH OBJEKTAS
// // 1. Pratimas 
// // Suskaičiuok su JS koks bus cos(0) (t.y. cos, kai kampas 0 radians).
 
// console.log(Math.cos(0));

// 2. Pratimas
// Sukurk random skaičių tarp 1 ir 5 (įskaitant abu).

// let skaičius = Math.floor(Math.random() * 5) + 1; 
// console.log(skaičius)

// 3. Pratimas 
// Sukurk random skaičių tarp 5 ir 12 (įskaitant abu).

// let skaičius = Math.floor(Math.random () * (12 - 5 + 1)) + 5;
// console.log(skaičius)

// 4. Pratimas
//  Sukurk programą, kur vartotojui atidarius puslapį, alert išmestų ar jis laimėjo bilietą ar ne. 
// Tikimybė laimėti - viena iš penkių. (Hint: čia reikės if-else su math random).

// let skaičius = Math.floor(Math.random() * 5) + 1;

// if (skaičius === 1) {
//   console.log("Laimėjai!");
// } else {
//   console.log("Nieko nelaimėjai :(")
// }

// document.body.innerHTML =  "<h1>Hello!</h1>" - atsispindi HTML elementas
// document.body.textContent =  "<h1>Hello!</h1>" - atsispindi tik tekstas

// DOM Manipuliavimas
// 1.Pratimas
// Susikurkite projektą, be jokių HTML tag'ų body. Su JavaScript sukurkite <h2> elementą su savo vardu ir pridėkite į <body>.

// document.body.innerHTML = "<h2>Julita</h2>";

// 2.Pratimas
// Sukurkite HTML'e <h1> tag'ą su id="name" ir tekstu "unknown". Naudodami JavaScript pakeiskite šio elemento tekstą į savo vardą .
const vardas = "Julita"
document.getElementById("name").textContent = vardas;

// 3. Pratimas 
// Sukurkite unordered list su trim list item'ais: "Pienas", "Varškė", "Jautiena". Su JavaScript pakeiskite paskutinį list item tekstą į "Sūris".

document.querySelector('li:last-child').textContent = "Sūris";

// document.querySelector("p:nth-child(2)").textContent = "bye"
// document.querySelectorAll("p")[1].textContent = "bye"

// 1. Pratimas
// Ištaisykite klaidą. Nusikopijuokite apačioje esantį kodą ir su JavaScript pasikeiskite antrame paragrafe esantčio <span> tekstą - iš 'red' į 'blue':
// <p class="redtext">This text will be in <span>red</span></p>
// <p class="bluetext">This text will be in <span>red</span></p>
// <p class="yellowtext">This text will be in <span>yellow</span></p> 

document.querySelector('.bluetext > span').textContent = 'blue';

// 2.Pratimas
// Sukurkite ordered list su trimis list item duota eilės tvarka: "BMW group", "VW group" ir "GE".
// <ol>
//   <li>BMW group</li>
//   <li>VW group</li>
//   <li>GE</li>
// </ol>
// Naudodami JavaScript apkeiskite pirmus du sąrašo elementus vietomis. Tačiau, kabliukas - negalima JavaScript įrašyti testo (kitaip tariant hard-codinti). 
// Pirma Jūs turite pasiimt pirmo ir antro sąrašo elemento reikšmes ir jas išsisaugoti į kintamuosius.

const firstListItem = document.querySelector('li:first-child');
const secondListItem = document.querySelector('li:nth-child(2)');

const bmw_group = firstListItem.textContent;
const vw_group = secondListItem.textContent;

firstListItem.textContent = vw_group;
secondListItem.textContent = bmw_group;