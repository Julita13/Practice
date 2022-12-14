// 1.Pratimas

function Person(name, surname) {
    this.name = name;
    this.surname = surname;
    this.addToTable = function () {
      const nameColumn = document.createElement('td');
      nameColumn.textContent = this.name;
      const surnameColumn = document.createElement('td');
      surnameColumn.textContent = this.surname;
      const tr = document.createElement('tr');
      tr.append(nameColumn, surnameColumn);
      document.querySelector('table > tbody').append(tr);
    };
  }
  
  const capitalize = (text) => text.charAt(0).toUpperCase() + text.slice(1).toLowerCase();
  
  document.querySelector('form').addEventListener('submit', (event) => {
    event.preventDefault();
    const fullname = document.getElementById('fullname').value;
    const [name, surname] = fullname.split(' ').map(namePart => capitalize(namePart.trim()));
  
    const person = new Person(name, surname);
    person.addToTable();
  });
  
// 3. Pratimas

const myArray = [1, 3, 3, 5, 5, 5];

let thirdArray = [... new Set(myArray)];
console.log(thirdArray);

//  Tas pats, tik užrašymo būdas skiriasi: 
const removeDuplicates = arr => [...new Set(arr)];
console.log(removeDuplicates([1, 3, 3, 5, 5, 5]));

// 3.Pratimas

class Car {
  constructor(brand, model, mileage, price, image) {
    this.brand = brand;
    this.model = model;
    this.mileage = mileage;
    this.price = price;
    this.image = image;
  }

  addToList() {
    const card = document.createElement('div');
    card.className = "card";
    card.addEventListener('click', () => alert(`Price: ${this.price}`));
    
    const img = document.createElement('img');
    img.src = this.image;
    
    const text = document.createElement('h6');
    text.innerText = `${this.brand} ${this.model}`;

    card.append(img, text);
    document.querySelector('div.wrapper').append(card)
  }
}

document.querySelector('form').addEventListener('submit', (event) => {
  event.preventDefault();
  const brand = document.getElementById('brand').value;
  const model = document.getElementById('model').value;
  const mileage = document.getElementById('mileage').value;
  const price = document.getElementById('price').value;
  const image = document.getElementById('image').value;

  const car = new Car(brand, model, mileage, price, image);
  car.addToList();
});