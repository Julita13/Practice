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
  console.log(myCar.brand);
  
  const mySecondCar = new Car("Toyota", "Aygo", "1.0 l");
  console.log(mySecondCar.model)

//   2.Pratimas
// Pakoreguokite šį konstruktorių ir pridėkite papildomą property 'basePrice' ir metodą 'getPrice'. 
// basePrice propertį įrašys sukuriant objektą, tačiau getPric priklausimai nuo variklio išmes kokia yra galutinė kaina. 
// Jei variklis 'electric' - kaina bus +10,000; jei 'diesel' +5,000; jei 'petrol' - kaina tokia kokia ir basePrice.

function Automobilis(brand, model, engine, price) {
    this.brand = brand;
    this.model = model;
    this.engine = engine;
    this.basePrice = price;
    this.getPrice = function() {
      let finalPrice = 0; 
      if(this.engine === "electric") {
        finalPrice = 10000;
      } else if(this.engine === "diesel") {
         finalPrice = 5000;
      }
      return this.basePrice + finalPrice;
      }
    this.turnOn = function () {
      alert("vrooom")
    };
  }
  
  const newCar = new Automobilis("Chrysler", "Sebring", "petrol", 5000);
  console.log(newCar.getPrice());