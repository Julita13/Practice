const atlyginimas = 5000; 
const virsvalandziai = 10; 
const koeficientas = 20;

function skaiciuojameAtlyginima(alga, overtime, rate) {
  return alga + (overtime * rate);
}

console.log(skaiciuojameAtlyginima(atlyginimas, virsvalandziai, koeficientas));

const darbuotojas = {
  atlyginimas: 5000,
  virsvalandziai: 10,
  koeficientas: 20,
  skaiciuojameAtlyginima: function() {
    return this.atlyginimas + (this.virsvalandziai * this.koeficientas)
  }
}

console.log(darbuotojas.skaiciuojameAtlyginima());