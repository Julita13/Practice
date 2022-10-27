//  1. Pratimas

// function task(myString) {
//     const forbiddenWords = ["sex", "drug", "alcohol"];
//     for (let i = 0; i<forbiddenWords.length; i++) {
//       if(myString.includes(forbiddenWords[i])); {
//         alert("Transaction blocked")
//       }
//     }
//   }
  
//   task("drug are good");
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

// 3. Pratimas

// Pirmas sprendimo būdas
function findLongestStringInArray(masyvas) {
  let longestString = masyvas[0].length;
  let answer = masyvas[0];

  for (let i = 0; i < masyvas.length; i++) {
    let maxi = masyvas[i].length;  
    if(maxi > longestString) {
      answer = masyvas[i];
      longestString = maxi;
    }
  } return `${answer} ${longestString}`;
}

console.log(findLongestStringInArray(["adios", "bye", "viso gero", "arividerchi"]));

// Antras sprendimo būdas
function findLongestStringOf(masyvas) {
  let longest  = " "; 
  for(let i = 0; i < masyvas.length; i++) {
    if(masyvas[i].length >= longest) {
      longest = masyvas[i].length;
    }
  } return longest;
}

console.log(findLongestStringOf(["arividerchi", "bye", "adios", "viso geriausio"]));

// 4. Pratimas

// Pirmas sprendimo būdas
function stringNoDigits(string) {
  const noNumbers = string.replace(/[0-9]/g, "");
  return noNumbers;
}

console.log(stringNoDigits("julita12345"));

// Antras sprendimo būdas

function stringWithoutDigits(string) {
  const noNumbers = string.replace(/\d/g, "");
  return noNumbers;
}

console.log(stringWithoutDigits("julita12348"));

//  Trečias sprendimo būdas

function stringWithoutNumbers(string) {
  const containNumbers = /\d/.test(string);
  if(containNumbers) {
    return string.replace(/\d/g, "");
  } 
}

console.log(stringWithoutNumbers("julita123"));