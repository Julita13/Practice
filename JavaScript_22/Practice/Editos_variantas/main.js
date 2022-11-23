async function getData() {
    try {
      const response = await fetch('https://restcountries.com/v2/all');
      if (response.ok) {
        const data = await response.json();
        renderData(data);
        console.log(data);
      }
    }
    catch (error) {
      console.log(error);
    }
  }
  const divFilters = document.querySelector('#filters');
  
  function buttonRender(countries) {
    const buttonPicture = document.createElement('button');
    buttonPicture.textContent = 'Europos Valstybės';
    divFilters.append(buttonPicture);
    buttonPicture.onclick = () => {
      const europeCountries = countries.filter((country) => 
        country.region === 'Europe')
      tableRender(europeCountries);
      console.log(europeCountries);
    }
  }
  
  function inputFilter(countries) {
    const textBox = document.createElement('input');
    textBox.placeholder = 'Ieškoti valstybės';
    divFilters.append(textBox);
    textBox.onkeyup = (event) => {
      console.log(event.target.value);
      const filteredCountries = countries.filter((country) =>
        country.name.toLowerCase().includes(event.target.value.toLowerCase())
      )
      tableRender(filteredCountries);
    }
  }
  
  function renderData(countries) {
    tableRender(countries);
    buttonRender(countries);
    inputFilter(countries);
  }
  
  function tableRender(countries) {
    const tableEl = document.createElement('table');
    const divData = document.getElementById('data');
    const tHead = document.createElement('thead');
    tableEl.append(tHead);
    const row = document.createElement('tr');
    tHead.append(row);
  
    const columnFlag = document.createElement('th');
    const columnCountry = document.createElement('th');
    const columnCapital = document.createElement('th');
    const columnRegion = document.createElement('th');
    columnFlag.innerText = 'Vėliavos';
    columnCountry.innerText = 'Valstybės';
    columnCapital.innerText = 'Sostinės';
    columnRegion.innerText = 'Žemynas';
    row.append(columnFlag, columnCountry, columnCapital, columnRegion);
    const tBody = document.createElement('tbody');
    tableEl.append(tBody);
  
  
    countries.forEach(country => {
      const dataRow = document.createElement('tr');
      const flagCell = document.createElement('td');
      const countryCell = document.createElement('td');
      const capitalCell = document.createElement('td');
      const regionCell = document.createElement('td');
      dataRow.append(flagCell, countryCell, capitalCell, regionCell);
      const imageEl = document.createElement('img');
      imageEl.style.width = '50px'
      imageEl.src = country.flag;
      flagCell.append(imageEl);
      tBody.append(dataRow);
      countryCell.innerText = country.name;
      capitalCell.innerText = country.capital;
      regionCell.innerText = country.region;
    }
    
    )
    console.log(tableEl);
    divData.innerHTML = '';
    divData.append(tableEl);
  }
  
  
  function init(){
    getData()
  }
  
  init()