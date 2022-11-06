//  1. Pratimas
// Nusikopijuok array (const cars = ["BMW", "VW", "Audi"]) ir naudojant forEach, atspausdink kiekvieną elementą (automobilio reikšmę).

const cars = ["BMW", "VW", "Audi"];

cars.forEach(function(vehicles) {
  console.log(vehicles)
}
)

// 2. Pratimas
// Pakoreguok pirmą pratimą, kad atspaudintum index: value (pvz: "0: BMW", "1: VW" ir t.t.).

cars.forEach(function(vehicles, index) {
  console.log(index + " " + vehicles)
}
)

// 3.Pratimas
// Sukurk Array su savo draugų vardais, raidžių kapitalizaciją pamiksuok (t.y. "peTras", "Jonas", "aNTanaS" ir t.t.). 
// Naudojant map metodą, padaryk, kad susikurtų naujas array (ir jį atspausdink), kuriame vardai surašyti teisinga kapitalizacija (pvz. "peTras" => "Petras").

const friends = ["Darius", "Kazys", "peTRAS", "ŽYGIMANTAS", "arūnas"];

function writeNames(array) {
  return array.charAt(0).toUpperCase() + array.slice(1).toLowerCase();
}

console.log(friends.map(writeNames));

// 4.Pratimas
// Sukurk Array su savo draugų amžiais (nuo 1 iki 99). Naudojant filter - prafiltruok tik tuos skaičius, kurie didesni arba lygūs 18.

const friendsAge = ["33", "100", "15", "27", "8", "49", '62'];

function checkAge(array) {
  return array >= 18; 
}

console.log(friendsAge.filter(checkAge));

// ARBA CAO sprendimas

// const ages = [1, 20, 5, 10, 22, 50, 40, 39];
// console.log(ages.filter((x) => x >= 18));

// 5.Pratimas
// Sukurk Array su Lietuvos miestais ("Vilnius", "Kaunas"). Naudojant find - surask bet kokį pirmą miestą, kuris prasideda iš "K" raidės.

const lithuanianCities = ['Vilnius', 'Klaipėda', 'šiauliai', 'Kaunas', 'palanga', 'Nida', 'kretinga'];

function findFirstCityStartingWithK(array) {
  return array.charAt(0) === "K";
}
console.log(lithuanianCities.find(findFirstCityStartingWithK));

// ARBA CAO sprendimas: 
// const cities = ["Vilnius", "Kaunas", "Klaipeda"];
// console.log(cities.find(v => v.charAt(0) === "K"));

// 6.Pratimas
// Penktame pratime esantį sprendimą pakoreguot ir patikrink su some ar bent vienas miestas prasideda iš mažosios.

const lithuanianCities2 = ['Vilnius', 'Klaipėda', 'šiauliai', 'Kaunas', 'palanga', 'Nida', 'kretinga'];

function isThereCityStartingWithLowerCase(array) {
  return array.charAt(0) === array.charAt(0).toLowerCase();
}

console.log(lithuanianCities2.some(isThereCityStartingWithLowerCase));

// ARBA CAO sprendimas:
// const cities = ["Vilnius", "Kaunas", "klaipeda"];
// console.log(cities.some(v => v.charAt(0) === v.charAt(0).toLowerCase()));

// 7.Pratimas
// Pakoreguok šeštą pratimą, kad tikrintų ne ar bent vienas miestas prasideda ir mažosios, bet ar visi iš didžiosios

const lithuanianCities3 = ['Vilnius', 'Klaipėda', 'Šiauliai', 'Kaunas', 'Palanga', 'Nida', 'Kretinga'];

function checkUpperCase(array) {
  return array.charAt(0) === array.charAt(0).toUpperCase();
}

console.log(lithuanianCities3.every(checkUpperCase));

// arba CAO sprendimas:
// const cities = ["Vilnius", "Kaunas", "klaipeda"];
// console.log(cities.every(v => v.charAt(0) === v.charAt(0).toUpperCase()));