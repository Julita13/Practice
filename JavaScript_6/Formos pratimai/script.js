// // 1 Pratimas
function calculatePrice(event) {
    event.preventDefault();
    let price = 6; 
    const puseKainos= price/2; 
    const trečdalisKainos = price-(price/3); // const trečdalisKainos = Math.ceil(price*0.66);
    const age = document.querySelector("input[name=age]").value;
    const showPrice = document.querySelector("h1");

    if (age >= 16 && age < 60) {
        showPrice.innerText = `Standartinis bilietas - ${price} eurai`;
    } else if (age < 16) {
        showPrice.innerText = `Bilietas su 50% nuolaida - ${puseKainos} eurai`;
     } else {
        showPrice.innerText = `Bilietas su 33% nuolaida - ${trečdalisKainos} eurai`;
     }
}

document.querySelector("#firstform").addEventListener("submit", calculatePrice);


// 2 pratimas


function armyWaiting (event) {
    event.preventDefault();
    const amžius = document.querySelector("input[name=amžius").value;
    const showAnswer = document.querySelector("#secondanswer");
    const checked = document.getElementById("goodboy").checked;

    if (amžius >= 18 && amžius <= 30 && checked) {
        showAnswer.innerText = "Jums gali reikėti eiti į kariuomenę"
    } else {
        showAnswer.innerText = "Esate netinkamas tarnavimui kariuomenėje"
    }
}

document.querySelector("#secondform").addEventListener("submit", armyWaiting)