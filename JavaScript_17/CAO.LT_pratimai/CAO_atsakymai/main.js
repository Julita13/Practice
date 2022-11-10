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