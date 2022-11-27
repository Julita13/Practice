const baseUrl = "https://olive-bead-glazer.glitch.me";
const myForm = document.querySelector("#my-form");
const tableBody = document.querySelector("#table-body");

myForm.onsubmit = async(event) => {
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
};



async function postData(car) {
  try {
    const response = await fetch(baseUrl, {
      method: 'POST',
      body: JSON.stringify(newCar),
      headers: {
        Accept: 'application/json',
        'Content-Type': 'application/json',
      },
    });
    if (response.ok) {
      const data = await response.json();
      getCars()
    }
  } catch (error) {
    console.error(error);
  }
};