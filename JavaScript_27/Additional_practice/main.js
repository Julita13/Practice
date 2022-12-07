import { fetchData } from "./crud.js";
let fruits = [];
const rezultatas = document.querySelector("#rezultatas");

(() => {fetchData().then(data => {
    if(data){
        console.log(data);
        fruits = data;
    }
})})()


const angliavandeniai = document.querySelector("#angliavandeniai");
const baltymai = document.querySelector("#baltymai");
const riebalai = document.querySelector("#riebalai");
const kalorijos = document.querySelector("#kalorijos");
const cukrai = document.querySelector("#cukrai");


angliavandeniai.addEventListener("click", (e) => {
    rezultatas.innerHTML = "";
    const sortedFruits = fruits.sort((a, b) => b.nutritions.carbohydrates - a.nutritions.carbohydrates);
    for(let i = 0; i < 10; i++){
        rezultatas.innerHTML += `<div>${sortedFruits[i].name} - ${sortedFruits[i].nutritions.carbohydrates}</div>`
    }
});

baltymai.addEventListener("click", () => {
    rezultatas.innerHTML = "";
    const proteinArray = fruits.map(item => item.nutritions.protein);
    const max = Math.max(...proteinArray);
    const filteredFruits = fruits.filter(fruit => fruit.nutritions.protein === max);
    for(let i = 0; i < filteredFruits.length; i++){
        rezultatas.innerHTML += `<div>${filteredFruits[i].name} - ${filteredFruits[i].nutritions.protein}</div>`
    }
});

riebalai.addEventListener("click", () => {
    rezultatas.innerHTML = "";
    const sortedByFat = fruits.filter(item => item.nutritions.fat >= 5);
    for(let i = 0; i < sortedByFat.length; i++){
        rezultatas.innerHTML += `<div>${sortedByFat[i].name} - ${sortedByFat[i].nutritions.fat}</div>`
    }
});

// kalorijos.addEventListener("click", () => {
//     rezultatas.innerHTML = "";
//     const sortedByCalories = fruits.sort((a, b) => b.nutritions.calories - a.nutritions.calories);
//     for(let i = 0; i < sortedByCalories.length; i++){
//         rezultatas.innerHTML += `<div>${sortedByCalories[i].name} - ${sortedByCalories[i].nutritions.calories}</div>`
//     }
// });

kalorijos.addEventListener("click", () => {
    rezultatas.innerHTML = "";
    let sum = 0;
    fruits.forEach(item => {
        sum += item.nutritions.calories
    })
    // const sum = fruits.reduce((sum, item) => {
    //    return sum += item.nutritions.calories
    // }, 0)
    rezultatas.innerHTML += `<p>Visų vaisių kalorijų skaičius: ${sum}</p>`
});

cukrai.addEventListener("click", () => {
    rezultatas.innerHTML = "";
    const newCukrai = fruits.map(item => ({
        name: item.name,
        sugar: item.nutritions.sugar,
    }))
    const sortedFruits = newCukrai.sort((a, b) => b.sugar - a.sugar);
    sortedFruits.forEach(item => {
        rezultatas.innerHTML += `<div>${item.name} - ${item.sugar}</div>`
    })
})