// 2. Pratimas
// Sukurkite modulį pavadinimu header.js. Šiame modulyje bus funkcija, kuri paims app kaip argumentą, tačiau nieko negrąžins. 
// Šios funkcijos tikslas - į app.innerHTML pridėti (t.y. +=) header'io kodą (pasirašykite standartinį HTML su inline CSS). 
// Šį modulį importuokite į pagrindinį file'ą ir paduokite app, kuris bus document.body. 
// Taip, puslapio viršuje turėtų atsivaizduoti header'is, kuris importuotas iš header.js.

import { appendingHeader } from "./header.js";

appendingHeader(document.body)