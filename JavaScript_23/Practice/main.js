// CRUD - create, read, update and delete
// Atitikmenys - POST, GET, PUT, DELETE

// Jei fetch'ui nurodomas tik URL, tai duomenys tik gaunami, atliekama GET funkcija. 
// Jei norime naudoti POST metoda, prie URL irgi reikia pridėti option'sus. 

// method + header + body

//  kad pridėti funkciją, reikią būtinai pridėti žodelį EXPORT(crud.js), o main'e - IMPORT

import { fetchData, postData } from './src/crud.js';
const dataEl = document.querySelector("#data");
const formEl = document.querySelector("#formElem");

formEl.onsubmit = async(event) => {
    event.preventDefault();
    const idValue = formEl.querySelector("#id").value;
    const nameValue = formEl.querySelector("#name").value;
    const birthdayDayValue = formEl.querySelector("#age").value;

    const data = {
        id: idValue,
        name: nameValue,
        birthday: birthdayDayValue,
    };

    postData(data).then((item) => {displayData(item)});
    console.log(idValue, nameValue);
}

function displayData(data) {
  let tableRow = '';
  data.forEach(item => {
    const today = new Date();
    const age = today.getFullYear() - new Date(item.birthday).getFullYear() 
    tableRow += `<tr><td>${item.id}</td><td>${item.name}</td><td>${age}</td><td>${new Date(item.birthday).toLocaleDateString()}</td></tr>`
  })
  const tableBody = `<table class="table">
    <thead><tr>
    <th scope="col">id</th><th scope="col">Vardas</th><th scope="col">Age</th><th scope="col">Birthday</th>
    </tr></thead>
    ${tableRow}
    </table>`

  dataEl.innerHTML = tableBody;
}

function init() {
  fetchData().then((data) => {
    if (data) {
      displayData(data);
    }
  });
}

init();