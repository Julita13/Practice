const thirdForm = document.querySelector("#third-task");

// const newRow = document.createElement("td");


thirdForm.addEventListener("submit", (e) => {
  e.preventDefault();
  const myName = document.querySelector("input[name=fullName]").value;
  const splittedName = myName.split(" ");
  const newObject = {
    name: splittedName[0],
    surname: splittedName[1],
  };
  const newPerson = getLocalStorageItem();
  newPerson.push(newObject);
  console.log(newPerson);
  localStorage.setItem("myProfile", JSON.stringify(newPerson));
  appendItem(newObject);
});

const tBodyElement = document.querySelector("table > tbody");

function appendItem(person){
  const newRow = document.createElement("tr");
  newRow.innerHTML = `<td>${person.name}</td><td>${person.surname}</td>`;
  tBodyElement.append(newRow);
}

function getItems(){
  const persons = getLocalStorageItem();
  persons.forEach((persona) => appendItem(persona)); 
  // console.log(typeof persons);
}

function getLocalStorageItem() {
  return JSON.parse(localStorage.getItem("myProfile")) || [];
}

getItems()

// Additional practice: 
// parašyti funkciją gauti pirmiems masyvo elementams. 
// pvz console.log(pirmiElementai([1,5,7,9,6], 2)) turėtų grąžinti 1,5

const arr = ["cat", 1, 2, 3, 4, 5, 6, 7, 8, 9];
function firstElements(array, n) {
  return array.reduce((acc, item, index) => {
    index <= n ? acc.push(item) : acc;
    return acc;
  }, [])
}

console.log(firstElements(arr, 1));
console.log(firstElements(arr, 2));
console.log(firstElements(arr, 3));
console.log(firstElements(arr, 4));

// ARBA: 
const arr2 = [1, 5, 7 , 9, 10];
function fn(array, count){
  for(let i = 0; i < count; i++){
    console.log(array[i])
  }
}
fn(arr2, 3);

// ARBA: 

const arr3 = ["cat", 1, 2, 3, 4, 5, 6, 7, 8, 9];
function firstElements2(array, n) {
    return array.filter((item, index) => {
    if(typeof item !== "number") n++;
    return index < n && typeof item === "number";
    });
}
console.log(firstElements2(arr3, 2));