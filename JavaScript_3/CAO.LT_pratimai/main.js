const age = 33;
console.log(2022 - age);

// const vardas = "Petras";
// switch (vardas) {
//   case "Petras":
//   case "Jonas":
//   case "Algis":
//     console.log("Vyras");
//     break;
//   case "Julita":
//   case "Indrė":
//     console.log("Moteris");
//     break;
//     default:
//         console.log("Nežinau tokio vardo")
// }
// SWITCH:
// 1.Pratimas.
// Ar atsimenat paskutinį IF-ELSE pratimą? Būtent jį efektyviau apsirašyti su Switch, pasibandykime:
// Sukurkite variable 'car', kuris bus lygus kažkokiam automobilio prekės ženklui. 
// Aprašykite Switch, kuris pasakys ar tas brand'as priklauso VW Group, ar BMW Group, ar nei vienam.
// VW group priklauso: VW, Audi, Bentley, Bugatti, Lamborghini, Porsche.
// BMW group priklauso: BMW, Mini, Rolls-Royce.

const car = "BMW"

switch (car) {
  case "VW":
  case "Audi":
  case "Bentley":
  case "Bugatti":
  case "Lamborghini":
  case "Porsche":
    console.log("VW Group");
    break;
  case "BMW":
  case "Mini":
  case "Rolls-Royce":
    console.log("BMW Group");
    break;
  default: 
    console.log("Does not belong to any group")
}
// 2.Pratimas.
// Sukurkite variable 'userInput' ir pradžioje prilyginkite 'Obuolys'. Su Switch statement apsirašyk,
// kad 'userInput' reikmšmė yra - vaisius ar daržovė. 
// Pridėkite bent 5 kiekvienos kategorijos (trūksta idėjų? Wiki į pagalbą: vaisiai, daržovės).

const userInput = "Bulvė";

switch (userInput) {
  case "Obuolys":
  case "Kriaušė":
  case "Arbūzas":
  case "Melionas":
  case "Bananas":
    console.log("Vaisius");
    break;
  case "Bulvė":
  case "Batatas":
  case "Morka":
  case "Ropė":
  case "Moliūgas": 
    console.log("Daržovė"); 
    break;
  default: 
    console.log("Jūsų nurodytas objektas negali būti priskirtas nei vaisiaus, nei daržovės kategorijoms")
}

// 3.Pratimas. 
// Kokia šiandien diena? Sukurkite variable 'weekDay', kuris būtų lygus skaičiui - savaitės dienai, 
// skaičiuojant nuo 0 (t.y. pirmadienis - 0; antradienis - 1; trečiadienis - 2 ir t.t.). 
// Parašykite Switch statement, kuris paimtų skaičių ir jį pakeistų (ne sukurtų naują kintamąjį, 
// o pakeistų 'weekDay' reikšmę) į savaitės dieną žodžiu. Vėliau, atspausdink kintamąjį.

const weekDay = "0";

switch(weekDay) {
  case "0": 
    console.log("pirmadienis");
    break;
  case "1":
    console.log("antradienis");
    break;
  case "2":
    console.log("trečiadienis");
    break;
  case "3":
    console.log("ketvirtadienis");
    break;
  case "4":
    console.log("penktadienis");
    break;
  case "5":
    console.log("šeštadienis");
    break;
  case "6":
    console.log("sekmadienis");
    break;
  default: 
    console.log("Nėra tokios savaitės dienos");
}
console.log(weekDay)

// TEISINGAS ATSAKYMAS: 

// let weekDay = new Date().getDay();
// switch (weekDay) {
//   case 0:
//     weekDay = 'Sekmadienis';
//     break;
//   case 1:
//     weekDay = 'Pirmadienis';
//     break;
//   case 2:
//     weekDay = 'Antradienis';
//     break;
//   case 3:
//     weekDay = 'Trečiadienis';
//     break;
//   case 4:
//     weekDay = 'Ketvirtadienis';
//     break;
//   case 5:
//     weekDay = 'Penktadienis';
//     break;
//   case 6:
//     weekDay = 'Šeštadienis';
//     break;
// }
// console.log(weekDay);

const year = 2020; 
year === 2021 ? console.log("This year") : console.log("Previous year");

const currentYear = year === 2021 ? "this year" : "last year";
console.log(currentYear);

// TERNARY OPERATORS:
// 1.Pratimas.
// Parašykite variable su jūsų vardu. Pasiklauskite, jei vardo ilgis trumpesnis nei 
// 5 simboliai - tegul išmeta konsolėje "Short Name", kitaip - "Long Name".

const myName = "Julita"
myName.length <= 5 ? console.log("Short Name") : console.log("Long Name");

// ARBA: 

const vardas = 'John';
console.log(vardas.length < 5 ? "Short Name" : "Long Name");

// 2. PRATIMAS 
// Sukurkite du kintamuosius: 'clientAge' ir 'legalAge'. Patikriname ar vartotojas gali vairuoti automobilį - 
// t.y. clientAge didesnis arba lygus legalAge. Jei taip - išmeta 'Can Drive', kitaip 'Can't drive'.

// const clientAge = 18;
// const legalAge = 18

// clientAge >= legalAge ? console.log("Can Drive") : console.log("Can't Drive");

// 3.Pratimas
// Ahh, o jeigu antrame pratime įvesti -1 kaip amžių? Darom double ternary operator - t.y. operatorius operatoriuje. 
// Pirma paklausiame - jei amžius mažesnis nei 0; arba didesnis nei 120 - išmetame "Invalid Age". 
// Jei vis tik ne - tada false statement'e bus dar vienas operatorius su antru pratimo klausimu.

const clientAge = 19 ;
const legalAge = 18;

clientAge < 0 || clientAge > 120 ? console.log("Invalid Age") : clientAge >= legalAge ? console.log("Can Drive") : console.log("Can't Drive");

// 4. Pratimas
// Sukurkite variable 'phone', kuris būtų lygus 'iPhone'. Taip pat sukurkite variable isIphoneUser, kuris turėtų būti prilygintas 
// Boolean reikšmei (t.y. true arba false) priklausomai ar phone yra 'iPhone' ar bet koks kitas.

const phone = 'iPhone';
const isIphoneUser = phone === 'iPhone' ? console.log("True"): console.log("False")

// TEISINGAS ATSAKYMAS: 
// const isIphoneUser = phone === 'iPhone';


for(let i = 0; i < 5; i++) {
    console.log(i);
}

// įVADAS Į CIKLUS:
// 1.Pratimas.
// Padaryk, kad kompiuteris 10 kartų paconsole'intų tavo vardą (atsimink, konsolė tas pačias eilutes grupuoja ir šalia parašo 
// skaičiuką dažniausiai, vietoj to, kad išmestų kiekvienoje eilutėje).

for(let i = 0; i < 10; i++){
    console.log("Julita");
  }

// 2. Pratimas
// Pakoreguok pirmą pratimą, kad tiek vardas, tiek kiek kartų kartos - būtų kintamieji.

// const imię = "Apolinaras"
// const cyfra = "8"
// for (let i = 0; i < cyfra; i++) {
//   console.log(imię);
// }

// 3.Pratimas
// Prie savo vardo atspaudink ir 'i' raidę, t.y. kelintas ciklas yra (pvz.: "0. Petras", "1. Petras", "2. Petras")...

// const imię = "Julita"
// const cyfra = "8"
// for (let i = 0; i < cyfra; i++) {
//   console.log(i + ". " + imię)
// }
// ARBA: 

const imię = "Julita"
const cyfra = "8"
for (let i = 0; i < cyfra; i++) {
    console.log(`${i}. ${imię}`);
}
// 4. Pratimas
// Parašyk for loopą, kuris atspaudins nuo 10 iki 1 countdown konsolėje.

for (let i = 10; i > 0; i--) {
    console.log(i)
  }

//   arba

// let i = 10;
// while(i > 0) {
//   console.log(i);
//   i--;
// }