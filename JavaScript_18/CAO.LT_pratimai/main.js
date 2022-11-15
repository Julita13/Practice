// 1.Pratimas
// Parašykite metodą klasėje, kuris pasakys ar žmogus yra pilnametis ar ne, pagal jo amžių.

// Pvz.:
// const p1 = new Person("Petras", 16)
// p1.compareAge() => "Petras is old enough to drink";

// Nusikopijuokite apačioje esantį kodą ir jį papildykite:

// class Person {
// 	constructor(name, age) {
// 		this.name = name;
// 		this.age = age;
// 	}
// 	compareAge(other) {
// 		// Rašyti kodą čia
// 	}
// }

class Person {
    constructor(name, age) {
      this.name = name;
      this.age = age;
    }
    compareAge() {
      if(this.age <= 16) {
        console.log(`${this.name} is too young to drink`)
      } else {
        console.log(`${this.name} is old enough to drink`)
      }
  }}
  
  const p1 = new Person("Petras", 2);
  const p11 = new Person("Julita", 33);
  p1.compareAge();
  p11.compareAge();

//   CAO.LT atsakymas: 
class Persona {
    constructor(name, age) {
      this.name = name;
      this.age = age;
    }
  
    compareAge() {
      return this.age >= 20 ? `${this.name} is old enough to drink` : `${this.name} is not old enough to drink` 
    }
  }
  
  const p2 = new Persona("Petras", 10);
  console.log(p2.compareAge());

//   2.Pratimas
// Parašykit funkciją, kuri priimtu mąsyvą sudarytą iš skaičių ir raidžių. Grąžinkite masyvą tik su skaičiais.
// pvz: fn([1, 5, "a", "g", "z", 6]) => [1, 5, 6]

const myArray = [1, 5, "a", "g", "z", 6];
const numbersOnly = myArray.filter(Number);

console.log(numbersOnly);

//  Antras sprendimo būdas: 

const myArray2 = [1, 5, "a", "g", "z", 6];
const filtered = myArray2.filter(function (item) {
  return (typeof item === "number")
});

console.log(filtered);

//  CAO.LT atsakymas: 
const filterOutLetters = (arr) => arr.filter(element => typeof element === "number");
console.log(filterOutLetters([1, 5, "a", "g", "z", 6]));

// ANDRIAUS SPRENDIMAS:
 function fn(arr) {
  return arr.filter(item => Number.isInteger(item))
}
console.log(fn([1, 5, "a", "g", "z", 6]));

// 3. Pratimas
// 3. Sukurk funkciją, kuri paims stringą kaip parametrą ir padvigubins kiekvieną raidę (bet ne simbolį ar skaičių).
// pvz: fn("Petras 123 Slekys") => "PPeettrraass 123 SSlleekkyyss"

// BLOGAI: DUBLIUOJA IR SKAIČIUS!

const myString = "Petras 123 Slekys";
const repeatLetters = (myString, number) => {
  let result = " "; 
  for(let i = 0; i < myString.length; i++) {
    result += myString[i].repeat(number);
  };
  return result;
};

console.log(repeatLetters(myString, 2));

// 
// const string = "Julita turi 13 kačių";
// const newString = string.split("").map((item) => item + item).join("");
// console.log(newString)

// ARBA:

const myString2 = "Petras 123 Slekys";
const repeatLetters2 = (string) => string.split("").map(item => item.match(/[a-z]/i) ? item.repeat(2) : item).join("");
console.log(repeatLetters2(myString2));

// CAO sprendimas: 

const duplicateAllLetters = (text) => text.split('').map(element => element.match(/[a-z]/i) ? element.repeat(2) : element).join('');
console.log(duplicateAllLetters('Petras 123 Slekys'));

// ANDRIAUS SPRENDIMAS: 
function fn2(str) {
    return str.split('').reduce((acc, item) => acc += /[a-zA-Z]/gm.test(item) ? item + item : item, '')
  }
  
  console.log(fn2('Petras 123 Slekys'))

// 4.Pratimas
// Parašykite funkciją, kuri tikrins ar paduotas post code - teisingas. Post code turi susidėti iš 5 skaičių, arba trijų skaičių ir dviejų raidžių. Jei yra tarpų - post code neteisingas.
// Pvz: fn("abc123") => false; fn("12345") => true; fn("123ab") => true

//CAO atsakymas: 

const isValidPostCode = postCode => /^[0-9]{5}|[0-9]{3}[A-Za-z]{2}$/.test(postCode);
console.log(isValidPostCode('abc123'));
console.log(isValidPostCode('12345'));
console.log(isValidPostCode('123ab'));

// ANDRIAUS ATSAKYMAS: 

const regex = /^([0-9]{5}|[0-9]{3}[a-zA-Z]{2})$/

function fn3 (postCode) {
  return regex.test(postCode)
}

console.log(fn3('abc123'));//false
console.log(fn3('12345'));//true
console.log(fn3('123456'));//false
console.log(fn3('123ab'));//true
console.log(fn3('1234ab'));//false
console.log(fn3('123abc'));//false

// 5.Pratimas
// Sukurkite funkciją, kuri priims array ir prie kiekvieno array elemento pridės "7", nebent elementas baigsis "7".
// jazzify(["G", "F", "C"]) ➞ ["G7", "F7", "C7"]
// jazzify(["Dm", "G", "E", "A"]) ➞ ["Dm7", "G7", "E7", "A7"]
// jazzify(["F7", "E7", "A7", "Ab7", "Gm7", "C7"]) ➞ ["F7", "E7", "A7", "Ab7", "Gm7", "C7"]
// jazzify([]) ➞ []

// ADD'INA SEPTYNETUS PRIE VISKO: 
// const lastArray = ["G", "F", "C"];
// let addSeven = lastArray.map((item) => `${item}7`);
// console.log(addSeven); 

const addSeven = function(array) {
    let result = [];
    for (i = 0; i < array.length; i++) {
      if (array[i].endsWith(7)) {
        result.push(array[i]);
      } else {
        result.push(array[i].concat(7));
        // result.push(`${array[i]}7`); tas pats, kas ir viršuje
      }
    } return result
  }
  
  console.log(addSeven(["G", "F", "C"]));
  console.log(addSeven(["Dm", "G", "E", "A"]));
  console.log(addSeven(["F7", "E7", "A7", "Ab7", "Gm7", "C7"]));
  console.log(addSeven([]));


// CAO atsakymas

const jazzify = array => array.map(element => element.endsWith('7') ? element : element.concat('7'));
console.log(jazzify(["G", "F", "C"]));
console.log(jazzify(["Dm", "G", "E", "A"]));
console.log(jazzify(["F7", "E7", "A7", "Ab7", "Gm7", "C7"]));
console.log(jazzify([]));

// ANDRIAUS ATSAKYMAS: 

function jazify(arr) {
    return arr.map(item => item[item.length - 1] === '7' ? item : item += '7')
  }
  
  console.log(jazify(["G", "F", "C"]));
  //["G7", "F7", "C7"]
  console.log(jazify(["Dm", "G", "E", "A"]));
  //["Dm7", "G7", "E7", "A7"]
  console.log(jazify(["F7", "E7", "A7", "Ab7", "Gm7", "C7"]));
  //["F7", "E7", "A7", "Ab7", "Gm7", "C7"]
  console.log(jazify([]));
  //[]



// Andriaus atsakymai: 
// https://jsitor.com/Dcb2EdjIju
// https://jsitor.com/HKn12fnZ0Q
// https://jsitor.com/_tVMEWvc8H
// https://jsitor.com/2GI-9jrttG
// https://jsitor.com/ZqUb67vKkn