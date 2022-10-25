const submit = document.querySelector("#farm-issues");
const answer = document.querySelector("#answer");
const profit = document.querySelector("#pelnas");
const bulves = document.querySelector("#bulves");
const morkos = document.querySelector("#morkos");
const runkeliai = document.querySelector("#runkeliai");
const finalResult = document.querySelector("#result");

submit.addEventListener("submit", (e) => {
    e.preventDefault(); 
    const width = document.querySelector("#width").value;
    const length = document.querySelector("#length").value; 
    const plotas = (width * length)/10000;
    answer.innerText = `Plotas: ${plotas} ha`;
    const bulviuPlotas = (plotas / 3).toFixed(2);
    bulves.innerText = `Bulvėmis užsodinta: ${bulviuPlotas}ha`;
    const runkeliuPlotas = (plotas * 0.1).toFixed(2);
    runkeliai.innerText = `Runkeliais užsodinta: ${runkeliuPlotas}ha`;
    const morkuPlotas = (plotas - bulviuPlotas - runkeliuPlotas).toFixed(2);
    morkos.innerText = `Morkomis užsodinta: ${morkuPlotas}ha`;
    const bulviuKg = document.querySelector("#n").value;
    const runkeliuKg = document.querySelector("#m").value;
    const morkuKg = document.querySelector("#k").value;
    const pelnas = ((bulviuPlotas * 100 * bulviuKg * 0.2) + (runkeliuPlotas * 100 * runkeliuKg * 0.13) + (morkuPlotas * 100 * morkuKg * 0.16)).toFixed(2);
    profit.innerText = `Pelnas: ${pelnas}`;
    finalResult.innerText = `Galutinis atsakymas: ${plotas} ${bulviuPlotas} ${runkeliuPlotas} ${morkuPlotas} ${pelnas}`
});

