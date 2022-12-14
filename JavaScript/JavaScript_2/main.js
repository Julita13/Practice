// const userName = prompt ("Įveskite vardą");
// const birthDay = "gegužės 12";

// console.log(userName + " yra gimęs " + birthDay);

//3pratimas
// const bazinisDydis = prompt("Įveskit bazinio užmokesčio dydį");
// const zmones = 1761463;
// const biudzetas = 8487300000;
// const ismoka =bazinisDydis * zmones;
// const procentai = Math.round((ismoka*100)/biudzetas);
// //console.log("Kiek procentų sudaro Lietovos biudžeto išmokos", procentai, "%");
// console.log (`Kiek procentu sudaro Lietuvos biudzeto ismokos ${procentai}%`);

const today = 'sekmadienis';

if(today === 'antradienis') {
  console.log('šiandien yra antradienis')
  } else {
    console.log('šiandien nėra antradienis')
  }

  //loginiai operatoriai:
  //&& AND (ir) 
  // || OR (arba)


//   const sk1 = 3; 
//   const sk2 = 5; 
//   if(sk1 > sk2) {
//     //čia gali būti dar vienas if statementas
//     console.log(sk1 + " > " + sk2);
//   } else {
//     console.log(sk1 + " < " + sk2);
//   }

// Parašykite if...else sąlygą, kuri:
// − consolė’je atspausdins lyginis“, jei skaičius yra lyginis skaičius;
// − consolė’je atspausdins „nelyginis“, jei skaičius yra nelyginis skaičius.
// Įsitikinkite, kad išbandėte savo kodą su skirtingomis vertėmis.
// Pvz.: Jei skaičius lygus 1, tada konsolėje turėtų būti atspausdinama “nelyginis”.

const skaicius = prompt("Įveskite skaičių");

if (skaicius % 2 === 0) {
    console.log("lyginis");
} else {
    console.log("nelyginis");
}

//ternary operators

// const today = 'sekmadienis';

// today === 'antradienis' ?
//   console.log('šiandien yra antradienis'):
//   console.log('šiandien nėra antradienis');
  
// condition ? "trueValue" : "falseValue";



// switch statement
// const today = 'antradienis';

// switch(today) {
//   case 'pirmadienis': 
//     console.log('Šiandien dar nėra savaitgalis');
//     break;
//   case 'antradienis':
//     console.log('Šiandien dar nėra savaitgalis');
//     break;
//   default: 
//     console.log('Savaitgalis!');
// }


!
2 + 1 + "Jonas" + 3 + 2 === "3Jonas5"