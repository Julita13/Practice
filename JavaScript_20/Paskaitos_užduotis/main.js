const varduInput = document.getElementById('vardas');
const mygtukas = document.getElementById('mygtukas');
const mygtukastrinti = document.getElementById('mygtukastrinti');
const list = document.getElementsByTagName('ul')[0];
mygtukas.addEventListener('click', myFunction);
mygtukastrinti.addEventListener('click', deleteArray);
let varduMasyvas = [];

function myFunction(e) {
  e.preventDefault();
  const vardoReiksme = varduInput.value;
  varduMasyvas.push(vardoReiksme)
  varduMasyvas.sort();
  addListItems();
}

function deleteArray(e) {
  e.preventDefault();
  varduMasyvas = [];
  addListItems();
}

function addListItems() {
  let listItems = "";

  varduMasyvas.forEach(item => {
    listItems += `<li>${item}</li>`
  }
  )
  console.log(listItems);
  list.innerHTML = listItems;
  }