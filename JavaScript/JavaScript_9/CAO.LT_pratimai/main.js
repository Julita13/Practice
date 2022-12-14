// 1. Pratimas
// H1 elemente parašykite savo vardą. Paspaudus ant vardo - tegul jūsų vardas atsiranda 
// per vidurį ekrano, dvigubai didesniu font'o dydžiu ir raudona spalva.

const myName = document.querySelector("#my-name");
myName.addEventListener("click", () => {
    myName.style.color = "red";
    myName.style.textAlign = "center";
    myName.style.fontSize = "4rem"
    }
)

// ARBA: 
// document.querySelector('h1').addEventListener('click', (event) => {
//     event.target.style.textAlign = "center";
//     event.target.style.fontSize = "4rem";
//     event.target.style.color = "red";
//   });

// 2. Pratimas
// Išbandome ekraną. Sukurkite mygtuką su HTML. JS pasirašykite, kad mygtukas position: absolute ir jo lokacija - 
// viršus, kairė. Paspaudus ant mygtuko, jis turi peršokti į apačią dešinę pusę. Paspaudus vėl - į viršų, kairę pusę. 
// Ir taip šokinėti įstrižai per ekraną kiekvieno paspaudimo metu

// const jumpingButton = document.querySelector("#jumping-button");
// jumpingButton.style.cssText = 'position:absolute; top:0; left:0;';

// let isInOriginalPosition = true;
// function changePosition (event) {
//     event.target.style.cssText = isInOriginalPosition ? 'position:absolute; bottom:0; right:0;' : 'position:absolute; top:0; left:0;';
//     isInOriginalPosition = !isInOriginalPosition;
// }

// jumpingButton.addEventListener("click", changePosition); 
    
// 3. Pratimas
// Pakoreguokite antrą pratimą, kad mygtukas suktųsi ratu - laikrodžio rodykle.

const jumpingButton = document.querySelector("#jumping-button");
jumpingButton.style.cssText = 'position:absolute; top:0; left:0'; // galima įrašyti visą CSS tekstą!!!

let corner = 0;
const cornerStyles = ['position:absolute; top:0; right:0;', 'position:absolute; bottom:0; right:0;', 'position:absolute; bottom:0; left:0;', 'position:absolute; top:0; left:0;'];
function changePosition(event) {
  if (corner < cornerStyles.length) {
    event.target.style.cssText = cornerStyles[corner];
    corner++;
  }
  if (corner === cornerStyles.length) {
    corner = 0;
  }
}

jumpingButton.addEventListener('click', changePosition);

// 4. Pratimas
//  Sukurkite input elementą (formos ar mygtuko nereikia), kur vartotojas galės įrašyti savo vardą. Kai rašo - keičiasi puslapio stilius. 
// Jei įrašytos yra du simboliai arba mažiau - viso puslapio fonas raudonas. Jei daugiau nei du simboliai - puslapio fonas žalias.

const writingName = document.querySelector("#write-name");

writingName.addEventListener("input", () => { 
    const name = document.querySelector("input[name=write-name]").value;
    document.body.style.backgroundColor = name.length < 3 ? "red" : "green"
})

//  5. Pratimas
// Sukurkite mygtuką HTML'e. O su JS pasirašykite array su keturiom spalvom (["red", "green", "blue", "yellow"]). 
// Paspaudus ant mygtuko - tegul jo spalva pasikeičia į atsitiktinę spalvą.

const colors = ["red", "green", "blue", "yellow"];
const coloredButton = document.getElementById("fifth-task"); 

coloredButton.addEventListener("click", () => {
    const randomColor = colors[Math.floor(Math.random()*colors.length)];
    coloredButton.style.backgroundColor = randomColor;
}); 

//  6. Pratimas
// Pasikoreguokime penktą pratimą - šį kartą array nereikės, keisime RGB spalvas. Paspaudus ant mygtuko, susigeneruoja trys random skaičiai 
// (nuo 0 iki 255, imtinai), šie skaičiai atvaizduoja spalvų paletę (red, green, blue => RGB). 
// Padarykite, kad paspaudus ant mygtuko, jo fono spalva pasikeistų į atsiktinę spalvą pagal RGB paletę.

const lastButton = document.getElementById("sixth-task");

function generateRandomColor() {
  const red = Math.floor(Math.random()*255)+1;
  const green = Math.floor(Math.random()*255)+1;
  const blue = Math.floor(Math.random()*255)+1;
  return "rgb(" + red + "," + green + "," + blue + ")";
  // arba TAS PATS: 
  // return `rgb(${red}, ${green}, ${blue})`;
}

lastButton.addEventListener("click", event => {
  event.target.style.backgroundColor = generateRandomColor();
})