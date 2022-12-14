const cars = ['BMW', "Audi", "VW"];
console.log(cars.sort()); // toks užrašimas alfabetiškai pasortina

const nums = [123, 11, 0, 2];
nums.sort((a, b) => a - b);
console.log(nums); // surikiuoja skaičius nuo mažiausio iki didžiausio

const cars2 = ["BMW", "Audi", "VW"];
cars2.sort((a, b) => a.length - b.length);
console.log(cars2); // surikiuoja stringus nuo trumpiausio iki ilgiausio

const phones = ["iPhone 7", "Samsung 9", "OnePlus"];
phones.sort((a, b) => {
  if (a.includes(" ") && !b.includes(" ")) {
    return -1;
  } else {
    return 1;
  }
});
console.log(phones) // surikiuoja nuo stringų su tarpais iki stringų be tarpų

// 1.Pratimas
// Pasirašyk sąrašą su savo draugų vardais. A-Z tvarka išrykiuok.

const friends = ["Steve", "Peter", "Adam", "Jacob", 'Grant', "Carlos"];
console.log(friends.sort());

// 2.Pratimas
// Pakoreguok pirmame pratime esantį sort, kad išrykiuotų Z-A tvarka
// Mano sprendimas: 

const friends2 = ["Steve", "Peter", "Adam", "Jacob", 'Grant', "Carlos"];

const friendsSorted = friends2.sort();
const finalResult = friendsSorted.reverse();

console.log(finalResult);

// CAO sprendimas: 
const friends3 = ["Steve", "Peter", "Adam", "Jacob", 'Grant', "Carlos"];
friends3.sort((a, b) => b > a ? 1 : -1);
console.log(friends3);

// 3.Pratimas
// Nusikopijuok array ([5, 10, 20, 11, 12, 1, 0, 14, 25]) ir su JS sudėliok mažėjimo tvarka (nuo didžiausio, iki mažiausio).
// Trys skirtingi sprendimo būdai: 

const numbers = [5, 10, 20, 11, 12, 1, 0, 14, 25];
let sortedNumbers = numbers.sort((a, b) => b - a );
// let sortedNumbers2 = numbers.sort(function (a, b) { return b - a })
// let sortedNumbers3 = numbers.sort((a, b) => a > b ? -1 : 1);
console.log(sortedNumbers);
// console.log(sortedNumbers2);
// console.log(sortedNumbers3);

// 4. Pratimas
// Nusikopijuok array ([10, 5, 20, 4]) ir grąžink didžiausią skaičių (vieną skaičių). 
// Mano sprendimas: 

const lastArray = [10, 5, 20, 4]; 
let sortedArray = lastArray.sort((a, b) => b - a);
let biggestNumber = sortedArray[0];
console.log(biggestNumber);
//  ARBA: 
console.log(sortedArray[0]);