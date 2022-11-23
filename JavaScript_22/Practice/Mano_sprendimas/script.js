const search = document.createElement("input");
search.setAttribute("placeholder", "Surask šalį");
search.setAttribute("id", "searchInput");

const findEuropeCountries = document.createElement("button");
findEuropeCountries.setAttribute("id", "searchEurope");
findEuropeCountries.innerText = "Europos valstybės";

document.body.append(search, findEuropeCountries);

async function getData() {
  try {
    const response = await fetch("https://restcountries.com/v2/all");
    if (response.ok) {
      const data = await response.json();
      console.log(data);
      showCountries(data);
    }
  }
  catch (error) {
    console.log(`message: `, error.message);
  }
};

const createEmptyTable = () => {
  const newTable = document.createElement("table");
  const tableHeader = document.createElement("thead");
  const tableBody = document.createElement("tbody");

  const headerRow = document.createElement("tr");

  const countryFlag = document.createElement("th");
  countryFlag.innerText = "Vėliava";

  const country = document.createElement("th");
  country.innerText = "Šalis";

  const capital = document.createElement("th");
  capital.innerText = "Sostinė";

  const continent = document.createElement("th");
  continent.innerText = "Kontinentas";

  headerRow.append(countryFlag, country, capital, continent);
  tableHeader.append(headerRow);
  newTable.append(tableHeader, tableBody);

  document.body.append(newTable);

};

function showCountries(countries) {
  const tableBody = document.querySelector("tbody");
  tableBody.innerText = "";

  countries.forEach(country => {

    const flagPicture = document.createElement("img");
    flagPicture.src = country.flag;
    flagPicture.style.cssText = "width: 40px";
    const myFlag = document.createElement("td");
    myFlag.append(flagPicture);

    const myCountry = document.createElement("td");
    myCountry.innerText = country.name;

    const capital = document.createElement("td");
    capital.innerText = country.capital;

    const continent = document.createElement("td");
    continent.innerText = country.region;

    const addNewCountry = document.createElement("tr");
    addNewCountry.append(myFlag, myCountry, capital, continent);
    tableBody.append(addNewCountry);
  });

  const searchingCountry = document.querySelector("#searchInput");

  searchingCountry.addEventListener("input", (event) => {
    const filteredCountries = countries.filter((country) => country.name.toLowerCase().includes(event.target.value.toLowerCase()));
    showCountries(filteredCountries);
  });

  const searchingEurope = document.querySelector("#searchEurope");

  searchingEurope.addEventListener("click", (event) => {
    const europeanCountries = countries.filter((country) => country.region === "Europe");
    showCountries(europeanCountries);
    console.log(europeanCountries);
  })
};

function init() {
  getData();
}

createEmptyTable();
init();

