//  1. Pratimas

function task(myString) {
    const forbiddenWords = ["sex", "drug", "alcohol"];
    for (let i = 0; i<forbiddenWords.length; i++) {
      if(myString.includes(forbiddenWords[i])); {
        alert("Transaction blocked")
      }
    }
  }
  
  task("drug are good");
//   task("love and peace");

//  2. Pratimas

function secondTask(myNumber) {
    if (Number.isInteger(Math.sqrt(myNumber))) {
      console.log(Math.sqrt(myNumber));
    } else { 
        console.log(Math.pow(myNumber,2));
    }
  }
  
  secondTask(81);
  secondTask(7);

//    TAS PATS: 
// function secondTask(myNumber) {
//     const sqrt = Math.sqrt(myNumber);
//     if (Number.isInteger(sqrt)) {
//       console.log(sqrt);
//     } else { 
//         console.log(Math.pow(myNumber,2));
//     }
//   }
  
//   secondTask(81);
//   secondTask(7);