// 1.Pratimas
// Sukurkite su HTML formą su vienu laukeliu - fullname, ir po apačia - lentelę su dviem stulpeliais - name ir surname. 
// JavaScripte pasirašykite konstruktorių, kuris turės vardą, pavardę ir metodą - atsirasti lentelėje. 
// Kai vartotojas įrašo savo pilną vardą - su JS metodais išskirkite jį į dvi dalis; pasirūpinkite, kad nebūtų tarpelių prieš ir po vardo; 
// pirmą raidę vardo ir pavardės padidinkit, o kitas - sumažinkit (capitalization); sukurkite objektą naudojant konstruktorių; 
// ir galiausiai iškvieskite metodą, kad pridėtų į lentelę. Taip, naudojant OOP pagrindus, vartotojui įrašius duomenis į formą, 
// atsiras apačioje lentelėje išskirtas vardas ir pavardė, o ir leis tolimesniai projekto plėtrai (t.y. darbui su objektais).


// function Person(vardas, pavarde) {
//     this.name = vardas;
//     this.surname = pavarde;
//     this.appearInTable = function () {

//     }
//   }
  
//   function writeFullName(e) {
//     e.preventDefault();
//     const fullName = document
//       .querySelector("input[name=vardas]")
//       .value.trim()
//       .split(" ");
//     const finalName = fullName[0].charAt(0).toUpperCase() + fullName[0].slice(1).toLowerCase();
//     const finalSurname = fullName[1].charAt(0).toUpperCase() + fullName[1].slice(1).toLowerCase();
//     const newName = document.getElementById("my-name");
//     const newSurname = document.getElementById("my-surname");
//     newName.innerText = finalName;
//     newSurname.innerText = finalSurname;
//     // console.log(fullName)
//     // console.log(finalSurname)
//   }
  
//   const newPerson = new Person("finalName", "finalSurname");

//   document.querySelector("#first-task").addEventListener("submit", writeFullName);


//   NEGI VEIKIANTIS VARIANTAS???? 

function Person(vardas, pavarde) {
    this.name = vardas;
    this.surname = pavarde;
    this.printNameInTable = function () {
      const nameCell = document.getElementById("my-name");
      const surnameCell = document.getElementById("my-surname");
      nameCell.innerText = this.name;
      surnameCell.innerText = this.surname;
    }
  }
  
  document.querySelector("#first-task").addEventListener("submit", (event) => {
    event.preventDefault();
    const fullName = document
      .querySelector("input[name=vardas]")
      .value.trim()
      .split(" ");
    const vardas = fullName[0].charAt(0).toUpperCase() + fullName[0].slice(1).toLowerCase();
    const pavarde = fullName[1].charAt(0).toUpperCase() + fullName[1].slice(1).toLowerCase()
  
    const newPerson = new Person(vardas, pavarde);
    newPerson.printNameInTable();
  }
  )


  // document.querySelector("#first-task").addEventListener('keypress', (event) => {
  //   event.preventDefault();
  //   const fullName = document
  //     .querySelector("input[name=vardas]")
  //     .value;
  //   if(event.key === "Enter") {
  //     console.log(fullName)
  //     if(fullName) {
  //       let name = fullName.trim().split(" ");
  //     const vardas = name[0].charAt(0).toUpperCase() + name[0].slice(1).toLowerCase();
  //     const pavarde = name[1].charAt(0).toUpperCase() + name[1].slice(1).toLowerCase();
  
  //     const newPerson = new Person(vardas, pavarde);
  //     newPerson.printNameInTable();
  //   } else {
  //     let smallElement = document.querySelector("small");
  //     smallElement.innerText = "Jus nieko neįvedėte";
  //   }
  //   }
  // } )

  // 3.Pratimas
  // 3. Prisimename darbą su masyvais: sukurkite funkciją, kuri priims masyvą ir išfiltruos visus pasikartojančius 
  // skaičius bei šį masyvą grąžins atgal.
  // Pvz:
  // paduodu: [1, 3, 3, 5, 5, 5]
  // grąžina: [1, 3, 5]

  // 1 sprendimo būdas su filter ir indexOf
  const myArray = [1, 3, 3, 5, 5, 5];
  const newArray = myArray.filter((number, index) => {
    return myArray.indexOf(number) === index;
  });

  console.log(newArray);

  //  2 sprendimo būdas su forEach
  let secondArray = [];
  myArray.forEach((number) => {
    if (!secondArray.includes(number)) {
      secondArray.push(number);
  }
  });

  console.log(secondArray);

  // 3 sprendimo būdas - pats trumpiausias - su Set()

  let thirdArray = [... new Set(myArray)];
  console.log(thirdArray);

  //  Tas pats, tik užrašymo būdas skiriasi: 
  const removeDuplicates = arr => [...new Set(arr)];
  console.log(removeDuplicates([1, 3, 3, 5, 5, 5]));

  // 2.Pratimas
  // Sukurkite HTML formą, kurioje vartotojas galės įrašyti (į input laukelius): car brand, model, mileage, price ir image (url laukelis). 
  // Per konstruktorių, sukuriams objektas ir jis atvaizduojamas po forma (CSS rašykite CSS'e) kaip atvaizduota nuotraukoje apačioje. 
  // Paspaudus ant automobilio bloko - turi alert išmesti kainą.