// Informacija saugoma pas klientą Cookies pagalba ir LocalStorage/SessionStorage. 
// Tai vieta, kurioje mes galime saugoti tam tikrus duomenis naršyklėje pas vartotoją (jis už juos ir atsako).

// document.cookie = "name=Julita" // įsidedi Cookie į savo storage;
// console.log(document.cookie); // parodo mūsų Cookies. Net uždarius puslapį, šita informacija matysis.
// Informacija saugoma mūsų domene. Negalime prieiti prie duomenų, kurie saugomi kituose puslapiuose (pvz.pigu.lt)

// localStorage.setItem("name", "Julita") // išsisaugome įtemą į LocalStorage: key ir value
// console.log(localStorage.getItem("name")); // pasiimam itemą iš LocalStorage. Išsisaugos, iki kol vartotojas ją ištrins. 

// document.querySelector("h1").textContent = localStorage.getItem("name");

// document.forms[0].addEventListener("submit", (e) => {
//     e.preventDefault();
//     const name = e.target.elements.name.value;
//     localStorage.setItem("name", name);
// })

// JSON.stringify - konvertuoja array'ų į string'ą. 
// JSON.parse - atkonvertuoja string'ą atgal į array'ų

 const cars = ["BMW", "Audi"];
 console.log(typeof cars)