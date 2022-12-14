// metodai dažniausiai užrašomi taip: value.dataTypeMethod(optionalParameters);
// kiti metodai gali būti užrašomi kaip: DataType.method(inputValue, oprionalParameters);
// metodus galima kombinuoti: value.methodOne(options).methodTwo(options); 
// 
//  NUMBER: 
// .toFixed(ikiKiekapvalini)
let toFix = 5.98754654; 
console.log(toFix.toFixed(2));

//  toExponential(ikiKiekApvalinti);
console.log(toFix.toExponential(2));

// toString()
console.log(toFix.toString());

// isNaN(reikšmė)
console.log(isNaN("reiksme"));
console.log((isNaN(9)));
console.log(isNaN(false));

// Number.isInteger(reikšmė) - grąžina boolean'ą
console.log(Number.isInteger());

// Number.parseInt(value, radix);
console.log(Number.parseInt('0xF', 16));

// Number(reikšmė) - būdas kovertuoti bet kurį string'o skaičių į Number type skaičių
console.log(typeof Number("5"));



// STRING 
// .length (nurodo stringo ilgį) -
const manoTekstas = "Šiandien yra ketvirtadienis";
console.log(manoTekstas.length);
// OBJEKTAI ILGIO NETURI!!!

// .charAt(index) - atiduoda mums nurodytą per Index'ą pozicijos reikšmę
const ilgis = manoTekstas.length;
console.log(manoTekstas.charAt(ilgis-1)); // jei norime gauti paskutinį simbolį, reikia numinusuoti -1, nes skaičiuojame nuo 0!
console.log(manoTekstas.charAt());

// concat(string1, string2 .... stringN)
const reiksme1 = "Labas "; 
const reiksme2  = "vakaras";
const reiksme3 = "!";
console.log(reiksme1.concat(reiksme2, reiksme3)) 
console.log(reiksme1 + reiksme2 + reiksme3); // tas pats. kas ir 47 eilutėje

// .included(searchFor, index) - grąžina boolean'ą, jei searchFor value is found
console.log(manoTekstas.includes("i", 0)); // ieško visame tekste
console.log(manoTekstas.includes("a", 21)); // ieško "a" raidės tik nuo 21 simbolio;

// .startsWith(value)
console.log(manoTekstas.startsWith("Šia"));

// .ends.With(value)
console.log(manoTekstas.endsWith("!"));

// .indexOf(reikšmė)
console.log(manoTekstas.indexOf("yra"));
console.log(manoTekstas.indexOf("a", 21));

// .lastIndexOf(reikšmė)
console.log(manoTekstas.lastIndexOf("a")); // atiduoda paskutinį kartą panaudotą "a", kuri yra 20-toje pozicijoje

// .repeat(kiekis) 
console.log(manoTekstas.repeat(2))
const tekstas = "abc";
console.log(tekstas.repeat(7));

// .replace(kąKeisime, kuoKeisime)
console.log(manoTekstas.replace("i", "*")) // į žvaigždutę pakeičia tik pirmosios "i" raidės reikšmę

//.replaceAll (73 eilutėje pakeistų visas "i" raides)

//.split(pagalKą)
console.log(manoTekstas.split(" ")) // atiduoda sukarpytą "į gabalus" tekstą;
console.log(manoTekstas.split("")) // atiduoda sukarpytą "į raides" tekstą;

//  HTML'O NEREKOMENDUOJAMA RAŠYTI DIDELĖMIS RAIDĖMIS

// .toLowerCase(), toUpperCase(),
console.log(manoTekstas.toLowerCase());
console.log(manoTekstas.toUpperCase());

// .trim() - panaikina white space'us (tarpelius)
const darVienasTekstas = "    jau sutemo    "
console.log(darVienasTekstas.trim());
console.log(darVienasTekstas);

// PASIBANDYMAI: 

const manoSkaicius = 15.9875162156;
const manoTekstukas = 'Laukiu vasaros';

console.log(manoSkaicius.toFixed(8));
console.log(manoSkaicius + manoTekstukas);
console.log(typeof manoSkaicius.toString());
console.log(manoTekstukas.replaceAll('vasaros', '***'));
