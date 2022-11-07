//  SPLICE: pašalina elementus. Savaitės dienų atveju: šalinama nuo 0 - pirmos dienos, šalinami 2 elementai (pirmadienis ir antradienis)
const savaitėsDienos = ['Pirmadienis', 'Antradienis', 'Trečiadienis', "Ketvirtadienis", "Penktadienis", "Šeštadienis", "Sekmadienis"];

savaitėsDienos.splice(0,2);
console.log(savaitėsDienos);

// Su juo taip pat galima ir pridėti elementus (nurodome: "nuo kurio elemento", "kiek elementų", "elementai"): 

// const savaitėsDienos = ['Pirmadienis', 'Antradienis', 'Trečiadienis', "Ketvirtadienis", "Penktadienis", "Šeštadienis", "Sekmadienis"];
// savaitėsDienos.splice(0, 2, "Šeštadienis", "Sekmadienis");
// console.log(savaitėsDienos);

// Be to, taip pat galime sužinoti, kokie elementai buvo panaikinti: 
// const savaitėsDienos = ['Pirmadienis', 'Antradienis', 'Trečiadienis', "Ketvirtadienis", "Penktadienis", "Šeštadienis", "Sekmadienis"];
// let išimtiElementai = savaitėsDienos.splice(0, 2, "Šeštadienis", "Sekmadienis");
// console.log(savaitėsDienos);
// console.log(išimtiElementai);

// SLICE: 
let mėnesiai = ["Sausis", "Vasaris", "Kovas", "Balandis", "Gegužė"];
let naujasMasyvas = mėnesiai.slice(1,2);
console.log(mėnesiai);
console.log(naujasMasyvas);

// !(pirmas masyvas - mėnesiai - lieka toks pats, visi pokyčiai atsiranda NAUJAME masyve!)

// CONCAT - sukuria naują masyvą, kuriame yra kitų masyvų vertės ir papildomi elementai. Galime sujunginėti ir daugiau nei vieną masyvą!

let naminiaiGyvūnai = ['Katė', "Šuo"];
let laukiniaiGyvūnai = ["Liūtas", "Tigras"];
let ropliai = ["Krokodilas", "Vėžlys"];

let gyvūnai = naminiaiGyvūnai.concat(laukiniaiGyvūnai, ropliai);
console.log(gyvūnai);

// INCLUDES:

// INDEXOF: ieško nurodyto elemento nuo nurodyto atspirties taško.

console.log(mėnesiai.indexOf('Kovas')); // jei nenurodome skaičių, ieško nuo nulinio elemento. Jei išmeta -1, reiškia tokio elemento NĖRA. 

//  LASTINDEXOF - ieško nuo galo (iš dešinės pusės)

console.log(mėnesiai.lastIndexOf('Balandis'));

// INCLUDES: patikrina, ar elementas yra masyve ar ne. Grąžina tik BOOLEAN'ą: TRUE arba FALSE

console.log(mėnesiai.includes("Kovas"));

// FIND: grąžina pirmąjį surastą elementą: 

let findResult = mėnesiai.find((mėnuo) => mėnuo === "Kovas");
// let findResult = mėnesiai.find((a) => a === "Kovas"); <- tas pats
console.log(findResult);

let filterResult = mėnesiai.filter((mėnuo, index) => index === 2);
console.log(filterResult);