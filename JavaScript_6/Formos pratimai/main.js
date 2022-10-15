// PETRO PRATIMAS IŠ CAO.LT
// document.querySelector("form").addEventListener("submit", myFunction);

// function myFunction(event) {
//     event.preventDefault();
//     const result = document.querySelector("input[name=abc]").value;
//     document.querySelector("h1").innerText = result;
// }


// Pirmasis įžanginis pratimas
// document.querySelector("form").addEventListener("submit", showName);

// function showName(event) {
//     event.preventDefault();
//     const result = document.querySelector("input[name=vardas]").value;
//     alert(result);
// }

// Antrasis įžanginis pratimas

// document.querySelector("form").addEventListener("submit", showAge);

// function showAge(event) {
//     event.preventDefault();
//     const amžius = document.querySelector("input[name=age]").value;
//     document.querySelector("h1").innerText = `Tavo amžius: ${amžius}`;
// }

// Trečiasis įžanginis pratimas

document.querySelector("form").addEventListener("submit", Driving);

function Driving(event) {
    event.preventDefault();
    const amžius = document.querySelector("input[name=age]").value;
    const vardas = document.querySelector("input[name=vardas]").value;
        if (amžius >=18) {
            document.querySelector("h1").innerText = `Vairuoti gali: ${vardas}`
        } else {
            document.querySelector("h1").innerText = `Dar mokysis vairuoti: ${vardas}`
        }
}
