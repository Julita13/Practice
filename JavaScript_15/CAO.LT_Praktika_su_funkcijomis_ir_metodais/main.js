// 1. Pratimas
// Parašykite funkciją, kuri priims minutes (number) ir grąžins sekundes (string: "x seconds").
// Pvz: fn(3) => "180 seconds"

function calculateSeconds(minutes) {
    const seconds = minutes * 60;
    return `${seconds} sekundės`
  }
console.log(calculateSeconds(3))

// ARBA CAO atsakymas: 

const fn = (n1) => n1 * 60 + " seconds";
console.log(fn(3));

// 2.Pratimas
// Parašykite funkciją, kuri priims vartotojų amžių ir grąžins kiek dienų jis jau nugyveno (skaičių, metų tikslumu, 
// neskaičiuojant keliamųjų metų - t.y. visada 365 dienos).
// Pvz: fn(20) => 7300.

const age = 3; 
function calculateDays(a) {
  return a * 365;
}
console.log(calculateDays(age))

const fn2 = (n1) => n1 * 365 ;
console.log(fn2(6))

// ARBA

function calculateDays2(n1) {
    return n1 * 365;
   };
console.log(calculateDays2(10))

// 3.Pratimas
// Parašykite arrow funkciją (viena eilutė), kuriai padavus skaičių – ji grąžintų jo kvadratą.
// Pvz.: fn(5) -> 25

const kvadratas = (n1) => n1 * n1;
console.log(kvadratas(5));

// ARBA

const kvadratas2 = (n1) => Math.pow(n1, 2);
console.log(kvadratas2(6))

// ARBA

const fn3 = (n1) => n1**2;
console.log(fn3(8));

// 4.Pratimas
// Parašykite arrow funkciją (viena eilutę), kuri paėmus du skaičius (aukštį ir plotį) grąžintų trikampio plotą ((aukštis * plotis) / 2)
// Pvz: fn(10, 10) -> 50

const plotis = (n1, n2) => (n1 * n2)/2;
console.log(plotis(4, 8));

// 5.Pratimas
// Parašykite funkciją, kuri paims parametrą String, ir grąžins to parametro paskutinę raidę.
// pvz. Paduodu: "Petras", grąžina "s"

function returnLastLetter(string){
    return string.charAt(string.length-1);
  }
  
console.log(returnLastLetter("Julita"));

// ARBA
const returnLastLetter2 = (string) => string.charAt(string.length - 1)
console.log(returnLastLetter2("Kamilė"));

// 6.Pratimas
// Sukurkite funkciją, kuri paims stringą ir grąžins jį apverstą mažosiomis.
// T.y. "Petras" -> "sartep"

const reverseLowerLetters = (string) => string.split("").reverse().join("").toLowerCase();
console.log(reverseLowerLetters("Julita"));

// ARBA ŽYMIAI ILGESNIS VARIANTAS

const vardas = "DoMaNtas";
function reverseLowerLetters2(string) {
    return string.split("").reverse().join("").toLowerCase();
  };
  
console.log(reverseLowerLetters2(vardas));

//  7. Pratimas
// Parašykite funkciją, kuri paims array skaičių ir grąžins didžiausią neigiamą skaičių.
// pvz: [-1, -100, -5, 10, 0, 11] -> "-1"
// Mano sprendimas: 

const differentNumbers = [-100, -5, -1, 10, 0, 11];
const negativeNumbers = differentNumbers.filter(x => x < 0).sort((a, b) => b - a)[0];

console.log(negativeNumbers);

// ARBA: 

console.log(differentNumbers.filter(x => x < 0).sort((a, b) => b - a)[0]);

// ARBA CAO sprendimas: 

const fn7 = (nums) => nums.filter(x => x < 0).sort((a, b) => b - a)[0];
console.log(fn7(differentNumbers));

// 8. Pratimas
// Sukurkite funkciją, kuri paims skaičių parametrą ir sugeneruos array su tiek random skaičių (nuo 1 - 10)), kiek parametre nurodyta.
// T.y. "3" => [1, 6, 3].

let fn8 = (num) => {
  let newArray = [];
  for(let i = 0; i < num; i++) {
    let randomNumber = Math.floor(Math.random() * 11);
    newArray.push(randomNumber)
  }
  return newArray
}

console.log(fn8(3));

// ARBA CAO.LT
// 
// const randomNumbers = (quant) => {
//   const generatedNums = [];
//   for(let i = 0; i < quant; i++){
//     generatedNums.push(Math.floor(Math.random() * 10) + 1)
//   }
//   return generatedNums;
// }

// 9.Pratimas
// Sukurkite arrow funkciją, kuri paimtų du skaičius ir grąžintų boolean value ar skaičių suma didesnė už 100 ar mažesnė (ir lygi).
// Pvz.: fn(10, 50) -> true

const compareSum = (n, m) => n + m > 100;
console.log(compareSum(50, 51));

// TAS PATS (ilgesnis variantas)
const compareSum2 = (n, m) => n + m > 100 ? true : false;
console.log(compareSum2(50, 4))

// 10. Pratimas
// Parašykite funkciją, kuri paimtų array (susideda iš objektų su vardu ir amžium) bei grąžina array išrykiuotą pagal amžių ir jei amžius sutampa 
// – vardus a>z tvarka. Pvz.: fn([{name: „Alfredas“, age: 25}, {name: „Jonas“, age: 25}, {name: „Kasparas“, age: 20}]) -> 
// [{name: „Kasparas“, age: 20}, {name: „Alfredas“, age: 25}, {name: „Jonas“, age: 25}]


//  BLOGAI padarytas!! Pasiklausti
const myArray = [
  {
    name: 'Žygimantas', 
    age: 25,
  }, 
  {
    name: 'Jonas', 
    age: 25,
  }, 
  {name: 'Kasparas', 
  age: 20,
  },
]

const compareAge = (array) => array.sort((a, b) => a.age - b.age)
const compareNames = (array) => array.sort(array.name)
console.log(compareNames(myArray))


// CAO atsakymas: 
// const fn10 = (array) => array.sort((a, b) => a.name > b.name ? 1 : -1).sort((a, b) => a.age - b.age);
// console.log(fn10(myArray));


// 11.Pratimas
// Parašykite funkciją, į kurią padavus datą, pasakys ar išeiginė ar ne (visos išeiginės turi būti saugomos array.)
// Pvz.: fn(new Date(2020, 12, 25)) -> true

// CAO ATSAKYMAS: 

function isItHoliday(date) {
  const holidays = ["2022-01-01", "2022-02-16", "2022-03-11"];
  return holidays.some(holiday => (new Date(holiday)).getDate() === date.getDate())
}

console.log(isItHoliday(new Date("2022-03-12")));

// 12. Pratimas
// Sukurkite funkciją, kuri kaip parametrą gaus array su skaičiais. Funkcija turės grąžinti mažiausią trūkstamą skaičių iš array.
// Pvz. Paduodu: [1, 2, 4, 5]; Grąžina: 3

// CAO ATSAKYMAS
const numeriukai = [1, 2, 4, 5]; 
const missingNumber = (array) => array.find((x, i) => x + 1 !== array[i + 1]) + 1;
console.log(missingNumber(numeriukai));