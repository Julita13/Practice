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