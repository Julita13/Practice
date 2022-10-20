// 3. Pratimas, kai išrenkamas random studento vardas. 


const studentai = ['Ana', 'Andrius', 'Aušra', 'Darius', 
'Edita', 'EglėN', 'EglėP', 'Gediminas', 'Gintas', 
'Jevgenij', 'Julita', 'Marius', 'Rūta', 'Virginija', 
'Vytautas'];
const max = Math.floor(studentai.length);
const random = Math.floor(Math.random() * (max - 1 + 1)) + 1;

let result = '';
for (let i = 1; i < studentai.length; i++) {
  if (i === random) {
    result += `<p class="red">${studentai[i]}</p>`;
  } else {
    result += `<p>${studentai[i]}</p>`;
  }
}

document.body.innerHTML = result;