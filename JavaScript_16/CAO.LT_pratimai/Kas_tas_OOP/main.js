// PETRO VIDEO: 

function Person(n, s, a) {
    this.name = n;
    this.surname = s;
    this.age = a;
    this.introduce = function () {
      alert("Hi, I am" + this.name)
    }
  }
  
  const petras = new Person("Petras", "Šlekys", 23);
  console.log(petras.age);

//   1.Pratimas
// Susikurkite konstruktorių car, kuris priims brand, model, engine ir turės metodą 'turnOn' - kuris alertins 'vrooom'. 
// Sukurkite du objektus ir patikrinkite ar veikia.

function Car(b, m, e) {
    this.brand = b;
    this.model = m;
    this.engine = e;
    this.turnOn = function() {
      alert("vrooom")
    }
  }
  
  const myCar = new Car("Chrysler", "Sebring", "2.0 l");
  const mySecondCar = new Car("Toyota", "Aygo", "1.0 l");
  console.log(myCar.brand);
  console.log(mySecondCar.model);
  myCar.turnOn();

// ANTRAS BŪDAS: SU CLASS + CONSTRUCTOR:

// class Car {
//   constructor(brand, model, engine) {
//     this.brand = brand;
//     this.model = model;
//     this.engine = engine;
//     this.turnOn = function (){
//       alert ("vrooom");
//     }
//   }
// }

//   2.Pratimas
// Pakoreguokite šį konstruktorių ir pridėkite papildomą property 'basePrice' ir metodą 'getPrice'. 
// basePrice propertį įrašys sukuriant objektą, tačiau getPric priklausimai nuo variklio išmes kokia yra galutinė kaina. 
// Jei variklis 'electric' - kaina bus +10,000; jei 'diesel' +5,000; jei 'petrol' - kaina tokia kokia ir basePrice.

function Automobilis(b, m, e, p) {
  this.brand = b;
  this.model = m;
  this.engine = e;
  this.basePrice = p;
  this.turnOn = function() {
    alert("vrooom")
  }
  this.getPrice = function() {
    let basePrice = this.basePrice;
    if(this.engine === "electric") {
      return basePrice + 10000;
    } else if(this.engine === "diesel") {
      return basePrice + 5000;
    } 
    return basePrice;
  }
}

const firstCar = new Automobilis("Chrysler", "Sebring", "diesel", 2000);
const secondCar = new Automobilis("Toyota", "Aygo", "electric", 8000);
console.log(firstCar.basePrice);
console.log(secondCar.model);
console.log(firstCar.getPrice());
console.log(secondCar.getPrice());