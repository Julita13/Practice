// 1. Pratimas
// Įmonė visiems savo darbuotojams duoda Kalėdų bonusą - 50 eurų. 
// Tiems darbuotojams, kurie dirba ilgiau nei 10 metų - prideda papildomus 50 eurų 
// (bendrai - 100 eurų). O jei dirba 20 metų ar daugiau - papildomus 100 eurų (iš viso - 200 eurų). 
// Parašyk programą, kuri leistų darbuotojui įsivesti skaičių kiek dirbo metų įmonėje, 
// input elementu - atsirastų tekstas su pervedamu bonusu.
// Pvz: [16] => "Jūsų bonusas: 100 eurų".

document.getElementById("first-task").addEventListener("submit", calculateBonus);

function calculateBonus(event) {
    event.preventDefault();
    const bonus = 50;
    const workDuration = document.querySelector("input[name=duration]").value;
    const firstAnswer = document.querySelector("#first-answer");

    if(workDuration < 10) {
        firstAnswer.innerText = `Jūsų bonusas: ${bonus} eurų`;
    } else if (workDuration < 20) {
        firstAnswer.innerText = `Jūsų bonusas: ${bonus+50} eurų`;
    } else {
        firstAnswer.innerText = `Jūsų bonusas: ${bonus+150} eurų`;
    }
}

// 2. Pratimas
// Kiek dienų šiais metais? Parašykite programą, kur įvedus metus - pasakys ar 
// jie keliemieji, ar ne (po forma). Kaip apskaičiuoti ar keliemiji metai? Jie 
// turi dalintis iš keturių, bet jei dalinasi iš 100, tai turi dalintis ir iš 400, 
// kad būtų keliamieji (angl. a year is a leap year if it is divisible by four, 
// except that any year divisible by 100 is a leap year only if it is also 
// divisible by 400). Tai - populiari užduotis, tad internete rasite ne vieną 
// versiją, ir daug teorijos kaip skirtingi žmonės skaičiuoja. Tad rekomenduojame 
// padarius - pasitikrinti ir kitų žmonių idėjas.

function isLeapYear(year) {
    return ((year % 4 == 0) && (year % 100 != 0)) || (year % 400 == 0);
  }

function calculateYear(event) {
    event.preventDefault();
    const year = document.querySelector("input[name=year]").value;
    const secondAnswer = document.querySelector("#second-answer");
    if (isLeapYear(year)) {
        secondAnswer.innerText = `${year} yra keliamieji`;
      } else {
        secondAnswer.innerText = `${year} nėra keliamieji`;
      }
}

document.querySelector("#second-task").addEventListener("submit", calculateYear);

// 3. Pratimas
// Parašyk programą, kurioje vartotojas įrašo temperatūra Celsijumi, 
// o programa paskaičiuoja ir atvaizduoja tą pačią temperatūrą Farenheitu.

document.getElementById("third-task").addEventListener("submit", calculateFarenheit);

function calculateFarenheit(event) {
    event.preventDefault();
    const Celsius = document.querySelector("input[name=temperature]").value;
    const thirdAnswer = document.querySelector("#third-answer");
    const result = (Celsius*1.8)+32;

    return thirdAnswer.innerText = `Temperatūra Farenheito skalėje: ${result} °F`
}

// 4. Pratimas
// Sukurk programą, kurioje reikia įvesti elektroninį paštą ir paspausti mygtuką 
// "sutinku gauti laiškus". Suvedus duomenis, jei mygtukas "sutinku" nepasirinktas - išmeta - 
// "Registracija nesėkminga. Jei pasirinktas - išmeta "El. paštas [paštas] sėkmingai užregistruotas".

document.querySelector("#fourth-task").addEventListener("submit", completeRegistration);

function completeRegistration(event) {
    event.preventDefault();
    const email = document.querySelector("input[name=email]").value;
    const fourthAnswer = document.querySelector("#fourth-answer");
    const agreement = document.getElementById("agree").checked;
    fourthAnswer.innerText = agreement ? `El. paštas ${email} sėkmingai užregistruotas` : "Registracija nesėkminga";
}

// 5. Pratimas
//  Sukurk programą, kurioje bus du inputai - vardas (text) ir skaičius (number) ir tuščias <ul>. 
// Įrašius formoje duomenis, po apačia turi susikurti list itemų tiek, kiek tu parašei skaičių. 
// List itemuose turi būti tavo vardas :)

function createList(event) {
    event.preventDefault();
    const vardas = document.querySelector("input[name=vardas]").value;
    const myNumber = document.querySelector("input[name=skaičius]").value;
    const fifthAnswer = document.querySelector("#fifth-answer");
    fifthAnswer.innerHTML = ""
    for (let i = 0; i < myNumber; i++) {
        let tagLi = document.createElement("li");
        tagLi.textContent = vardas;
        fifthAnswer.append(tagLi)
    }
}

document.querySelector("#fifth-task").addEventListener("submit", createList);

// 6. Pratimas
// Sukurkite formą, kurioje vienas input - skaičius, įvesti stačiakampio dydį. 
// Po forma - tegul būna tusčias div elementas. Jame reikia atvaizduoi trikampį pagal įvestą input. 
// Šis pratimas - klasika programavimo ciklų srityje, tiek atsakymų, tiek teorijų, tiek sąmokslo teorijų internete - daugiau nei reikia;
//  pasibaigus ar pastrigus - būtinai pasinagrinėkite (gal vienas iš paaiškinimų jums atvers duris į ciklų pasaulio aiškumą).

function createTriangle(event) {
    event.preventDefault(); 
    const triangleSize = document.querySelector("input[name=size]").value;
    const sixthAnswer = document.querySelector("#sixth-answer");

    let outcome = "";
    for (i = 0; i < triangleSize; i++) {
        for (j = 0; j <= i; j++) {
            outcome += "*";
        }
        outcome += "<br>";
        sixthAnswer.innerText = outcome;
    }
}
document.querySelector("#sixth-task").addEventListener("submit", createTriangle);

//  KAME PROBLEMA 6 PRATIME? 