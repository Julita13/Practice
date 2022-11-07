// 1. Pratimas
// Parašykite funkciją, kuri priims minutes (number) ir grąžins sekundes (string: "x seconds").
// Pvz: fn(3) => "180 seconds"

function calculateSeconds(number) {
    const seconds = number * 60;
    return `${seconds} sekundes`
  }
console.log(calculateSeconds(3))

// ARBA CAO atsakymas: 

const fn = (n1) => n1 * 60 + " seconds";
console.log(fn(3));

// 2.Pratimas
// Parašykite funkciją, kuri priims varotojų amžių ir grąžins kiek dienų jis jau nugyveno (skaičių, metų tikslumu, 
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

