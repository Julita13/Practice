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


  class Car {
    constructor(brand, model, mileage, price, image) {
      this.brand = brand;
      this.model = model;
      this.mileage = mileage;
      this.price = price;
      this.image = image;
    }
    showCar() {
      const answerCell = document.getElementById("answer");

      const frame = document.createElement("div");
      frame.addEventListener("click", () => alert(`This ${this.brand} ${this.model} costs: ${this.price}$`));

      let imgCell = document.createElement("img");
      imgCell.src = this.image;

      let textCell = document.createElement("p");
      textCell.innerText = `${this.brand}  ${this.model}`;

      frame.append(imgCell, textCell);
      answerCell.append(frame);
    }
  }

  document.querySelector("#second-task").addEventListener("submit", (event) => {
    event.preventDefault();

    const brand = document.querySelector("input[name=car-brand]").value;
    const model = document.querySelector("input[name=model]").value;
    const mileage = document.querySelector("input[name=mileage]").value;
    const price = document.querySelector("input[name=price]").value;
    const image = document.querySelector("input[name=image]").value;

    const newCar = new Car(brand, model, mileage, price, image);
    console.log(newCar);
    newCar.showCar();
  })


  // JSITORIAUS veikianti versija: 
  // https://jsitor.com/QUFmgR6kWw