// 
// Sukurkite HTML dokumentą su lentele (table) ir forma (form). Dokumentu turi būti žemiau aptartos žymos (angl. tags) ir jų atributai.
// Suraskite ir konsolėje atvaizduokite:
// − Lentelę su id = "age-table".
// − Pirmasistoje lentelėje (su id “age”). − Visus elementus formos viduje (jų turėtų būti 3). − Pirmąją įvestį () į formą. − Paskutinę įvestį () į formą.

const table = document.getElementById('age-table');
console.log(table);

const firstTd = document.getElementById('age');
console.log(firstTd);

const label = document.querySelectorAll('form label');
console.log(label);

const formosInput = document.querySelectorAll('form input');
console.log(formosInput[0]); //gaunam pirmą elementą iš masyvo
console.log('elementų kiekis:', formosInput.length);
console.log(formosInput[formosInput.length - 1]); //gaunam paskutinį elementą iš masyvo

document.body.addEventListener('mouseover', () => {
    console.log('Ačiū, kad paspaudėte mygtuką!')
  });

const manoMygtukas = document.querySelector('.submit');

manoMygtukas.addEventListener('click', () => {
  console.log('Paspaudei')
})

// Panaudodami event listeners ir classlist pridėjimo/nuėmimo/toggle metodus, įgyvendinkite tokį funkcionalumą:
// 1. Užvedus pelę ant stačiakampio, jo spalva pasidaro rausva (firebrick);
// 2. Pelei išėjus už kvadrato ribų, grąžinama melsva spalva.
// 3. Dukart spustelėjus ant stačiakampio, jo spalva tampa žalsva (limegreen);
// 4. Paspaudus mygtuką (Hide/Show) stačiakampis pradingsta/atsiranda. Galite panaudoti elem.style.display = ’none’ ir
// elem.style.display = ‘block’ DOM manipuliavimą.

const changeColor = document.getElementsByClassName("kvadratas")[0];
const myButton = document.querySelector(".hiding-square");
const showButton = document.querySelector(".show-square");
let showMode = true;
changeColor.addEventListener('mouseover', () => {myFunction("firebrick")});
changeColor.addEventListener("mouseout", () => {myFunction("blue")});
changeColor.addEventListener("dblclick", () => {changeColor.style.background = "limegreen"}); // lygiai tas pats, kas ir su funkcija.
myButton.addEventListener("click", () => {changeColor.style.display = "none"});
showButton.addEventListener("click", () => {changeColor.style.display = "block"});

// myButton.addEventListener("click", () => {
//     showMode = !showMode;
//     console.log(showMode);
//     // showMode ? changeColor.style.display = "block" : changeColor.style.display = "none";
//     changeColor.style.display = showMode ? "block" : "none";
// }) ---- tokiu būdu apsirašėmė lygiai tą patį, kaip ir aukštesnėse eilutėse

function myFunction(color) {
    changeColor.style.backgroundColor = color; 
}

// const inputLaukas = document.querySelector('input');
// const rezultatas = document.querySelector('span');
// const mygtukas = document.querySelector('button');

// inputLaukas.addEventListener('input', (event) => { 
// rezultatas.innerText = `Labas, ${event.target.value}`;})

// mygtukas.addEventListener('click', () => {
//     rezultatas.innerText = `Labas, ${inputLaukas.value}`;
//   })