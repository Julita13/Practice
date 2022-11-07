// forEACH: 

let knygos = ["Pianisto ABC", "Mikė Pukuotukas", "Šaltinėlis"];

knygos.forEach((knyga) => {
  console.log(knyga);
  console.log(`Aš esu perskaičiusi ${knyga}`);
} );

//  MAP: sukuria naują masyvą, papildydami seno masyvo elementus;
let knygos2 = knygos.map((knyga) => `${knyga} 98 psl`);
console.log(knygos2);

//  REDUCE() - sukuria visiškai naują masyvą, iteruojant per vienetą
const skaičiai = [7, 4, 0, 2, 0, 2];
const suma = skaičiai.reduce((sum, skaičius) => sum + skaičius, 0); // šiuo atveju nulis - tai pradinė argumento "sum" reikšmė: kad pliusuoti skaičius turi nuo nulio
console.log(suma);

//  TAS PATS IKI REDUCE ĮVEDIMO: 
let skaičiuSuma = 0;
for(let i = 0; i < skaičiai.length; i++) {
  skaičiuSuma = skaičiuSuma + skaičiai[i];
}
console.log(skaičiuSuma);


// ANDRIAUS UŽDUOTIS: 

const randomArr = [11, 'cat', true, 4, 'mouse', 5, 9, 5, 76, false];

function reducing(arr, dataType) {
  return arr.reduce((accumulator, item) => {
    typeof item === dataType ? accumulator.push(item) : null
    return accumulator;
  }, [])
}

console.log(reducing(randomArr, 'string'));
console.log(reducing(randomArr, 'number'));
console.log(reducing(randomArr, 'boolean'));

// DAR VIENAS PAVYZDIS: 

const friends = [
    {
    name: 'Anna',
    books: ["Bible", "Harry Potter"],
    age: 21,
    },
    {
      name: "Bob", 
      books: ["War and peace", "Romeo and Juliet"],
      age: 26,
    },
    {
      name: "Alice",
      books: ["The Lord of the Rings", 'The Shining'],
      age: 10,
    },
  ];
  
  const allBooks = friends.reduce((visosKnygos, draugas) => 
  [...visosKnygos, ...draugas.books], [] 
  );
  
  const visiDraugai = friends.reduce((draugai, draugas) => 
    [...draugai, `${draugas.name} - ${draugas.age}`], []
  )
  
  console.log(allBooks); 
  console.log(visiDraugai);

// SOME: tikrina, ar BENT VIENAS masyvo elementas atitinka apibrėžtą kriterijų:

const arr = [1, 2, 3, 4, 5, 6];
const largeNum = arr.some(num => num > 4);
console.log(largeNum); // patikrina, ar yra bent vienas skaičius, didesnis už ketvrtą. 

// EVERY: tikrina, ar VISI masyvo elementai atitinka apibrėžtą kriterijų:

const arrEvery = [1, 2, 3, 4, 5, 6, 11];
const lessTen = arrEvery.every(num => num < 10);
console.log(lessTen); // gražina FALSE, nes vienas elementas - neatitinka išsikeltos sąlygos. O ją turi atitikti VISI ELEMENTAI

// SORT: sortuoja mūsų masyvą pagal tamtikrą kriterijų:

const arrSort = [1, 2, 3, 4, 5, 6];
descOrder = arr.sort((a, b) => a > b ? -1 : 1);
console.log(descOrder); 

//  VIRŠUJE ESANTIS PAVYZDUKAS PUIKIAI SORTINA MASYVĄ PAGAL DIDĖJIMO/MAŽĖJIMO TVARKA

// ARRAY.FROM - keičia visus į masyvą panašius (ar "iterable" dalykus į tikrą masyvą): 

const vardas = "frugence";
const nameArray = Array.from(vardas);
console.log(vardas);
console.log(nameArray);

//  FIND 