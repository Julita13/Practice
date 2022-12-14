const numbers = [1, 5, 10, 20];
const sum = numbers.reduce((a, b) => a + b);
console.log(sum);

const numbers2 = [1, 5, 10, 20];
const sum2 = numbers2.reduce((a, b) => a + b, 4);
console.log(sum2);

// 1. Pratimas
// Parašyk array su penkiais mėgstamiausiais tavo skaičiais. Su reduce visus juos sudėk ir grąžink vieną skaičių.

const favoriteNumbers = [13, 7, 5, 2, 10];
let sumOfFavoriteNumbers = favoriteNumbers.reduce((a, b)  => a + b);
console.log(sumOfFavoriteNumbers);
// ARBA: 
const favoriteNumbers2 = [13, 7, 5, 2, 10];
console.log(favoriteNumbers2.reduce((a, b) => a + b));

// 2.Pratimas
// Ne vien skaičius sudėti galime. Nusikopijuok array (["BMW", "MCB", "VWG", "Toyota", "AUDI"]) ir naudojant reduce - grąžink skaičių, 
// kiek šiame array elementų yra su 3 simboliais (p.s. efektyviau turbūt su filter, bet šiuo atveju išbandome reduce).

const cars = ["BMW", "MCB", "VWG", "Toyota", "AUDI"]; 
let threeSymbols = cars.reduce((a, b) => b.length === 3 ? a + 1 : a, 0)
console.log(threeSymbols);

// ARBA: 

let threeSymbols2 = cars.filter(a => a.length<=3).length
console.log(threeSymbols2);

// ARBA: 

console.log(cars.reduce((a, b) => {
    if(b.length === 3) {
      a = a + 1
    } return a
  }, 0));
  
// 3.Pratimas
// Sukurk array su daug skaičių. Grąžink didžiausią skaičių iš array naudojant reduce.

const myNumbers = [1, 18, 198, 56, 5876, 2398, 4863, 4597]; 
let biggestNumber = myNumbers.reduce((a, b) => Math.max(a, b));
console.log(biggestNumber);
// ARBA
console.log(myNumbers.reduce((a, b) => Math.max(a, b)));
// ARBA
console.log(myNumbers.reduce((a,v) => a > v ? a : v));