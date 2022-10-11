// document.querySelector("button").addEventListener("click", sayHello);
// document.querySelector("p").addEventListener("copy", dontCopy);

//         function sayHello () {
//             document.querySelector("h1").textContent = "Hello"
//         }

//         function dontCopy() {
//             alert("Don't copy!");
//         }

// 1. Pratimas
// Padaryk, kad paspaudus ant mygtuko - išoktų alert su tavo vardu! (naudoti inline metoda: onclick="")

// function alertMyName() {
//     alert("Julita");
// }

// 2. Pratimas
// Perrašyti pirmą pratimą su addEventListener (ir nuo šiol naudoti būtent jį ;) ).

// document.querySelector("button").addEventListener("click", alertMyName)

// 3. Pratimas
// Padaryti, kad paspaudus ant mygtuko, po apačia atsirastų paragrafe tekstas apie jus.

// document.querySelector("button").addEventListener("click", appearText);

// function appearText(){
//     document.querySelector("p").innerText = 'Tekstas apie mane :)'
// }

// 4. Pratimas
// Sukurk programą, kurioje bus h1 tekstas 
// su skaičiumi ir mygtukas. Paspaudus ant mygtuko, skaičius padidėja (+1).

// let counter = 0; 
// document.querySelector("button").addEventListener("click", () => {
//     counter++; 
//     document.querySelector("h1").innerText = counter;
// });


// 5.Pratimas
// Sukurk programą, kurioje ilgas paragrafas. Bandant kopijuoti kodą - išmeta, kad negalima kopijuoti.

// document.querySelector("p").addEventListener("copy", dontCopy)

// function dontCopy() {
//     alert("Don't copy!");
// }

// 6.Pratimas
// Sukurk programą, kur paspaudus ant mygtuko - 
// sugeneruoja random skaičių nuo 1 iki 100 ir jį išmeta kaip h1 tekstą.

// function generateRandomNumber() {
//     return Math.floor(Math.random() * 100) + 1;
// }

// document.querySelector("button").addEventListener("click", () => {
//     const randomNumber = generateRandomNumber();
//     document.querySelector("h1").innerText = randomNumber;
// })

// 7. Pratimas
// Sukurk programą, kurioje du mygtukai - "Turiu bent 18 metų" ir "Mažiau nei 18 metų". Jei paspaudžia ant pirmo mygtuko - išmeta h1 tekstą "Alus". 
// Jei antrą paspaudžia - išmeta alert su "nepilnametis - nieko neturim".

// document.getElementById("adult").addEventListener("click", () => document.getElementById("output").innerText = "Alus");
// document.getElementById("child").addEventListener("click", () => alert("Nepilnametis - nieko neturim"));

// 8.Pratimas
// Sukurk programą, kuri sugeneruoja random skaičių nuo 1 iki 3, kai tik užsikrauna puslapis. Vartotojas skaičiaus nemato (bet jūs pasiconsole'inkit). Ekrane - trys mygtukai (1, 2, 3). 
// Vartotojas turi spėti koks random skaičius susigeneravo. Jei atspėja - išoka alert("Yay"), jei ne - alert("Nay").

// const randomNumber = Math.floor(Math.random() * 3) + 1;
// console.log(randomNumber);

// document.getElementById("one").addEventListener("click", () => randomNumber === 1 ? alert("Yay"): alert("Nay"));
// document.getElementById("two").addEventListener("click", () => randomNumber === 2 ? alert("Yay"): alert("Nay"));
// document.getElementById("three").addEventListener("click", () => randomNumber === 3 ? alert("Yay"): alert("Nay"));

// 9. Pratimas
// Parašykite programą, kurioje būtų tekstas "Nespauskite mygtuko". Vartotojui paspaudus bet kokį mygtuką turi pasikeisti tekstas į "Neklausote manęs".

// document.querySelector("button").addEventListener("click", () => document.getElementById("changingtext").innerText = "Neklausote manęs");

// 10.Pratimas
// Sukurkite h1, jam duokite 150vh aukštį ir 150vh line-height. 
// Jame įrašykite "Nejudinkite pelytės". Jeigu vartotojas pajudins pelytę - pakeiskite tekstą į "Kiek galima neklausyti?!".

document.body.addEventListener("mousemove", () => document.getElementById("output").innerText = "Kiek galima neklausyti?!");

// PASICHEKINTI! 
// 6 Pratimas

// let randomNumber = Math.floor(Math.random() * 100) + 1;

// document.querySelector('button').addEventListener('click', () => {
//   document.querySelector('h1').innerText = randomNumber;
// })