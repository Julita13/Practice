const submit = document.querySelector("#farm-issues");

submit.addEventListener("submit", (e) => {
    e.preventDefault(); 
    const width = document.querySelector("#width").value;
    const length = document.querySelector("#length").value; 
    const answer = document.querySelector("#answer");
    const plotas = (width * length)/10000;
    answer.innerText = `Plotas: ${plotas} ha`;
});
