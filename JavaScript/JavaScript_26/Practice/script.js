// Paskaitos užduotis
// Atspausdinti skaičius nuo 0 iki 15
//   * atspaudinti skaičius nuo 12 iki 24
//     * atspausdinti lyginius skaičius nuo 7 iki 31
//       * atspausdinti nelyginius skaičius nuo 10 iki - 20
//         * iteruoti per skaičius nuo 1 iki 45 ir:
// skaičiams, kurie dalinasi iš 3, išspausdinti 'Fizz'
// skaičiams, kurie dalinasi iš 5, išspausdinti 'Buzz'
// skaičiams kurie dalinasi iš 3 ir 5 išspausdinti FizzBuzz
//   * suskaičiuoti skaičių sumą numbersArray = [1, 13, 22, 123, 49]

// 1 Pratimas
// for(let i = 0; i<= 15; i++){
//   console.log(i)
// }

// // 2 Pratimas
// for(let i = 12; i<= 24; i++) {
//   console.log(i)
// }

// 3 Pratimas
// for(let i = 7; i<=31; i++){
//   if(i%2 === 0){
//     console.log(i)
//   }
// }

// 4 Pratimas
// for(let i = 10; i>= -20; i--){
//   if(i%2 !== 0){
//     console.log(i)
//   }
// }

// 5 Pratimas
// for(let i = 1; i<=45; i++){
//   if(i % 3 === 0 && i % 5 === 0) {
//     console.log(`${i} FizzBuzz`);
//       } else if(i%5 === 0){
//         console.log(`${i} Buzz`)
//       } else if (i % 3 === 0) {
//         console.log(`${i} Fizz`)
//   } else 
//       console.log(i)
// }

// 6 Pratimas
// const myArray = [1, 13, 22, 123, 49];

// const addNumbersFromArray = myArray.reduce((a, b) => {
//   return a + b;
// }, 0);

// console.log(addNumbersFromArray);



// const ourArray = [1, 13, 22, 123, 49];

// let sum = 0;
// for (let i = 0; i < ourArray.length; i++) {
//   sum += ourArray[i];
// }

// console.log(sum);

// const randomNumbers = [1, 13, 22, 123, 49]

// console.log(randomNumbers.reduce((a, b) => a + b));

// console.log(Math.max(...randomNumbers)) // jis mato masyvą kaip masyvą, ne kaip paskyrus vienetus