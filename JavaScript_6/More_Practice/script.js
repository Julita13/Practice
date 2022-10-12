// function showMessage('from', 'text') { <---- šioje vietoje 'from' ir 'text' - tai funkcijos ARGUMENTAI

// }
// showMessage('Ann', 'Hello!') <--- šioje vietoje 'Ann' ir 'Hello' - tai jau funkcijos PARAMETRAI

// function checkAge(age) {
// if (age > 18) {
//   return true; //console.log(true)
// } else {
//   return confirm('Did parents allow you?');

// function checkAge(age) {
//     return (age > 18 ? true : confirm('Did parents allow you?'));
//   }
//   console.log(checkAge(18));

// function checkAge(age) {
//     return age > 18 || confirm('Did parents allow you?');
//   }
// console.log(checkAge(19));

// 1 variantas: 
// function min(numberOne, numberTwo) {
//     return Math.min(numberOne, numberTwo)
//   }
  
// console.log(min(10, 5))

// 2 variantas
// function checkMin(numOne, numTwo) {
//     if(numOne > numTwo) {
//       return numTwo
//     }
//     return numOne;
//   }
//   console.log(checkMin(2, 5))
// 3 variantas
//   function min(a, b) {
//     return a < b ? a : b;
//   }
  
//   console.log(min(2, 5))

let cities = ["Vilnius", "Kaunas", "Klaipėda", "Šiauliai", "Panevėžys", "Telšiai"]; 
const getFavoriteCity = (name, surname, city) =>
{
  return `${name} ${surname} favorite city is ${city}`
}

console.log(getFavoriteCity("Marijus", "Romanovas", cities[1]))