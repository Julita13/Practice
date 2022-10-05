//1. Sukurk variable 'legalAge', kuris būtų lygus 20. Antra variable 'clientAge' su bet kokiu skaičiumi. 
//Pasirašyk if-else, kuris alert išmestų ar klientas jau pasiekęs šį legalAge, ar dar ne.

// const legalAge = 20;
// const clientAge = 18;

// if(clientAge >= legalAge) {
//     alert("Klientas pasiekęs reikiamą amžių");
// } else {
//     alert("Klientas nepasiekęs reikiamo amžiaus");
// }

// 2. Pasirašyk kintamą su savo vardu. Sukurk if-else, kuris pasakys "Ilgas vardas", jei tavo vardas ilgesnis nei 6 raidės. 
// Kitu atveju, nieko neišmes. 
// String ilgį gali susižinoti prirašant 'length' property (pvz.: "Petras".length arba su kintamu: name.length). 

// const userName = "Julita";

// if(userName.length > 6) {
//   console.log("Ilgas vardas");
// }

// 3. Sukurt kintamąjį su savo amžiumi. Patikrink: jei amžius didesnis nei 100, 
// arba mažesnis nei 0 - tegul išmeta "Invalid age"; jei tarp 1 ir 18 - "Child"; jei tarp 19 ir 99 - "Adult".

// const age = 33;

// if(age > 100 || age < 0) {
//   console.log("Invalid Age");
// } else if(age >= 19 && age <= 99) {
//   console.log("Adult");
// } else {
//   console.log("Child");
// }

// // 4. Sukurk variable 'car', kuris bus lygus kažkokiam automobilio prekės ženklui.
// // Sukurk if-else, kuris pasakys ar tas brand'as priklauso VW Group, ar BMW Group, ar nei vienam.
// // VW group priklauso: VW, Audi, Bentley, Bugatti, Lamborghini, Porsche.
// // BMW group priklauso: BMW, Mini, Rolls - Royce.

const car = "Toyota"

if (car === 'BMW' || car === 'Mini' || car === 'Rolls-Royce') {
  console.log("BMW Group");
}   else if (car === 'VW' || car === 'Audi' || car === 'Bentley' || car === 'Bugatti' || car === 'Lamborghini' || car === 'Porsche') {
    console.log("VW Group");
} else {
    console.log("Does not belong to any group");
  }

  alert("All tasks were successfully completed!")