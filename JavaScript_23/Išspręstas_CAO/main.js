const baseUrl = "https://olive-bead-glazer.glitch.me";
const myForm = document.querySelector("#my-form");
const tableBody = document.querySelector("#table-body");
const myTable = document.querySelector("#my-table");


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

myForm.onsubmit = async (event) => {
  event.preventDefault();
  const brandValue = myForm.querySelector("#car-brand").value;
  const modelValue = myForm.querySelector("#car-model").value;

  const newCar = {
    brand: brandValue,
    model: modelValue,
  };

  const newRow = document.createElement("tr");
  const newBrandData = document.createElement("td");
  newBrandData.innerText = newCar.brand;
  const newModelData = document.createElement("td");
  newModelData.innerText = newCar.model;
  newRow.append(newBrandData, newModelData);
  tableBody.append(newRow);

  console.log(newCar);
  postData(newCar).then((item) => {
   console.log(item);
  //  displayData();
  })
};

getCars();

const postData = async (data) => {
  try {
    const response = await fetch(baseUrl, {
      method: 'POST',
      body: JSON.stringify(data),
      headers: {
        Accept: 'application/json',
        'Content-Type': 'application/json',
      },
    });
    if (response.ok) {
      const data = await response.json();
      if (data.msg === 'Duomenys irasyti') {
        answer.innerText = "Duomenys įrašyti sėkmingai.";
        answer.style.color = 'green';
        return data;
      } else{
        answer.innerText = "Duomenų įrašyti nepavyko.";
        answer.style.color = 'red';
      }
    }
  } catch (error) {
    console.error(error);
  }
};





// function displayData(data) {
//   let tableRow = '';
//   data.forEach(item => {

//     tableRow += `<tr><td>${item.brand}</td><td>${item.model}</td></tr>`
//   })
//   const tableBody = `<table class="table">
//     <thead><tr>
//     <th scope="col">id</th><th scope="col">Brand</th><th scope="col">Model</th>
//     </tr></thead>
//     ${tableRow}
//     </table>`

//   myTable.innerHTML = tableBody;
// }


// Jevgenijaus atsakymas: 

// https://jsitor.com/DHTk13yUBk

// Eglės atsakymas: 
// https://jsitor.com/pqMRzyAgzJ