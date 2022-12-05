// 1. patikrinti ar kintamasis yra skaičius.Testiniai duomenys:
// isValidNumber(25) //25 yra skaičius
// isValidNumber('25') //25 yra skaičius
// isValidNumber('abc') //abc nėra skaičius
// isValidNumber('25.9') //25.9 yra skaičius
// isValidNumber('25A') //25A nėra skaičius



// 2. patikrinti ar trikampis yra lygiašonis, lygiagraštis ar įvairiakraštis.Testiniai duomenys:
// getTriangleType(9, 9, 9) //lygiakraštis trikampis
// getTriangleType(9, 9, 21) //lygiašonis trikampis
// getTriangleType(9, 10, 11) //įvairiakraštis trikampis

// 3. patikrinti ar skaičius papuola į duotą aibę.Testiniai duomenys:
// isInRange(27, 20, 40) //27 yra aibėje nuo 20 iki 40
// isInRange(27, 30, 40) //27 nėra aibėje nuo 20 iki 40

// 4. suskaičiuoti mėnesio dienas.Testiniai duomenys
// getDaysInMonth(2, 2012) //Mėnuo turi 29 dienas
// getDaysInMonth(2, 2013) //Mėnuo turi 28 dienas
// getDaysInMonth(4, 2012) //Mėnuo turi 30 dienų
// getDaysInMonth(10, 2012) //Mėnuo turi 31 dieną

// 1. Pratimas
function isValidNumber(myNumber){
    if(isNaN(myNumber)){
      console.log("It's not a number")
    } else {
      console.log("It is a number")
    }
  }
  
  isValidNumber(25);
  isValidNumber("25");
  isValidNumber('abc');
  isValidNumber('25.9');
  isValidNumber('25A');
  
  //  2. Pratimas
  function getTriangleType(a, b, c){
    if(a == b && b == c){
      console.log("Lygiakraštis trikampis")
    } else if(a == b || b == c || a == c) {
      console.log("Lygiašonis trikampis")
    } else {
      console.log("Įvairiakraštis trikampis")
    }
  };
  
  getTriangleType(9, 9, 9);
  getTriangleType(9, 9, 21);
  getTriangleType(9, 10, 11)
  
  //  4. Pratimas
  function getDaysInMonth(month, year) {
    return new Date(year, month, 0).getDate();
  }
  
  console.log(getDaysInMonth(2, 2012));
  console.log(getDaysInMonth(2, 2013));
  console.log(getDaysInMonth(4, 2012));
  console.log(getDaysInMonth(10, 2012));
  
  
  // 3. Pratimas
  
  function isInRange(a, b, c){
    return ((a-b) * (a - c) <= 0);
  }
  
  console.log(isInRange(27, 20, 40));
  console.log(isInRange(27, 30, 40));
  
  
  const getDaysInMonth2 = (month, year) => {
  
    if (month === 2) {
  
      if ((year % 4 === 0 && year % 100 !== 0) || year % 400 === 0) {
  
        console.log('Mėnuo turi 29 dienas')
  
      } else {
  
        console.log('Mėnuo turi 28 dienas')
  
      }
  
    } else if (month === 4 || month === 6 || month === 9 || month === 11) {
  
      console.log('Mėnuo turi 30 dienų')
  
    } else {
  
      console.log('Mėnuo turi 31 dieną')
  
    }
  
  }
  
  getDaysInMonth2(2, 2012);
  getDaysInMonth2(2, 2013);
  getDaysInMonth2(4, 2012);
  getDaysInMonth2(10, 2012)
  


  // Objektinis programavimas - atminties parefreshinimas

let knygos = [];
const pridetiKnyga = (pavadinimas, metai, autorius) => {
  knygos.push(
    {pavadinimas: pavadinimas,
    metai: metai,
    autorius: autorius
  });
}

pridetiKnyga("Karas ir taika", 1935, "Levas Tolstojus");
const gautiKnyga = (id) => {
  console.log(`${knygos[id].pavadinimas} (${knygos[id].metai}) autorius/autorė ${knygos[id].autorius}`);
}

gautiKnyga(0);

// ES5
function Knyga(pavadinimas, metai, autorius) {
  this.pavadinimas = pavadinimas;
  this.metai = metai;
  this.autorius = autorius;

  this.gautiKnyga = function() {
    console.log(`${this.pavadinimas} ${this.metai} ${this.autorius}`)
  }
}

const pirmaKnyga = new Knyga("Harris Potteris", 2012, "Joanne Rowling");
pirmaKnyga.gautiKnyga();

// ES6


// Class (Constructor)