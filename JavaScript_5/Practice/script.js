const varduMasyvas = ['Jevgenij', 'Edita', 'Rūta', 'Andrius', 'Julita', 'Ana', 'Darius', 'Dovilė', 'Edita', 'Eglė'];
// ------ FOR -----
// for(let i = 0; i < varduMasyvas.length; i++) {
//   console.log(`${varduMasyvas[i]} yra CA studentas/studentė`)
// }

// ----- WHILE ------
// let n = 0;
// while (n < varduMasyvas.length) {
//   console.log(`${varduMasyvas[n]} yra CA studentas/studentė`)
//   n++;
// }

// ----forEach----
// console.log(`---forEach---`); 
// varduMasyvas.forEach((vardas) => {
//     console.log(`${vardas} yra CA studentas/studentė`)
//   })

// console.log('---forEach---');
// varduMasyvas.forEach((vardas, i) =>
// console.log(`${i} - ${vardas} yra CA studentas/studentė`)
// )


// Parašykite scriptą, kuris paprašytų įvesti: prekės kainą, paklaustų ar reikalingas pristatymas, jei reikalingas - paklaustų miesto į kurį
// reiks pristatyti;
// "Įveskite prekės kainą";
// "Ar reikalingas pristatymas į namus? (taip/ne)";
// "Į kurį miestą reiks pristatyti?"
// Jei prekės kaina daugiau arba lygu 50€ arba miestas yra "Vilnius"- pristatymas nemokamas. Pristatymas kitur Lietuvoje: 20€;
// Galiausiai atspausdintų tokią informaciją:
// 1 variantas (be pristatymo)
// Prekės kaina: xx.xx €
// Prekę galite atsiimti nemokamai Vilniuje adresu Gedimino pr. 1a
// 2 variantas (su pristatymu)
// Prekės kaina : xx.xx €
// Pristatymas: xx.xx €
// Iš viso: xx.xx €
// Prekę pristatysime į "įvestas miestas" per 1-3 dienas.
// 3 variantas (su nemokamu pristatymu)
// Prekės kaina : xx.xx €
// Prekę nemokamai pristatysime į "įvestas miestas" per 1-3 dienas.


const kaina = prompt('Įveskite prekės kainą');
const pristatymas = confirm('Ar reikalingas pristatymas?');

console.log(`Prekės kaina: ${kaina} €`);
if(pristatymas) {
  const miestas = prompt('Į kurį miestą reiks pristatyti?');
  
  if (kaina >= 50 || miestas === 'Vilnius') {
    console.log(`Prekę nemokamai pristatysime į ${miestas} per 1 - 3 dienas.`);
  } else {
    console.log('Pristatymas 20Eur');
    const suma = +kaina + 20;
    console.log(`Iš viso: ${suma}`);
    console.log(`Prekę pristatysime į ${miestas} per 1 - 3 dienas.`);
  }

} else {  
  console.log(`Prekę galite atsiimti nemokamai Vilniuje adresu Gedimino pr. 1a`);    
}