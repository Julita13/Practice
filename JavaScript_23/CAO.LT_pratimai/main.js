const baseUrl = "https://olive-bead-glazer.glitch.me";
const myForm = document.querySelector("#my-form");
const tableBody = document.querySelector("#table-body");


function showCars(cars) {
  const tableBody = document.querySelector("tbody");
  tableBody.innerHTML = "";

  cars.forEach(car => {
    const brand = document.createElement("td");
    brand.innerText = car.brand;

    const model = document.createElement("td");
    model.innerText = car.model;

    const newRow = document.createElement("tr");
    newRow.append(brand, model);
    tableBody.append(newRow)
  });
};

async function getCars() {
  try {
    const response = await fetch(baseUrl);
    if (response.ok) {
      const data = await response.json();
      console.log(data);
      showCars(data);
    }
  } catch (error) {
    console.log(`message: `, error.message);
  }
};

getCars();

// import {getCars, postData} from './src/crud.js';
// const myForm = document.querySelector("#my-form");
// const tableBody = document.querySelector("#table-body");


// myForm.onsubmit = async(event) => {
//   event.preventDefault();
//   const brandValue = myForm.querySelector("#car-brand").value;
//   const modelValue = myForm.querySelector("#car-model").value;

// const newCar = {
//   brand: brandValue,
//   model: modelValue,
// };

// const newRow = document.createElement("tr");
// const newBrandData = document.createElement("td");
// newBrandData.innerText = newCar.brand;
// const newModelData = document.createElement("td");
// newModelData.innerText = newCar.model;
// newRow.append(newBrandData, newModelData);
// tableBody.append(newRow);

// console.log(newCar);
// };

// function showCars(newCar) {
//   const tableBody = document.querySelector("tbody");
//   tableBody.innerHTML = "";

//   newCar.forEach(car => {
//     const brand = document.createElement("td");
//     brand.innerText = car.brand;

//     const model = document.createElement("td");
//     model.innerText = car.model;

//     const newRow = document.createElement("tr");
//     newRow.append(brand, model);
//     tableBody.append(newRow)
//   });
// };

// function init() {
//   getCars().then((newCar) => {
//   if(newCar) {
//     showCars(newCar);
//   };
// })
// }

// init();


// https://jsitor.com/8cqxJAacFh  veikiantis variantas : 1 padaryta. 2 ne taip. To be continued

//  https://jsitor.com/S788_s8o8O - Andriaus atsakymas