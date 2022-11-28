const baseUrl = "https://robust-safe-crafter.glitch.me/";
const citiesInVilnius = document.querySelector("#vilnius");
const citiesInKaunas = document.querySelector("#kaunas");
const citiesInKlaipeda = document.querySelector("#klaipeda");

const myForm = document.querySelector("#my-form");
const finalAnswer = document.querySelector("#answer");

function showFlats(flats) {
  const flatsWindow = document.querySelector("#flat-profiles");
  flatsWindow.innerHTML = "";

  flats.forEach(flat => {

    const flatPhoto = document.createElement("img");
    flatPhoto.src = flat.image;
    flatPhoto.style.cssText = "width: 12rem; border: 1px solid lightgrey"
    const photo = document.createElement("div");
    photo.append(flatPhoto);


    const flatPrice = document.createElement("h4");
    flatPrice.innerText = `€${flat.price}`;
    flatPrice.style.cssText = "padding-left: 1rem; color: rgb(54, 54, 54);"

    const flatCity = document.createElement("p");
    flatCity.style.cssText = "color: rgb(91, 91, 91); padding-left: 1rem; font-size: 0.8rem; margin-top: -1.2rem"
    flatCity.innerText = flat.city;

    const flatDescription = document.createElement("p");
    flatDescription.style.cssText = "color: rgb(91, 91, 91); width: 8rem; padding-left: 1rem; font-size: 0.8rem"
    flatDescription.innerText = flat.description;

    const flatInfo = document.createElement("div");
    flatInfo.style.cssText = "text-align: left; border: 1px solid lightgrey; box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px; margin-top: 1rem"
    flatInfo.append(photo, flatPrice, flatCity, flatDescription);
    flatsWindow.append(flatInfo);
  });
};

function createEventListeners(flats) {
  citiesInVilnius.addEventListener("click", (event) => {
    event.preventDefault();
    const vilniusCities = flats.filter((flat) => flat.city === "Vilnius");
    showFlats(vilniusCities);
    console.log(vilniusCities);
  });

  citiesInKaunas.addEventListener("click", (event) => {
    event.preventDefault();
    const KaunasCities = flats.filter((flat) => flat.city === "Kaunas");
    showFlats(KaunasCities);
    console.log(KaunasCities);
  });

  citiesInKlaipeda.addEventListener("click", (event) => {
    event.preventDefault();
    const klaipedaCities = flats.filter((flat) => flat.city === "Klaipeda");
    showFlats(klaipedaCities);
    console.log(klaipedaCities);
  });
}

async function getFlats() {
  try {
    const response = await fetch(baseUrl);
    if (response.ok) {
      const data = await response.json();
      console.log(data);
      createEventListeners(data);
      showFlats(data);
    }
  } catch (error) {
    console.log(`message: `, error.message);
  }
};

getFlats();

myForm.onsubmit = async (event) => {
  event.preventDefault();
  const imageValue = myForm.querySelector("#image").value;
  const cityValue = myForm.querySelector("#city").value;
  const priceValue = Number(myForm.querySelector("#price").value);
  const descriptionValue = myForm.querySelector("#description").value;

  const newFlat = {
     image: imageValue,
     city: cityValue,
     price: priceValue,
     description: descriptionValue
  };

   console.log(newFlat);
   postData(newFlat).then((item) => {
     console.log(item);
   })
};

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
      if (data.msg === 'Property added') {
        answer.innerText = "Sėkmingai pridėjote savo nekilnojamojo turto informaciją";
        answer.style.color = 'green';
        return data;
      } else {
        answer.innerText = "Duomenų įrašyti nepavyko.";
        answer.style.color = 'red';
      }
    }
  } catch (error) {
    console.error(error);
  }
}





// pirma dalis baigta: https://jsitor.com/W5pqcoSudx
// antra dalis irgi?: https://jsitor.com/W5pqcoSudx