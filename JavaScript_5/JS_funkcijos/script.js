// function myFunction() {
//     return 2;
//   }
  
//   console.log(myFunction());

// function multiplication(n1, n2) {
//     return n1 * n2
//   }
  
// console.log(multiplication(4,5))

// function subtraction(n1, n2){
//     return n1 - n2;
//   }
//   console.log(subtraction(5,1))
// !!!! jei apsirašysim const n1=5 (viršuje), tai funkcija nieko neišmes. prasmė yra tik funkcijos viduje!!!

// function randomNumber(min, max) {
//     let random =  Math.random();
//     random = random * max;
//     random = random - min;
//     random = Math.floor(random);
//     return random;
//   }
  
//   console.log(randomNumber(1, 10))

// 1. Pratimas 
// Ne visos funkcijos turi return statement (nors dažniausiai taip yra). 
// Sukurkite funkciją, į kurią paduosite vardą ir jį pa'alert'ins jį :)

function myName(name) {
    alert(name);
  }
  myName('Julita')

//2. Pratimas
// Ir ne visos funkcijos turi parametrus - sukurkite funkciją, kuri sugeneruos ir grąžins random skaičių tarp 1 ir 5.

function randomNumber() {
    return Math.floor(Math.random()* 5)+ 1;
  }
  
  randomNumber();

//3.Pratimas
// Sukurkite funkciją, kuri paims du parametrus - vardą ir pavardę - 
// ir grąžins sumą šių žodžių ilgių (t.y. "Petras", "Slekys" => 12).

function countLength(vardas, pavardė){
    return vardas.length + pavardė.length;
  }
  
  console.log(countLength('Julita', 'Mažuolytė'));

//4. Pratimas
// Sukurkite funkciją, kuri pagal paduotą skaičių grąžins abecelės raidę (pvz. 0 => A; 1 => B; 2 => C ir t.t.). Hint: Jums reikės pirma sukurti 
// Array su visomis raidėmis (["A", "B", C",..."Z"]), o funkcija paims pagal indeksą atitinkamą raidę. Jei primiršot array - pasižiūrėkite čia.

function countingLetters (i) {
    const alphabet = ["A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z"]
    return alphabet[i];
  }
  
  console.log(countingLetters(8));

//5. Pratimas
// Sukurkite funkciją, kuri paims tris parametrus (n1, n2, operator). Operator gali būti "sum", "sub", "div", "multi" 
// (matematinės reikšmės - sudėti, atimti, padalinti, padauginti). n1 ir n2 bus skaičiai. 
// Turite grąžinti atsakymą, kur n1 ir n2 atlikta matematinė operacija (pvz.: 5, 1, "sub" => 4; 6, 3, "sum" => 9...). 
// Hint: Reikės funkcijoje naudoti if-else arba switch

function pratimas(n1, n2, operator) {
    switch(operator) {
      case 'sum': 
        return n1 + n2;
      case 'min':
        return n1 - n2;
      case 'div': 
        return n1 / n2;
      case 'multi': 
        return n1 * n2;
    }
}
  
  console.log(pratimas(10, 5, 'sum'));

//6. Pratimas
// Sukurkite dvi funkcijas: viena grąžina random skaičių nuo 1 iki 10 (įskaitant), 
// kita - gautą skaičių pakelia kvadratu. Iškviesk abi funkcijas vienoje eilutėje (pvz. squareNum(generateRandomNumber()) => 1...100).

function generateRandomNumber() {
    return Math.floor(Math.random() * 10 + 1);
  }
  
  function squareNumber(number) {
    return Math.pow(number, 2);
  }
  
  console.log(squareNumber(generateRandomNumber()));