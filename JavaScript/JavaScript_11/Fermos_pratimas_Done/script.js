const ilgis = document.querySelector('#ilgis');
const plotis = document.querySelector('#plotis');
const submit = document.querySelector('.submit');
const plotas = document.querySelector('.plotas');
const bulves = document.querySelector('.bulves');
const runkeliai = document.querySelector('.runkeliai');
const morkos = document.querySelector('.morkos');
const bulviuKg = document.querySelector('#n');
const runkeliuKg = document.querySelector('#m');
const morkuKg = document.querySelector('#k');
const answer = document.querySelector('.answer');



submit.addEventListener('click', (e) => {
  e.preventDefault();
  const ha = ilgis.value * plotis.value / 10000;
  const bulvesHa = ha / 3;
  const runkeliaiHa = ha * 0.1;
  const morkosHa = ha - runkeliaiHa - bulvesHa;
  const pelnas = ((bulvesHa * 100 * bulviuKg.value * 0.2) + (runkeliaiHa * 100 * runkeliuKg.value * 0.13) + (morkosHa * 100 * morkuKg.value * 0.16)).toFixed(2);
  plotas.innerText = `Plotas: ${ha} ha`;
  bulves.innerText = `Bulves: ${bulvesHa.toFixed(2)} ha`;
  runkeliai.innerText = `Runkeliai: ${runkeliaiHa.toFixed(2)} ha`;
  morkos.innerText = `Morkos: ${morkosHa.toFixed(2)} ha`;
  answer.innerText = `Pelnas: ${pelnas}`;
})