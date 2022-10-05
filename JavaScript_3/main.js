// const NAME ='Julita';
// const myName = `Mano vardas yra ${NAME}`
// alert(myName)

// let index = 0;
// while(index < 3) {
//     alert(index);
//     index++;
// }

// let i = 0;
// while (i++ < 5) alert(i);

// tas pats: 
// let i = 0;
// do {
//   alert( i );
//   i++;
// } while (i < 3);


// for (let i = 0; i <= 3; i++) { // shows 0, then 1, then 2
//     alert(i);
// }


// for (let i = 0; i < 3; i++) {
//     alert( `number ${i}!` );
//   }

// for (let i = 2; i < 11; i++) {
//     if (index % 2 === 0) {
//         console.log(`index yra ${i}`);
//     }
// }


// TAS PATS: 
// switch (browser) {
//     case 'Edge':
//       alert( "You've got the Edge!" );
//       break;
  
//     case 'Chrome':
//     case 'Firefox':
//     case 'Safari':
//     case 'Opera':
//       alert( 'Okay we support these browsers too' );
//       break;
  
//     default:
//       alert( 'We hope that this page looks ok!' );
//   }

const browser = "Chrome";

if(browser === "Chrome" || browser === "Firefox" || browser === "Safari" || browser === "Opera") {
    alert("Okay, we support the browsers too");
} else if(browser === "Edge") {
    alert("You've got the Edge!");
} else {
    alert("We hope that this page looks ok!");
}