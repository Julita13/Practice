// callback'as - tai funkcija, kuri gali suktis po to, kai pasibaigia kita funkcija. Tai funkcija, kuri yra pateikiama kaip argumentas kitai funkcijai. 
// Masyvai ir jų metodai
// Masyvas - tai "numeruota kolekcija". Numeruotas sąrašas. 
// let fruits = ["Apple", "Orange", "Banana"]
// Jie sunumeruoti nuo nulio. Elementą iš masyvo galime gauti laužtiniuose skliaustuose nurodę jų numerį. 
// Elemento keitimas: 
// fruits[2] = "Pear";  (trečias elementas pasikeis į "Pear")  arba fruits[3] = "Lemon" - pridėsime ketvirtą, naują elementą.

let fruits = ["Apple", "Orange", "Banana"];
fruits[2] = "Pear"
console.log(fruits, fruits.length)

// Masyvuose galima laikyti: sąrašus, objektus, boolean'us, funkcijas. 

let arr = ['Apple', {name: 'John'}, true, function() {alert('hello');}];
console.log(arr[1])

// Masyvų metodai: 
// pop() - panaikina elementą iš Masyvo galo; 
// push() - prideda elementą į masyvo galą;
// shift() - panaikina elementą iš Masyvo pradžios;
// unshift() - prideda elementą į Masyvo pradžią;

// Geriausia pridėti naujus elementus į masyvo GALĄ. 

for(let i = 0; i < fruits.length; i++) {
    console.log(fruits[i]);
  } // išspausdina visus masyvo elementus

  for(let i = 0; i < fruits.length; i++) {
    console.log(`I like ${fruits[i]}`);
  }

  let matrix = [
    [1, 2, 3, 8, 9],
    [4, 5, 6],
    [7, 8, 9]
  ];
  
  console.log(matrix[0][1]);
  console.log(matrix.length, matrix[0].length);

// 1. Užduotis iš task'ų:

let myArray = ["Jazz", "Blues"];
myArray.push("Rock-n-Roll");
const middle = Math.floor((myArray.length)/2);
myArray[middle] = "Classics";
console.log(myArray.shift());
myArray.unshift("Rap", "Reggae");
console.log(myArray);
console.log(middle)

// 2. Užduotis iš task'ų: 
const numbersArr = [11, -2, 34, 45, 19, -5, 6];

function getMaxSubSum(arr) {
  let result = 0; 
    for(let i = 0; i < arr.length; i++) {
      if(arr[i] > 0) {
         result += arr[i]; 
      }
    }
  return result;
}


console.log(getMaxSubSum(numbersArr));

// 3. Užduotis
let randomArr = [11, "cat", true, 4, "mouse", 5, 9, 5, 76, false];

function getArrayByData(array, dataType) {
  let newArray = [];
  for(let i = 0; i < array.length; i++) {
    if(typeof array[i] === dataType) {
      newArray.push(array[i]);
    }
  }
  return newArray;
}

console.log(getArrayByData(randomArr, "string"));
console.log(getArrayByData(randomArr, "number"));
console.log(getArrayByData(randomArr, "boolean")); 

// Antras sprendimo būdas:
// let randomArr = [11, 'cat', true, 4, 'mouse', 5, 9, 5, 76, false];

// function getArrayByData(array,dataType) {
//   let arr = [];
//   array.forEach(item => {
//     if (typeof item == dataType) {
//       arr.push(item);
//     }
//   });
//   return arr;
// }

// console.log(getArrayByData(randomArr, 'string'));
// console.log(getArrayByData(randomArr, 'number'));
// console.log(getArrayByData(randomArr, 'boolean'));
