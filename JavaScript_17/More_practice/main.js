// 1.Pratimas
// Naudojant ES6 klases sukurkite objekto Filmas(Movie) kūrimo konstruktorių, kuris turės šias savybes:
// 1. name; 2. year; 3. director; 4. budget; 5. income.
// ir metodus:
// 1. getIntroduction, kuris grąžins filmo pilną pavadinimą(su name, year, director);
// 2. getProfit, kuris grąžins sumą, kurią uždirbo(pelną) filmas.
//   Testavimui, sukurkite du filmus, kurie turės nurodytas savybes ir metodus.


// function Movie(name, year, director, budget, income){
//   this.name = name; 
//   this.year = year;
//   this.director = director;
//   this.budget = budget; 
//   this.income = income; 
//   this.getIntroduction = function() {
//     console.log(`${this.name}, ${this.year}, ${this.director}`)
//   };
//   this.getProfit = function() {
//     console.log(this.income - this.budget)
//   }
// }

// const filmas = new Movie("Titanic", 1997, "James Cameron", 1000000, 50000000);
// const filmas2 = new Movie("Inception", 2010, 'Christopher Nolan', 4896, 589654)
// console.log(filmas.director);
// filmas.getIntroduction();
// console.log(filmas2.director);
// filmas2.getProfit();
// Antras sprendimo būdas

class Movie {
    constructor(name, year, director, budget, income) {
    this.name = name;
    this.year = year;
    this.director = director;
    this.budget = budget;
    this.income = income;
    }
    getIntroduction() {
      return `${this.name}, ${this.year}, ${this.director}`
    };
    getProfit() {
      const result = this.income - this.budget;
      return result
    }
  }
  
  const filmas = new Movie("Titanic", 1997, "James Cameron", 1000000, 50000000);
  const filmas2 = new Movie("Inception", 2010, 'Christopher Nolan', 4896, 589654)
  console.log(filmas.director);
  console.log(filmas.getIntroduction());
  console.log(filmas2.director);
  console.log(filmas2.getProfit());

// 3.Pratimas
// Sutvarkykite kodą, kad pavyktų sukurti objektą Rabbit:
// Rabbit:
// class Animal {
//     constructor(name) {
//      this.name = name;
//     }
//    }

// class Rabbit extends Animal {
//    constructor(name) {
//     this.name = name;
//     this.created = Date.now();
//    }
//   }
//     let rabbit = new Rabbit("White Rabbit");


class Animal {
    constructor(name) {
      this.name = name;
    }
  }
  class Rabbit extends Animal {
    constructor(name, ...args) {
      super(...args);
      this.name = name;
      this.created = `${new Date()}`;
    }
  }
  let rabbit = new Rabbit("White Rabbit");
  
  console.log(rabbit);
  console.log(rabbit.created);
  
//   ARBA:
// class Animal {
//     constructor(name) {
//       this.name = name;
//     }
//   }
//   class Rabbit extends Animal {
//     constructor(name) {
//       super(name);
//       this.created = `${new Date()}`;
//     }
//   }
//   let rabbit = new Rabbit("White Rabbit");
//   console.log(rabbit.created);

  // 4.Pratimas

// Naudojant ES6 klases sukurkite automobilių objektų kūrimo konstruktorių(Car), kuris turės šias savybes:
// 1. make; 2. model; 3. year.
// ir metodus:
// 1. getIntroduction, kuris grąžins pilną pavadinimą(su make ir model).
// 2. getAge, kuris gražins “10 metų arba naujesnis”, jei automobilio amžius yra 10 metų arba naujesnis arba “11 metų arba
// senesnis”, jei automobilio amžius yra 11 metų arba senesnis(šio metodo logikai naudokite ternary operatorių ir Date() metodą).
// Naudojant ES6 subklases sukurkite motociklų objektų kūrimo konstruktorių(Motorcycle), kuris turės visas automobilių objektų
// kūrimo konstruktorių(Car) savybes ir metodus ir papildomai šią savybę:
// 1. wheels(kurio vertė bus number).
// Ir metodą:
// 1. getWheelsNumber, kuris grąžins “motociklas turi 3 ratus”, jei wheels vertė bus 3 ir “motociklas turi 2 ratus”, jei wheels vertė
// bus 2(šio metodo logikai naudokite else if operatorių).
//   Testavimui, sukurkite du objektus, kurie turės nurodytas savybes ir metodus

class Car {
    constructor(make, model, year) {
      this.make = make;
      this.model = model;
      this.year = year;
    }
    getIntroduction = () => `${this.make} ${this.model}`
    getAge = () => {
      const thisYear = new Date().getFullYear(); 
      const age = thisYear - this.year;
      return age > 10 ? `11 metų arba senesnis` : `10 metų arba naujesnis`
    }
  }

  class Motorcycle extends Car{
    constructor (wheels, ...args) {
      super(...args)
      this.wheels = wheels;
    }
    getWheelsNumber = () => {
      if(this.wheels === 2) {
        return `Motociklas turi 2 ratus`
      } else if(this.wheels === 3) {
        return `motociklas turi 3 ratus`
      }
    }
  }

  const myCar = new Car("Toyota", "Yaris", 2008);
  const motorcycle = new Motorcycle (2, "Ducatti", "MX5", 2001)
  console.log(myCar);
  console.log(myCar.getIntroduction());
  console.log(myCar.getAge());
  console.log(motorcycle);
  console.log(motorcycle.getWheelsNumber());