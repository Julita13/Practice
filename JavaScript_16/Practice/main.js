// const administracija1 = {
//     name: "Vardenis Pavardenis",
//     type: "administracija",
//     responsibility: () => console.log("Aš esu administratorius")
//   };
  
//   const administracija2 = {
//     name: "Vardenė Pavardenė",
//     type: "administracija",
//     responsibility: () => console.log("Aš esu administratorė")
//   };
  
//   const mokytojas1 = {
//     name: "Liniuotė Liniuotienė",
//     type: "mokytojai",
//     responsibility: () => console.log("Aš esu mokytoja")
//   };
  
//   const mokytojas2 = {
//     name: "Žymys Žymeklis",
//     type: "mokytojai",
//     responsibility: () => console.log("Aš esu mokytojas")
//   };
  
//   const mokinys1 = {
//       name: "Nežinys Nežiniukas",
//       type: "mokinys",
//       responsibility: () => console.log("Aš esu mokinys")
//   };
  
//   const mokinys2 = {
//     name: "Gudrusis Gudrutis",
//     type: "mokinys",
//     responsibility: () => console.log("Aš esu mokinys")
//   };

//   console.log(mokytojas1.name);
//   console.log(mokinys1.responsibility());

class Persona {
    constructor(telefonoNumeris) {
      this.phoneNumber = telefonoNumeris
    }
    myPhoneNumber = () => console.log(`Mano telefono numeris: ${this.phoneNumber}`)
  }
  
  class Administracija extends Persona{ //visada reikia prirašyti žodelį extends ir "tėvinės" klasės pavadinimą
    constructor(vardas, amzius, phoneNumber) {
      super(phoneNumber);
      this.name = vardas;
      this.age = amzius;
      this.type = 'administracija';
    }
    responsibility = () => console.log('Aš esu administratorius')
  }
  
  class Mokytojai extends Persona {
    #salary
    constructor(name, salary, phoneNumber) {
      super(phoneNumber);
      this.name = name;
      this.type = 'mokytojai';
      this.#salary = salary;
    }
    responsibility = () => console.log('Aš esu mokytojai')
    mySalary = () => console.log(`Mano atlyginimas: `, this.#salary)
  }
  
  class Mokinys extends Persona {
    constructor(name, phoneNumber) {
      super(phoneNumber);
      this.name = name;
      this.type = 'mokinys';
    }
    responsibility = () => console.log('Aš esu mokinys')
    myName = () => console.log('Mano vardas: ', this.name)
  }
  
  const administracija1 = new Administracija('Vardenis Pavardenis', '30', "133");
  const administracija2 = new Administracija('Vardenė Pavardenė', '50', "222");
  const mokinys1 = new Mokinys('Gudrusis Gudrutis', "444");
  const mokytojas1 = new Mokytojai('Žymys Žymeklis', 5555, '444')
  
  console.log(administracija1);
  console.log(mokinys1.phoneNumber);
  mokinys1.responsibility();
  mokinys1.myName();
  mokytojas1.mySalary();
  
  // INHERITANCE: praplečia objektą: papildo mūsų klasę
  // INKAPSULIACIJA: metodai ir savybės yra uždaromi tik toje klasėje. Grotelėmis pažymime naują property konstruktoriaus viduje iškart 
  // laužtinių skliaustų
  // ABSTRAKCIJA: objekto nepriklausomumas nuo išorinių sudedamųjų dalių; pvz: MOKINYS tik apie MOKINĮ. Slepiam tai, ko nereikia 
//   POLIMORFIZMAS