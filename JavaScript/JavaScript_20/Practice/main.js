// Parašyti funkciją, kurį perdarytų masyvą: 'font-size' -> fontSize

function rewriteText(text) {
    const splittedText = text.split("-");
    const changeAcc = splittedText.map((item, index) => {
      if(index === 0) {
        return item;
      } else {
        return item[0].toUpperCase() + item.slice(1);
      }
    })
    return changeAcc.join("")
  }
  
  
  console.log(rewriteText("font-size"))

//   Andriaus atsakymas: 

function fn(str) {
    return str.split('-').map((item, index) => index ? item[0].toUpperCase() + item.slice(1) : item).join('')
  }
  
  console.log(fn('font-size'));// -> fontSize



//   2. Pratimas


const button = document.querySelector("#mygtukas");
const unorderedList = document.getElementsByTagName("ul")[0];
const deleteAll = document.getElementById("delete");
let newArray = [];


button.addEventListener("click", (event) => {
  event.preventDefault();
  const newName = document.querySelector("#vardas").value;
  newArray.push(newName);
  newArray.sort();
  let listItems = "";

  newArray.forEach(vardas => {
    listItems += `<li>${vardas}</li>`
  });

  console.log(listItems);
  unorderedList.innerHTML = listItems;
})

