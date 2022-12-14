// Petro pratimai
function callbackFunction(text){
    alert("print this:" + text)
  }
  
  function coreFunction (name, cbFn){
    cbFn(name.toUpperCase())
  }
  
  coreFunction("Petras", callbackFunction)

//   Video:

function fn(n1) {
    return n1*n1;
  }
  
  console.log(fn(5));

// 1.Pratimas
// Sukurk dvi funkcijas: alertName, consoleName. Abi funkcijos turės vieną parametrą - vardą. 
// Jos bus callback funkcijos, pirma tą vardą alertins, kita - console.log'ins. O dabar susikuriame pagrindę funkciją (coreFunction), 
// ši funkcija - paima pirmą raidę, ją padidina ir prijungia kitas raides (t.y. užtikrina, kad vardas prasideda iš didžiosios; pvz: "petras" => "Petras"), 
// tada iškviečia viena iš callback funkcijų (nesvarbu kurią, galima jas kaitalioti).

function alertName (name) {
    return alert(name);
  }
  
  function consoleName(name) {
    return console.log(name)
  }
  
  function coreFunction(name) {
    const capitalizedName = name.charAt(0).toUpperCase() + name.slice(1).toLowerCase();
    alertName(capitalizedName);
  };
  
  
  coreFunction("julita");

//    ARBA ATSAKYMAS IŠ CAO.LT:

// function alertName(text) {
//     alert(text)
//   }
  
//   function consoleName(text) {
//     console.log(text)
//   }
  
//   function coreFunction(name, callback) {
//     const capitalizedName = name.charAt(0).toUpperCase() + name.slice(1).toLowerCase();
//     callback(capitalizedName)
//   }
  
//   coreFunction("peTras", consoleName)