// JS String metodai
// 1. Pratimas

// Sukurk du input'us - vieną, kur vartotojas įves savo vardą; kitą - skaičių. 
// Pirma, patikrink ar skaičius sveikas (jei ne - alert). Jei sveikas, po apačia sukurk h1 elementą kur vardas bus atkartotas tiek kartų, 
// kiek skaičius nurodo.


const firstTask = document.querySelector("#first-task");

function repeatName(event) {
  event.preventDefault();
  const myName = document.querySelector("input[name=vardas]").value;
  const myNumber = Number(document.querySelector("input[name=skaičius]").value);
  if (Number.isInteger(myNumber)) {
    const newHeader = document.createElement("h1");
    newHeader.innerText = myName.repeat(myNumber);
    firstTask.append(newHeader);
  } else {
    alert("Pateikite sveikąjį skaičių");
  }
  console.log(Number.isInteger(myNumber))
}

firstTask.addEventListener("submit", repeatName);

// 2.Pratimas
// Sukurk input, kur vartotojas įves savo vardą. Įvedus - alert'ink kokio ilgio yra vardas. 
// Tačiau užtikrink, kad priekyje ir gale nebūtų įskaičiuoti tarpeliai.

const secondTask = document.querySelector("#second-task");

secondTask.addEventListener("submit", (event) => {
    event.preventDefault();
    const miNombre = (document.querySelector("input[name=nombre]").value).trim();
    alert(`Jūsų vardo ilgis: ${miNombre.length} raidės`);
    }
)

// 3.Pratimas
// Sukurk input, kur vartotojas įves savo pilną vardą (t.y. vardą ir pavardę). 
// Padaryk, kad JS pridėtų du h1 tag'us, viename - vardas, kitame - pavardė.

// const thirdTask = document.querySelector("#third-task");

// function writeFullName(e) {
//   e.preventDefault();
//   const fullName = document
//     .getElementById("full-name")
//     .value.trim()
//     .split(" ");
//   const newName = document.createElement("h1");
//   const newSurname = document.createElement("h1");
//   newName.innerText = fullName[0];
//   newSurname.innerText = fullName[1];
//   thirdTask.append(newName, newSurname);
// }

// thirdTask.addEventListener("submit", writeFullName);

// 4. Pratimas
// Pakoreguok trečią pratimą, kad įskaičiuotų, jei pavardė ilgesnė nei vienas žodis.

// const thirdTask = document.querySelector("#third-task");

// function writeFullName(e) {
//   e.preventDefault();
//   const fullName = document.getElementById("full-name").value.trim();
//   const newName = document.createElement("h1");
//   newName.innerText = fullName.split(" ")[0];
//   const newSurname = document.createElement("h1");
//   newSurname.innerText = fullName.replace(newName, "").slice(1);
//   thirdTask.append(newName, newSurname);
// }

// thirdTask.addEventListener("submit", writeFullName);

//VEIKIANTIS VARIANTAS? :

const thirdTask = document.querySelector("#third-task");

function writeFullName(e) {
  e.preventDefault();
  const fullName = document.getElementById("full-name").value;
  const parts = fullName.split(" ");
  const newName = document.createElement("h1");
  newName.innerText = parts.shift();
  const newSurname = document.createElement("h1");
  newSurname.innerText = parts.join(" ");
  thirdTask.append(newName, newSurname);
}

thirdTask.addEventListener("submit", writeFullName);
