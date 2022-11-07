// Sukurkite funkciją sumTwoSmallestNums(arr), kuri paima skaičių masyvą ir grąžina teigiamų skaičių sumą.
//   Pastabos:
// - Neskaičiuokite neigiamų skaičių.
//   Pavyzdžiui:
// sumTwoSmallestNums([19, 5, 42, 2, -77]) ➞ 68
// sumTwoSmallestNums([10, 343445353, 3453445, 3453545353453]) ➞ 3453892252261
// sumTwoSmallestNums([2, 9, 6, -1]) ➞ 17
// sumTwoSmallestNums([879, 953, 694, -847, 342, 221, -91, -723, 791, -587]) ➞ 3880
// sumTwoSmallestNums([3683, 2902, 3951, -475, 1617, -2385]) ➞ 12153

let skaičiųMasyvas = [19, 5, 42, 2, -77];

function sumTwoSmallestNums(arr) {
  let sum = 0; 
  arr.forEach(item => {
    if(item > 0) {
      sum += item;
    }
  })
  return sum
};

console.log(sumTwoSmallestNums(skaičiųMasyvas));

// Sukurkite funkciją, į kurią padavus sveikųjų skaičių masyvą, grąžinama visų lyginių skaičių padaugintų iš 2 suma.
// Naudokite Array metodus, nenaudokite įprastų ciklų.
//   Pavyzdžiui:
// getSum([5, 2, 4]) ➞[20], nes 2 * 2 + 4 * 4 = 20; o 5 nelyginis skaičius.

let skaiciuMasyvas = [5, 2, 4];

function getSum(arr) {
  const result = arr.reduce((sum, skaicius) => {
    if(skaicius%2 === 0) {
     sum += skaicius * skaicius;
    }
    return sum},  0);
    return result;
}

console.log(getSum(skaiciuMasyvas));
