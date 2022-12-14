'use strict';
const result = document.querySelector('.result');
// const resultByClass = document.getElementsByClassName('result'); <--- tas pats, kas ir viršuje
const wrapper = document.querySelector('#wrapper');

const content = document.querySelector('.content');


const savaitgalis = ['Penktadienis', 'Šeštadienis', 'Sekmadienis'];
let rezultatas = '';

for(let i = 0; i < savaitgalis.length; i++) {
    rezultatas = rezultatas + ' ' + savaitgalis[i] +i;
}

result.innerText = rezultatas;

wrapper.innerText = 'Šiandien Ketvirtadienis';

content.innerHTML = '<h1>Ar mums pavyko?</h1>';

content.style.fontSize = '43px';
content.style.color = 'red';

content.classList.add('red'); //prideda klasę į HTML
